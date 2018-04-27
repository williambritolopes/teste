<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Message;
use AppBundle\Entity\Status;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Message controller.
 *
 * @Route("message")
 */
class MessageController extends Controller
{
    /**
     * Lists all message entities.
     *
     * @Route("/", name="message_index")
     * @Method("GET")
     */
    public function indexAction()
    {

	    $em = $this->getDoctrine()->getManager();

	    $message = $em->getRepository('AppBundle:Message')
	                  ->createQueryBuilder('e')
	                  ->select('e')
	                  ->getQuery()
	                  ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
	                  ->getArrayResult();

	    return new JsonResponse($message);
    }

    /**
     * Creates a new message entity.
     *
     * @Route("/new", name="message_new")
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

	    $msg = $request->request->get('message');
//	    $updated = $request->request->get('updated');
//	    $deleted = $request->request->get('deleted');
	    $user = $request->request->get('user');
	    $status = $request->request->get('status');

	    $message = new Message();

	    $message->setCreatedDate($created);

	    if(!empty($msg)){
		    $message->setMessage($msg);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'message'), 400);
	    }
	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $message->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'user'), 400);
	    }
	    if(!empty($status)){
		    $status_id = $this->getDoctrine()->getRepository('AppBundle:Status')->findOneBy(array('id' => $status));

		    if($user_id != null){
			    $message->setStatus($status_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'status'), 400);
	    }
//	    if(!empty($updated)){
//		    $message->setUpdatedDate( new \DateTime($updated));
//	    }
//	    if(!empty($deleted)){
//		    $message->setDeletedDate( new \DateTime($deleted));
//	    }



	    $em = $this->getDoctrine()->getManager();
	    $em->persist($message);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);

    }

    /**
     * Finds and displays a message entity.
     *
     * @Route("/{id}", name="message_show")
     * @Method("GET")
     */
    public function showAction(Message $message)
    {
//        $deleteForm = $this->createDeleteForm($message);
//
//        return $this->render('message/show.html.twig', array(
//            'message' => $message,
//            'delete_form' => $deleteForm->createView(),
//        ));

	    $message = $message->getId();
	    $em = $this->getDoctrine()->getManager();
	    $message = $em->createQuery(
		            'SELECT p
				    FROM AppBundle:Message p
				    WHERE p.id = :id'
	    )->setParameter('id', $message)
	                   ->getArrayResult();

	    return new JsonResponse($message[0]);

    }

    /**
     * Displays a form to edit an existing message entity.
     *
     * @Route("/{id}/edit", name="message_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Message $message)
    {
//
	    $msg = $request->request->get('message');
	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $user = $request->request->get('user');
	    $status = $request->request->get('status');

//	    $message->setCreatedDate($created);

	    if(!empty($msg)){
		    $message->setMessage($msg);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'message'), 400);
	    }

	    if(!empty($user)){
		    $users = $this->getDoctrine()->getRepository('AppBundle:User');
		    $user_id = $users->findOneBy(array('id' => $user));

		    if($user_id != null){
			    $message->setUser($user_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
		    }
	    }
	    if(!empty($status)){
		    $status_id = $this->getDoctrine()->getRepository('AppBundle:Status')->findOneBy(array('id' => $status));

		    if($status_id != null){
			    $message->setStatus($status_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
		    }
	    }

	    if(!empty($updated)){
		    $message->setUpdatedDate( new \DateTime($updated));
	    }
	    if(!empty($deleted)){
		    $message->setDeletedDate( new \DateTime($deleted));
	    }


	    $em = $this->getDoctrine()->getManager();
	    $em->persist($message);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a message entity.
     *
     * @Route("/{id}", name="message_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Message $message)
    {
//        $form = $this->createDeleteForm($message);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($message);
//            $em->flush();
//        }
//
//        return $this->redirectToRoute('message_index');

	    $deleted = $request->request->get('deleted');
	    $message->setDeletedDate(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($message);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a message entity.
     *
     * @param Message $message The message entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Message $message)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('message_delete', array('id' => $message->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
