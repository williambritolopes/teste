<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Version;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Version controller.
 *
 * @Route("version")
 */
class VersionController extends Controller
{
    /**
     * Lists all version entities.
     *
     * @Route("/", name="version_index")
     * @Method("GET")
     */
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    $favorites = $em->getRepository('AppBundle:Version')
	                    ->createQueryBuilder('e')
	                    ->select('e')
	                    ->getQuery()
					    ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
					    ->getArrayResult();

	    return new JsonResponse($favorites);
    }

    /**
     * Creates a new version entity.
     *
     * @Route("/new", name="version_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($date);
	    }else{
		    $created = new \DateTime('now');
	    }

	    $versiondescription = $request->request->get('version');
	    $type = $request->request->get('type');

	    $version = new Version();
	    $version->setCreated($created);


	    if(!empty($versiondescription)){
		    $version->setVersion($versiondescription);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'versiondescription'), 400);
	    }

	    if(!empty($type)){
		    $type_id = $this->getDoctrine()->getRepository('AppBundle:Type')->findOneBy(array('id' => $type));

		    if($type_id != null){
			    $version->setType($type_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'type not found'), 404);
		    }
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($version);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a version entity.
     *
     * @Route("/{id}", name="version_show")
     * @Method("GET")
     */
    public function showAction(Version $version)
    {
	    $version = $version->getId();
	    $em = $this->getDoctrine()->getManager();
	    $version = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Version p
				    WHERE p.id = :id'
	    )->setParameter('id', $version)
	                   ->getArrayResult();

	    return new JsonResponse($version[0]);
    }

    /**
     * Displays a form to edit an existing version entity.
     *
     * @Route("/{id}/edit", name="version_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Version $version)
    {

//    	$date = $request->request->get('created');
//	    if(!empty($date)){
//		    $created = new \DateTime($date);
//	    }else{
//		    $created = new \DateTime('now');
//	    }

	    $versiondescription = $request->request->get('version');
	    $type = $request->request->get('type');

//	    $version->setCreated($created);


	    if(!empty($versiondescription)){
		    $version->setVersion($versiondescription);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'versiondescription'), 400);
	    }

	    if(!empty($type)){
		    $type_id = $this->getDoctrine()->getRepository('AppBundle:Type')->findOneBy(array('id' => $type));

		    if($type_id != null){
			    $version->setType($type_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'type not found'), 404);
		    }
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($version);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a version entity.
     *
     * @Route("/{id}", name="version_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Version $version)
    {
//	    $deleted = $request->request->get('deleted');
//	    $favorite->setDeleted(new \DateTime($deleted));
//
//	    $em = $this->getDoctrine()->getManager();
//	    $em->persist($favorite);
//	    $em->flush();

	    return new JsonResponse(array('ERROR' => 'Não é possivel deletar versões'), 201);
    }

    /**
     * Creates a form to delete a version entity.
     *
     * @param Version $version The version entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Version $version)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('version_delete', array('id' => $version->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
