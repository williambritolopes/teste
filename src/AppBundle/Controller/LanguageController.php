<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Language;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Language controller.
 *
 * @Route("language")
 */
class LanguageController extends Controller
{
    /**
     * Lists all language entities.
     *
     * @Route("/", name="language_index")
     * @Method("GET")
     */
    public function indexAction()
    {
	    $em = $this->getDoctrine()->getManager();

	    $language = $em->getRepository('AppBundle:Language')
	                    ->createQueryBuilder('e')
	                    ->select('e')
	                    ->getQuery()
	                    ->getArrayResult();

	    return new JsonResponse($language);
    }

    /**
     * Creates a new language entity.
     *
     * @Route("/new", name="language_new")
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
	    $idiom = $request->request->get('idiom');

	    $language = new Language();
	    $language->setCreated($created);

	    if(!empty($idiom)){
		    $language->setIdiom($idiom);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'idiom'), 400);
	    }
	    if(!empty($updated)){
		    $language->setUpdated(new \DateTime($updated));
	    }else{
		    $language->setUpdated(null);
	    }
//	    if(!empty($deleted)){
//		    $language->setDeleted(new \DateTime($deleted));
//	    }else{
//		    $language->setDeleted(null);
//	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($language);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a language entity.
     *
     * @Route("/{id}", name="language_show")
     * @Method("GET")
     */
    public function showAction(Language $language)
    {
	    $language = $language->getId();
	    $em = $this->getDoctrine()->getManager();
	    $language = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Language p
				    WHERE p.id = :id'
	    )->setParameter('id', $language)
	                   ->getArrayResult();

	    return new JsonResponse($language[0]);
    }

    /**
     * Displays a form to edit an existing language entity.
     *
     * @Route("/{id}/edit", name="language_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Language $language)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $updated = $request->request->get('updated');
	    $idiom = $request->request->get('idiom');

	    if(!empty($idiom)){
		    $language->setIdiom($idiom);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'idiom'), 400);
	    }
	    if(!empty($updated)){
		    $language->setUpdated(new \DateTime($updated));
	    }else{
		    $language->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $language->setDeleted(new \DateTime($deleted));
	    }else{
		    $language->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($language);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a language entity.
     *
     * @Route("/{id}", name="language_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Language $language)
    {
        $form = $this->createDeleteForm($language);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($language);
            $em->flush();
        }

        return $this->redirectToRoute('language_index');
    }

    /**
     * Creates a form to delete a language entity.
     *
     * @param Language $language The language entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Language $language)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('language_delete', array('id' => $language->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
