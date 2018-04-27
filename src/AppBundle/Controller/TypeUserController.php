<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Typeuser controller.
 *
 * @Route("typeuser")
 */
class TypeUserController extends Controller
{
    /**
     * Lists all typeUser entities.
     *
     * @Route("/", name="typeuser_index")
     * @Method("GET")
     */
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    $typeuser = $em->getRepository('AppBundle:TypeUser')
	                   ->createQueryBuilder('e')
	                   ->select('e')
	                   ->getQuery()
	                   ->getArrayResult();

	    return new JsonResponse($typeuser);
    }

    /**
     * Creates a new typeUser entity.
     *
     * @Route("/new", name="typeuser_new")
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
	    $type = $request->request->get('type');

	    $typeUser = new TypeUser();
	    $typeUser->setCreated($created);


	    if(!empty($type)){
		    $typeUser->setType($type);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $typeUser->setUpdated(new \DateTime($updated));
	    }else{
		    $typeUser->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $typeUser->setDeleted(new \DateTime($deleted));
	    }else{
		    $typeUser->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($typeUser);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a typeUser entity.
     *
     * @Route("/{id}", name="typeuser_show")
     * @Method("GET")
     */
    public function showAction(TypeUser $typeUser)
    {
	    $typeUser = $typeUser->getId();
	    $em = $this->getDoctrine()->getManager();
	    $typeUser = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:TypeUser p
				    WHERE p.id = :id'
	    )->setParameter('id', $typeUser)
	                 ->getArrayResult();

	    return new JsonResponse($typeUser[0]);
    }

    /**
     * Displays a form to edit an existing typeUser entity.
     *
     * @Route("/{id}/edit", name="typeuser_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeUser $typeUser)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $type = $request->request->get('type');

//	    $typeUser = new TypeUser();
	    $typeUser->setCreated($created);


	    if(!empty($type)){
		    $typeUser->setType($type);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $typeUser->setUpdated(new \DateTime($updated));
	    }else{
		    $typeUser->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $typeUser->setDeleted(new \DateTime($deleted));
	    }else{
		    $typeUser->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($typeUser);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a typeUser entity.
     *
     * @Route("/{id}", name="typeuser_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeUser $typeUser)
    {
	    $deleted = $request->request->get('deleted');
	    $typeUser->setDeleted(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($typeUser);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a typeUser entity.
     *
     * @param TypeUser $typeUser The typeUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeUser $typeUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typeuser_delete', array('id' => $typeUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
