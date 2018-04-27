<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Status;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Status controller.
 *
 * @Route("status")
 */
class StatusController extends Controller
{
    /**
     * Lists all status entities.
     *
     * @Route("/", name="status_index")
     * @Method("GET")
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $statuses = $em->getRepository('AppBundle:Status')->findAll();
//
//        return $this->render('status/index.html.twig', array(
//            'statuses' => $statuses,
//        ));
	    $em = $this->getDoctrine()->getManager();

	    $statuses = $em->getRepository('AppBundle:Status')
	                    ->createQueryBuilder('e')
	                    ->select('e')
	                    ->getQuery()
					    ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
					    ->getArrayResult();

	    return new JsonResponse($statuses);

    }

    /**
     * Creates a new status entity.
     *
     * @Route("/new", name="status_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $condition = $request->request->get('condition');

	    $status = new Status();
	    $status->setCreated($created);


	    if(!empty($condition)){
		    $status->setStatus($condition);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $status->setUpdated(new \DateTime($updated));
	    }else{
		    $status->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $status->setDeleted(new \DateTime($deleted));
	    }else{
		    $status->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($status);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a status entity.
     *
     * @Route("/{id}", name="status_show")
     * @Method("GET")
     */
    public function showAction(Status $status)
    {
	    $statuses = $status->getId();
	    $em = $this->getDoctrine()->getManager();
	    $status = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Status p
				    WHERE p.id = :id'
	    )->setParameter('id', $statuses)
	                   ->getArrayResult();

	    return new JsonResponse($status[0]);
    }

    /**
     * Displays a form to edit an existing status entity.
     *
     * @Route("/{id}/edit", name="status_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Status $status)
    {
//	    $date = $request->request->get('created');
//	    if(!empty($date)){
//		    $created = new \DateTime($request->request->get('created'));
//	    }else{
//		    $created = new \DateTime('now');
//	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $description = $request->request->get('description');

//	    $status = new Status();
//	    $status->setCreated($created);


	    if(!empty($description)){
		    $status->setStatus($description);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $status->setUpdated(new \DateTime($updated));
	    }

	    if(!empty($deleted)){
		    $status->setDeleted(new \DateTime($deleted));
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($status);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a status entity.
     *
     * @Route("/{id}", name="status_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Status $status)
    {
	    $deleted = $request->request->get('deleted');
	    $status->setDeleted(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($status);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a status entity.
     *
     * @param Status $status The status entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Status $status)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('status_delete', array('id' => $status->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
