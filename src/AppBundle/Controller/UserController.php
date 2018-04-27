<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Gender;
use AppBundle\Entity\Type;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    $users = $em->getRepository('AppBundle:User')
					->createQueryBuilder('e')
					->select('e')
					->getQuery()
					->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
					->getArrayResult();

	    return new JsonResponse($users);
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
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
	    $name = $request->request->get('name');
	    $nick = $request->request->get('nick');
	    $password = $request->request->get('password');
	    $email = $request->request->get('email');
	    $cellphone = $request->request->get('cellphone');
	    $type = $request->request->get('type');
	    $gender = $request->request->get('gender');
	    $specialty = $request->request->get('specialty');

	    $users = new User();
	    $users->setCreated($created);


	    if(!empty($name)){
		    $users->setName($name);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'number'), 400);
	    }
	    if(!empty($nick)){
		    $users->setNick($nick);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'description'), 400);
	    }
	    if(!empty($password)){
		    $users->setPassword($password);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'andressCover'), 400);
	    }
	    if(!empty($email)){
		    $users->setEmail($email);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'email'), 400);
	    }
	    if(!empty($cellphone)){
		    $users->setCellPhone($cellphone);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'cellphone'), 400);
	    }
	    if(!empty($type)){
		    $type_id = $this->getDoctrine()->getRepository('AppBundle:TypeUser')->findOneBy(array('id' => $type));

		    if($type_id != null){
			    $users->setType($type_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'type not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'type'), 400);
	    }
	    if(!empty($gender)){
		    $gender_id = $this->getDoctrine()->getRepository('AppBundle:Gender')->findOneBy(array('id' => $gender));
		    if($gender_id != null){
			    $users->setGender($gender_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'gender not found'), 404);
		    }
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'gender'), 404);
	    }

	    if(!empty($specialty)){
		    $users->setSpecialty($specialty);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'specialty'), 400);
	    }

	    if(!empty($updated)){
		    $users->setUpdated(new \DateTime($updated));
	    }else{
		    $users->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $users->setDeleted(new \DateTime($deleted));
	    }else{
		    $users->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($users);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
	    $users = $user->getId();
	    $em = $this->getDoctrine()->getManager();
	    $user = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:User p
				    WHERE p.id = :id'
	    )->setParameter('id', $users)
	                   ->getArrayResult();

	    return new JsonResponse($user[0]);
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {


	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $name = $request->request->get('name');
	    $nick = $request->request->get('nick');
	    $password = $request->request->get('password');
	    $email = $request->request->get('email');
	    $cellPhone = $request->request->get('cellphone');
	    $type = $request->request->get('type');
	    $gender = $request->request->get('gender');
	    $specialty = $request->request->get('specialty');

	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($date);
		    $user->setCreated($created);
	    }

	    if(!empty($name)){
		    $user->setName($name);
	    }
	    if(!empty($nick)){
		    $user->setNick($nick);
	    }
	    if(!empty($password)){
		    $user->setPassword($password);
	    }
	    if(!empty($email)){
		    $user->setEmail($email);
	    }
	    if(!empty($cellPhone)){
		    $user->setCellPhone($cellPhone);
	    }
	    if(!empty($type)){
		    $type_id = $this->getDoctrine()->getRepository('AppBundle:TypeUser')->findOneBy(array('id' => $type));

		    if($type_id != null){
			    $user->setType($type_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'type not found'), 404);
		    }
	    }
	    if(!empty($gender)){
		    $gender_id = $this->getDoctrine()->getRepository('AppBundle:Gender')->findOneBy(array('id' => $gender));
		    if($gender_id != null){
			    $user->setGender($gender_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'gender not found'), 404);
		    }
	    }
	    if(!empty($specialty)){
		    $user->setSpecialty($specialty);
	    }

	    if(!empty($updated)){
		    $user->setUpdated(new \DateTime($updated));
	    }else{
		    $user->setUpdated(new \DateTime('now'));
	    }
	    if(!empty($deleted)){
		    $user->setDeleted(new \DateTime($deleted));
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($user);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(User $user)
    {
	    $deleted = new \DateTime('now');
	    $user->setDeleted($deleted);

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($user);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
