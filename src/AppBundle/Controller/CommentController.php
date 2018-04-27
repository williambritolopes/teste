<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Content;
use AppBundle\Entity\Status;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Comment controller.
 *
 * @Route("comment")
 */
class CommentController extends Controller
{
	/**
	 * Lists all comment entities.
	 *
	 * @Route("/", name="comment_index")
	 * @Method("GET")
	 */
	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();

		$comments = $em->getRepository('AppBundle:Comment')
		                ->createQueryBuilder('e')
		                ->select('e')
		                ->getQuery()
						->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
						->getArrayResult();

		if(!empty($comments)){
			$response = array('results'=> 'true',
			                  'comments' => $comments);
		}else{
			$response = array('results'=> 'false',
			                  'comments' => $comments);
		}

		return new JsonResponse($response);
	}

	/**
	 * Creates a new comment entity.
	 *
	 * @Route("/new", name="comment_new")
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

		$comments = $request->request->get('comment');
		$updated = $request->request->get('updated');
		$deleted = $request->request->get('deleted');
		$user = $request->request->get('user');
		$status = $request->request->get('status');
		$content = $request->request->get('content');

		$comment = new Comment();

		if(!empty($comments)){
			$comment->setComment($comments);
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'comment'), 400);
		}


		if(!empty($created)){
			$comment->setCreated($created);
		}
		if(!empty($updated)){
			$comment->setUpdated($updated);
		}else{
			$comment->setUpdated(null);
		}
		if(!empty($deleted)){
			$comment->setDeleted($deleted);
		}else{
			$comment->setDeleted(null);
		}

		if(!empty($user)){
			$users = $this->getDoctrine()->getRepository('AppBundle:User');
			$user_id = $users->findOneBy(array('id' => $user));

			if($user_id != null){
				$comment->setUser($user_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
			}
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'user'), 400);
		}

		if(!empty($status)){
			$status_id = $this->getDoctrine()->getRepository('AppBundle:Status')->findOneBy(array('id' => $status));

			if($user_id != null){
				$comment->setStatus($status_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
			}
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'status'), 400);
		}

		if(!empty($content)){

			$content_id = $this->getDoctrine()->getRepository('AppBundle:Content')->findOneBy(array('id' => $content));

			if($content_id != null){
				$comment->setContent($content_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'content not found'), 404);
			}
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'status'), 400);
		}

		$em = $this->getDoctrine()->getManager();
		$em->persist($comment);
		$em->flush();

		return new JsonResponse(array('created' => 'true'), 201);

	}
	/**
	 * Finds and displays a comment entity.
	 *
	 * @Route("/{id}", name="comment_show")
	 * @Method("GET")
	 */
	public function showAction(Comment $comment)
	{
		$comment = $comment->getId();
		$em = $this->getDoctrine()->getManager();
		$comments = $em->createQuery(
			'SELECT p
				    FROM AppBundle:Comment c
				    WHERE c.id = :id'
		)->setParameter('id', $comment)
			->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
		               ->getArrayResult();

		$response = array('results'=> 'true',
			                  'comments' => $comments[0]);

		return new JsonResponse($response);

	}

	/**
	 * Displays a form to edit an existing comment entity.
	 *
	 * @Route("/{id}/edit", name="comment_edit")
	 * @Method({"GET", "POST"})
	 */
	public function editAction(Request $request, Comment $comment)
	{

		$comments = $request->request->get('comment');
		$updated = $request->request->get('updated');
		$status = $request->request->get('status');
		$content = $request->request->get('content');
		$user = $request->request->get('user');

		if(!empty($comments)){
			$comment->setComment($comments);
		}else{
			return new JsonResponse(array('created' => 'false', 'error' => 'comment'), 400);
		}

		if(!empty($updated)){
			$comment->setUpdated(new \DateTime($request->request->get('updated')));
		}else{
			$comment->setUpdated(new \DateTime('now'));
		}

		if(!empty($user)){
			$users = $this->getDoctrine()->getRepository('AppBundle:User');
			$user_id = $users->findOneBy(array('id' => $user));

			if($user_id != null){
				$comment->setUser($user_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'user not found'), 404);
			}
		}

		if(!empty($status)){
			$status_id = $this->getDoctrine()->getRepository('AppBundle:Status')->findOneBy(array('id' => $status));

			if($status_id != null){
				$comment->setStatus($status_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
			}
		}

		if(!empty($content)){

			$content_id = $this->getDoctrine()->getRepository('AppBundle:Content')->findOneBy(array('id' => $content));

			if($content_id != null){
				$comment->setContent($content_id);
			}else{
				return new JsonResponse(array('created' => 'false', 'error' => 'content not found'), 404);
			}
		}

		$em = $this->getDoctrine()->getManager();
		$em->persist($comment);
		$em->flush();

		return new JsonResponse(array('updated' => 'true'), 201);
	}

	/**
	 * Deletes a comment entity.
	 *
	 * @Route("/{id}", name="comment_delete")
	 * @Method("DELETE")
	 */
	public function deleteAction(Comment $comment)
	{

		$deleted = new \DateTime('now');
		$comment->setUpdated($deleted);
		$comment->setDeleted($deleted);

		$em = $this->getDoctrine()->getManager();
		$em->persist($comment);
		$em->flush();

		return new JsonResponse(array('deleted' => 'true'), 201);
	}

}
