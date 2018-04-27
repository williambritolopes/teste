<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Favorite;
use AppBundle\Entity\Magazine;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Favorite controller.
 *
 * @Route("favorite")
 */
class FavoriteController extends Controller
{
    /**
     * Lists all favorite entities.
     *
     * @Route("/", name="favorite_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $favorites = $em->getRepository('AppBundle:Favorite')
                        ->createQueryBuilder('e')
                        ->select('e')
                        ->getQuery()
						->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
						->getArrayResult();

        return new JsonResponse($favorites);
    }

    /**
     * Creates a new favorite entity.
     *
     * @Route("/new", name="favorite_new")
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
	    $user = $request->request->get('user');
	    $magazine = $request->request->get('magazine');

	    $favorite = new Favorite();
	    $favorite->setCreated($created);


	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $favorite->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'user'), 404);
	    }

	    if(!empty($magazine)){
		    $magazine_id = $this->getDoctrine()->getRepository('AppBundle:Content')->findOneBy(array('magazine' => $magazine));

		    if($magazine_id != null){
			    $favorite->setMagazine($magazine_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'magazine not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'magazine'), 404);
	    }

	    if(!empty($updated)){
		    $favorite->setUpdated(new \DateTime($updated));
	    }else{
		    $favorite->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $favorite->setDeleted(new \DateTime($deleted));
	    }else{
		    $favorite->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($favorite);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a favorite entity.
     *
     * @Route("/{id}", name="favorite_show")
     * @Method("GET")
     */
    public function showAction(Favorite $favorite)
    {
	    $favorite = $favorite->getId();
	    $em = $this->getDoctrine()->getManager();
	    $favorite = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Favorite p
				    WHERE p.id = :id'
	    )->setParameter('id', $favorite)
	                   ->getArrayResult();

	    return new JsonResponse($favorite[0]);
    }

    /**
     * Displays a form to edit an existing favorite entity.
     *
     * @Route("/{id}/edit", name="favorite_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Favorite $favorite)
    {
//	    $date = $request->request->get('created');
//	    if(!empty($date)){
//		    $created = new \DateTime($request->request->get('created'));
//	    }else{
//		    $created = new \DateTime('now');
//	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $user = $request->request->get('user');
	    $magazine = $request->request->get('magazine');

//	    $favorite->setCreated($created);


	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $favorite->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'user'), 400);
	    }

	    if(!empty($magazine)){
		    $magazine_id = $this->getDoctrine()->getRepository('AppBundle:Magazine')->findOneBy(array('id' => $magazine));

		    if($magazine_id != null){
			    $favorite->setMagazine($magazine_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'magazine not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'magazine'), 400);
	    }

	    if(!empty($updated)){
		    $favorite->setUpdated(new \DateTime($updated));
	    }else{
		    $favorite->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $favorite->setDeleted(new \DateTime($deleted));
	    }else{
		    $favorite->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($favorite);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a favorite entity.
     *
     * @Route("/{id}", name="favorite_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Favorite $favorite)
    {

	    $deleted = $request->request->get('deleted');
	    if(!empty($deleted)){
		    $favorite->setDeleted(new \DateTime($deleted));
	    }else{
		    $favorite->setDeleted(new \DateTime('now'));
	    }
	    $em = $this->getDoctrine()->getManager();
		$em->persist($favorite);
		$em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);

    }

    /**
     * Creates a form to delete a favorite entity.
     *
     * @param Favorite $favorite The favorite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Favorite $favorite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('favorite_delete', array('id' => $favorite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
