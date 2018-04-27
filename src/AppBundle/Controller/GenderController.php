<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Gender;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Gender controller.
 *
 * @Route("gender")
 */
class GenderController extends Controller
{
    /**
     * Lists all gender entities.
     *
     * @Route("/", name="gender_index")
     * @Method("GET")
     */
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    $genders = $em->getRepository('AppBundle:Gender')
	                 ->createQueryBuilder('e')
	                 ->select('e')
	                 ->getQuery()
	                 ->getArrayResult();

	    return new JsonResponse($genders);
    }

    /**
     * Creates a new gender entity.
     *
     * @Route("/new", name="gender_new")
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
	    $gender = $request->request->get('gender');

	    $genders = new Gender();
	    $genders->setCreatedDate($created);


	    if(!empty($gender)){
		    $genders->setGender($gender);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $genders->setUpdateDate(new \DateTime($updated));
	    }else{
		    $genders->setUpdateDate(null);
	    }
	    if(!empty($deleted)){
		    $genders->setDeletedDate(new \DateTime($deleted));
	    }else{
		    $genders->setDeletedDate(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($genders);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
//        $gender = new Gender();
//        $form = $this->createForm('AppBundle\Form\GenderType', $gender);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($gender);
//            $em->flush();
//
//            return $this->redirectToRoute('gender_show', array('id' => $gender->getId()));
//        }
//
//        return $this->render('gender/new.html.twig', array(
//            'gender' => $gender,
//            'form' => $form->createView(),
//        ));
    }

    /**
     * Finds and displays a gender entity.
     *
     * @Route("/{id}", name="gender_show")
     * @Method("GET")
     */
    public function showAction(Gender $gender)
    {
	    $genders = $gender->getId();
	    $em = $this->getDoctrine()->getManager();
	    $gender = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Gender p
				    WHERE p.id = :id'
	    )->setParameter('id', $genders)
	                 ->getArrayResult();

	    return new JsonResponse($gender[0]);
    }

    /**
     * Displays a form to edit an existing gender entity.
     *
     * @Route("/{id}/edit", name="gender_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Gender $gender)
    {

//    	$date = $request->request->get('created');
//	    if(!empty($date)){
//		    $created = new \DateTime($request->request->get('created'));
//	    }else{
//		    $created = new \DateTime('now');
//	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $genders = $request->request->get('gender');

//	    $genders = new Gender();
//	    $gender->setCreated($created);


	    if(!empty($genders)){
		    $gender->setGender($genders);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
	    }

	    if(!empty($updated)){
		    $gender->setUpdateDate(new \DateTime($updated));
	    }else{
		    $gender->setUpdateDate(null);
	    }
	    if(!empty($deleted)){
		    $gender->setDeletedDate(new \DateTime($deleted));
	    }else{
		    $gender->setDeletedDate(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($gender);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a gender entity.
     *
     * @Route("/{id}", name="gender_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Gender $gender)
    {
	    $deleted = $request->request->get('deleted');

	    if(!empty($deleted)){
		    $gender->setDeletedDate(new \DateTime($deleted));
	    }else{
		    $gender->setDeletedDate(new \DateTime('now'));
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($gender);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a gender entity.
     *
     * @param Gender $gender The gender entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Gender $gender)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gender_delete', array('id' => $gender->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
