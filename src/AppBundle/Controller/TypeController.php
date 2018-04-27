<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Type controller.
 *
 * @Route("type")
 */
class TypeController extends Controller
{
	/**
	 * Lists all type entities.
	 *
	 * @Route("/", name="type_index")
	 * @Method("GET")
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

		$type = $em->getRepository('AppBundle:Type')
		               ->createQueryBuilder('e')
		               ->select('e')
		               ->getQuery()
		               ->getArrayResult();

		return new JsonResponse($type);
	}

	/**
	 * Creates a new type entity.
	 *
	 * @Route("/new", name="type_new")
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
		$types = $request->request->get('type');

		$type = new Type();
		$type->setCreated($created);


		if(!empty($types)){
			$type->setType($types);
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
		}

		if(!empty($updated)){
			$type->setUpdated(new \DateTime($updated));
		}else{
			$type->setUpdated(null);
		}
		if(!empty($deleted)){
			$type->setDeleted(new \DateTime($deleted));
		}else{
			$type->setDeleted(null);
		}

		$em = $this->getDoctrine()->getManager();
		$em->persist($type);
		$em->flush();

		return new JsonResponse(array('created' => 'true'), 201);
	}

	/**
	 * Finds and displays a type entity.
	 *
	 * @Route("/{id}", name="type_show")
	 * @Method("GET")
	 */
	public function showAction(Type $type)
	{
		$types = $type->getId();
		$em = $this->getDoctrine()->getManager();
		$type = $em->createQuery(
			'SELECT p
				    FROM AppBundle:Type p
				    WHERE p.id = :id'
		)->setParameter('id', $types)
		               ->getArrayResult();

		return new JsonResponse($type[0]);
	}

	/**
	 * Displays a form to edit an existing type entity.
	 *
	 * @Route("/{id}/edit", name="type_edit")
	 * @Method({"GET", "POST"})
	 */
	public function editAction(Request $request, Type $type)
	{
		$date = $request->request->get('created');
		if(!empty($date)){
			$created = new \DateTime($request->request->get('created'));
		}else{
			$created = new \DateTime('now');
		}

		$updated = $request->request->get('updated');
		$deleted = $request->request->get('deleted');
		$types = $request->request->get('type');

//	    $type = new Type();
		$type->setCreated($created);


		if(!empty($types)){
			$type->setType($types);
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'condition'), 400);
		}

		if(!empty($updated)){
			$type->setUpdated(new \DateTime($updated));
		}else{
			$type->setUpdated(null);
		}
		if(!empty($deleted)){
			$type->setDeleted(new \DateTime($deleted));
		}else{
			$type->setDeleted(null);
		}

		$em = $this->getDoctrine()->getManager();
		$em->persist($type);
		$em->flush();

		return new JsonResponse(array('created' => 'true'), 201);
	}

	/**
	 * Deletes a type entity.
	 *
	 * @Route("/{id}", name="type_delete")
	 * @Method("DELETE")
	 */
	public function deleteAction(Request $request, Type $type)
	{
		$deleted = $request->request->get('deleted');
		$type->setDeleted(new \DateTime($deleted));

		$em = $this->getDoctrine()->getManager();
		$em->persist($type);
		$em->flush();

		return new JsonResponse(array('deleted' => 'true'), 201);
	}

	/**
	 * Creates a form to delete a type entity.
	 *
	 * @param Type $type The type entity
	 *
	 * @return \Symfony\Component\Form\Form The form
	 */
	private function createDeleteForm(Type $type)
	{
		return $this->createFormBuilder()
		            ->setAction($this->generateUrl('type_delete', array('id' => $type->getId())))
		            ->setMethod('DELETE')
		            ->getForm()
			;
	}
}
