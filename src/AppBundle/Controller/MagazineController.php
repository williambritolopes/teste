<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Magazine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Magazine controller.
 *
 * @Route("magazine")
 */
class MagazineController extends Controller
{
    /**
     * Lists all magazine entities.
     *
     * @Route("/", name="magazine_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

	    $magazines = $em->getRepository('AppBundle:Magazine')
	                   ->createQueryBuilder('e')
	                   ->select('e')
	                   ->getQuery()
		                ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
	                   ->getArrayResult();

	    return new JsonResponse($magazines);
    }

    /**
     * Creates a new magazine entity.
     *
     * @Route("/new", name="magazine_new")
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

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $number= $request->request->get('number');
	    $description= $request->request->get('description');
	    $andressCover= $request->request->get('andressCover');
	    $andressFeatured= $request->request->get('andressFeatured');
	    $vol= $request->request->get('vol');
	    $language = $request->request->get('language');
	    $status = $request->request->get('status');

	    $magazine = new Magazine();
	    $magazine->setCreated($created);

	    if(!empty($number)){
		    $magazine->setNumber($number);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'number'), 400);
	    }
	    if(!empty($description)){
		    $magazine->setDescription($description);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'description'), 400);
	    }
        if(!empty($andressCover)){
		    $magazine->setAndressCover($andressCover);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'andressCover'), 400);
	    }
        if(!empty($andressFeatured)){
		    $magazine->setAndressFeatured($andressFeatured);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'andressFeatured'), 400);
	    }


//	    FKs
	    if(!empty($vol)){
		    $version = $this->getDoctrine()->getRepository('AppBundle:Version');
		    $vol_id = $version->findOneBy(array('id' => $vol));

		    if($vol_id != null){
			    $magazine->setVol($vol_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Version not found'), 404);
		    }
	    }

	    if(!empty($status)){
		    $statuses = $this->getDoctrine()->getRepository('AppBundle:Status');
		    $status_id = $statuses->findOneBy(array('id' => $status));

		    if($status_id != null){
			    $magazine->setStatus($status_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Status not found'), 404);
		    }
	    }
	    if(!empty($language)){
		    $languages = $this->getDoctrine()->getRepository('AppBundle:Language');
		    $lan_id = $languages->findOneBy(array('id' => $language));

		    if($lan_id != null){
			    $magazine->setLanguage($lan_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Language not found'), 404);
		    }
	    }

//	    if(!empty($updated)){
//		    $magazine->setUpdate(new \DateTime($updated));
//	    }else{
		    $magazine->setUpdated(null);
//	    }
//	    if(!empty($deleted)){
//		    $magazine->setDeleted(new \DateTime($deleted));
//	    }else{
		    $magazine->setDeleted(null);
//	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($magazine);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a magazine entity.
     *
     * @Route("/{id}", name="magazine_show")
     * @Method("GET")
     */
    public function showAction(Magazine $magazine)
    {
	    $magazines = $magazine->getId();
	    $em = $this->getDoctrine()->getManager();
	    $magazine = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Magazine p
				    WHERE p.id = :id'
	    )->setParameter('id', $magazines)
	                 ->getArrayResult();

	    return new JsonResponse($magazine[0]);
    }

    /**
     * Displays a form to edit an existing magazine entity.
     *
     * @Route("/{id}/edit", name="magazine_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Magazine $magazine)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($date);
	    }else{
		    $created = new \DateTime('now');
	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $number= $request->request->get('number');
	    $description= $request->request->get('description');
	    $andressCover= $request->request->get('andressCover');
	    $andressFeatured= $request->request->get('andressFeatured');
	    $vol= $request->request->get('vol');
	    $language = $request->request->get('language');
	    $status = $request->request->get('status');

	    if(!empty($number)){
		    $magazine->setNumber($number);
	    }
	    if(!empty($description)){
		    $magazine->setDescription($description);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'description'), 400);
	    }
	    if(!empty($andressCover)){
		    $magazine->setAndressCover($andressCover);
	    }
	    if(!empty($andressFeatured)){
		    $magazine->setAndressFeatured($andressFeatured);
	    }

//	    FKs
	    if(!empty($vol)){
		    $version = $this->getDoctrine()->getRepository('AppBundle:Version');
		    $vol_id = $version->findOneBy(array('id' => $vol));

		    if($vol_id != null){
			    $magazine->setVol($vol_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Version not found'), 404);
		    }
	    }

	    if(!empty($status)){
		    $statuses = $this->getDoctrine()->getRepository('AppBundle:Status');
		    $status_id = $statuses->findOneBy(array('id' => $status));

		    if($status_id != null){
			    $magazine->setStatus($status_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Status not found'), 404);
		    }
	    }
	    if(!empty($language)){
		    $languages = $this->getDoctrine()->getRepository('AppBundle:Languege');
		    $lan_id = $languages->findOneBy(array('id' => $language));

		    if($lan_id != null){
			    $magazine->setLanguage($lan_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'Language not found'), 404);
		    }
	    }

	    if(!empty($updated)){
		    $magazine->setUpdated(new \DateTime($updated));
	    }else{
		    $magazine->setUpdated($created);
	    }
	    if(!empty($deleted)){
		    $magazine->setDeleted(new \DateTime($deleted));
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($magazine);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a magazine entity.
     *
     * @Route("/{id}", name="magazine_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Magazine $magazine)
    {
	    $deleted = $request->request->get('deleted');
	    $magazine->setUpdated(new \DateTime('now'));
	    $magazine->setDeleted(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($magazine);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a magazine entity.
     *
     * @param Magazine $magazine The magazine entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Magazine $magazine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('magazine_delete', array('id' => $magazine->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
