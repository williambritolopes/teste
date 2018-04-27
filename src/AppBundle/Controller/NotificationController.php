<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Notification;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Notification controller.
 *
 * @Route("notification")
 */
class NotificationController extends Controller
{
    /**
     * Lists all notification entities.
     *
     * @Route("/", name="notification_index")
     * @Method("GET")
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $notifications = $em->getRepository('AppBundle:Notification')->findAll();
//
//        return $this->render('notification/index.html.twig', array(
//            'notifications' => $notifications,
//        ));

	    $em = $this->getDoctrine()->getManager();

	    $notifications = $em->getRepository('AppBundle:Notification')
	                    ->createQueryBuilder('e')
	                    ->select('e')
	                    ->getQuery()
					    ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
					    ->getArrayResult();

	    return new JsonResponse($notifications);
    }

    /**
     * Creates a new notification entity.
     *
     * @Route("/new", name="notification_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
//        $notification = new Notification();
//        $form = $this->createForm('AppBundle\Form\NotificationType', $notification);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($notification);
//            $em->flush();
//
//            return $this->redirectToRoute('notification_show', array('id' => $notification->getId()));
//        }
//
//        return $this->render('notification/new.html.twig', array(
//            'notification' => $notification,
//            'form' => $form->createView(),
//        ));

	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $user = $request->request->get('user');
	    $description = $request->request->get('description');

	    $notification = new Notification();
	    $notification->setCreated($created);


	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $notification->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'user'), 400);
	    }

	    if(!empty($description)){
		    $notification->setDescription(($description));
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'description'), 400);
	    }

	    if(!empty($updated)){
		    $notification->setUpdated(new \DateTime($updated));
	    }else{
		    $notification->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $notification->setDeleted(new \DateTime($deleted));
	    }else{
		    $notification->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($notification);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a notification entity.
     *
     * @Route("/{id}", name="notification_show")
     * @Method("GET")
     */
    public function showAction(Notification $notification)
    {
//        $deleteForm = $this->createDeleteForm($notification);
//
//        return $this->render('notification/show.html.twig', array(
//            'notification' => $notification,
//            'delete_form' => $deleteForm->createView(),
//        ));

	    $notification = $notification->getId();
	    $em = $this->getDoctrine()->getManager();
	    $notification = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Favorite p
				    WHERE p.id = :id'
	    )->setParameter('id', $notification)
	                   ->getArrayResult();

	    return new JsonResponse($notification[0]);
    }

    /**
     * Displays a form to edit an existing notification entity.
     *
     * @Route("/{id}/edit", name="notification_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Notification $notification)
    {

	    $user = $request->request->get('user');
	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $description = $request->request->get('description');

	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $notification->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }

	    if(!empty($description)){
		    $notification->setDescription($description);
	    }

	    if(!empty($updated)){
		    $notification->setUpdated(new \DateTime($updated));
	    }else{
		    $notification->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $notification->setDeleted(new \DateTime($deleted));
	    }else{
		    $notification->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($notification);
	    $em->flush();

	    return new JsonResponse(array('updated' => 'true'), 201);


    }

    /**
     * Deletes a notification entity.
     *
     * @Route("/{id}", name="notification_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Notification $notification)
    {
	    $deleted = $request->request->get('deleted');
	    $notification->setDeleted(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($notification);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);

    }

    /**
     * Creates a form to delete a notification entity.
     *
     * @param Notification $notification The notification entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Notification $notification)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('notification_delete', array('id' => $notification->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
