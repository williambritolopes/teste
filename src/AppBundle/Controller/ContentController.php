<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Content;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Content controller.
 *
 * @Route("content")
 */
class ContentController extends Controller
{
    /**
     * Lists all content entities.
     *
     * @Route("/", name="content_index")
     * @Method("GET")
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $contents = $em->getRepository('AppBundle:Content')->findAll();
//
//        return $this->render('content/index.html.twig', array(
//            'contents' => $contents,
//        ));

	    $em = $this->getDoctrine()->getManager();

	    $contents = $em->getRepository('AppBundle:Content')
	                   ->createQueryBuilder('e')
	                   ->select('e')
	                   ->getQuery()
	                   ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
	                   ->getArrayResult();

	    return new JsonResponse($contents);
    }

    /**
     * Creates a new content entity.
     *
     * @Route("/new", name="content_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
//        $content = new Content();
//        $form = $this->createForm('AppBundle\Form\ContentType', $content);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($content);
//            $em->flush();
//
//            return $this->redirectToRoute('content_show', array('id' => $content->getId()));
//        }
//
//        return $this->render('content/new.html.twig', array(
//            'content' => $content,
//            'form' => $form->createView(),
//        ));

	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $magazine = $request->request->get('magazine');
	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $title = $request->request->get('title');
	    $file = $request->request->get('file');
	    $issn = $request->request->get('issn');
	    $article = $request->request->get('article');
	    $contrib = $request->request->get('contrib');
	    $autor = $request->request->get('autor');
	    $pubDate = $request->request->get('pubDate');
	    $abstract = $request->request->get('abstract');
	    $keywords = $request->request->get('keywords');
	    $volume = $request->request->get('volume');
	    $issue = $request->request->get('issue');
	    $fpage = $request->request->get('fpage');
	    $lpage = $request->request->get('lpage');
	    $content = $request->request->get('content');
	    $content = $request->request->get('content');
	    $referencies = $request->request->get('referencies');

    	


	    $content = new Content();
	    $content->setCreated($created);

		if(!empty($issn)){ 
			$content->setIssn($issn);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "issn"), 400);
		}
		if(!empty($article)){ 
			$content->setArticleId($article);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "article"), 400);
		}
		if(!empty($contrib)){ 
			$content->setContrib($contrib);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "contrib"), 400);
		}
		if(!empty($autor)){ 
			$content->setAutorNotes($autor);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "autor"), 400);
		}
		if(!empty($pub)){ 
			$content->setPubDate($pubDate);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "pubDate"), 400);
		}
		if(!empty($abstract)){ 
			$content->setAbstract($abstract);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "abstract"), 400);
		}
		if(!empty($keywords)){ 
			$content->setKeywords($keywords);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "keywords"), 400);
		}
		if(!empty($volume)){ 
			$content->setVolume($volume);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "volume"), 400);
		}
		if(!empty($issue)){ 
			$content->setIssue($issue);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "issue"), 400);
		}
		if(!empty($fpage)){ 
			$content->setFpage($fpage);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "fpage"), 400);
		}
		if(!empty($lpage)){ 
			$content->setLpage($lpage);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "lpage"), 400);
		}
		if(!empty($content)){ 
			$content->setContent($content);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "content"), 400);
		}
		// if(!empty($content)){ 
		// 	$content->setContent($content)
		// }else{ 
		// 	return new JsonResponse(array('created'=> 'false', 'error' => "content"), 400);
		// }
		if(!empty($referencies)){ 
			$content->setReferencies($referencies);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "referencies"), 400);
		}

	    if(!empty($title)){
		    $content->setTitle($title);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'title'), 400);
	    }
	    if(!empty($file)){
		    $content->setFile($file);
	    }else{
		    return new JsonResponse(array('created' => 'false', 'error' => 'file'), 400);
	    }
	    if(!empty($magazine)){
		    $magazine_id = $this->getDoctrine()->getRepository('AppBundle:Magazine')->findOneBy(array('id' => $magazine));

		    if($magazine_id != null){
			    $content->setMagazine($magazine_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
		    }
	    }

	    if(!empty($updated)){
		    $content->setUpdated(new \DateTime($updated));
	    }else{
		    $content->setUpdated(null);
	    }
	    if(!empty($deleted)){
		    $content->setDeleted(new \DateTime($deleted));
	    }else{
		    $content->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($content);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Finds and displays a content entity.
     *
     * @Route("/{id}", name="content_show")
     * @Method("GET")
     */
    public function showAction(Content $content)
    {
	    $contents = $content->getId();
	    $em = $this->getDoctrine()->getManager();
	    $content = $em->createQuery(
		    'SELECT p
				    FROM AppBundle:Content p
				    WHERE p.id = :id'
	    )->setParameter('id', $contents)
	                 ->getArrayResult();

	    return new JsonResponse($content[0]);
    }

    /**
     * Displays a form to edit an existing content entity.
     *
     * @Route("/{id}/edit", name="content_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Content $content)
    {
	    $date = $request->request->get('created');
	    if(!empty($date)){
		    $created = new \DateTime($request->request->get('created'));
	    }else{
		    $created = new \DateTime('now');
	    }

	    $magazine = $request->request->get('magazine');
	    $updated = $request->request->get('updated');
	    $deleted = $request->request->get('deleted');
	    $title = $request->request->get('title');
	    $file = $request->request->get('file');
		$issn = $request->request->get('issn');
	    $article = $request->request->get('article');
	    $contrib = $request->request->get('contrib');
	    $autor = $request->request->get('autor');
	    $pubDate = $request->request->get('pubDate');
	    $abstract = $request->request->get('abstract');
	    $keywords = $request->request->get('keywords');
	    $volume = $request->request->get('volume');
	    $issue = $request->request->get('issue');
	    $fpage = $request->request->get('fpage');
	    $lpage = $request->request->get('lpage');
	    $content = $request->request->get('content');
	    $content = $request->request->get('content');
	    $referencies = $request->request->get('referencies');
	    $content->setCreated($created);



		if(!empty($issn)){ 
			$content->setIssn($issn);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "issn"), 400);
		}
		if(!empty($article)){ 
			$content->setArticleId($article);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "article"), 400);
		}
		if(!empty($contrib)){ 
			$content->setContrib($contrib);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "contrib"), 400);
		}
		if(!empty($autor)){ 
			$content->setAutorNotes($autor);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "autor"), 400);
		}
		if(!empty($pub)){ 
			$content->setPubDate($pubDate);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "pubDate"), 400);
		}
		if(!empty($abstract)){ 
			$content->setAbstract($abstract);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "abstract"), 400);
		}
		if(!empty($keywords)){ 
			$content->setKeywords($keywords);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "keywords"), 400);
		}
		if(!empty($volume)){ 
			$content->setVolume($volume);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "volume"), 400);
		}
		if(!empty($issue)){ 
			$content->setIssue($issue);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "issue"), 400);
		}
		if(!empty($fpage)){ 
			$content->setFpage($fpage);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "fpage"), 400);
		}
		if(!empty($lpage)){ 
			$content->setLpage($lpage);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "lpage"), 400);
		}
		if(!empty($content)){ 
			$content->setContent($content);
		}else{ 
			return new JsonResponse(array('created'=> 'false', 'error' => "content"), 400);
		}
	    if(!empty($title)){
		    $content->setTitle($title);
	    }
	    if(!empty($file)){
		    $content->setFile($file);
	    }
	    if(!empty($magazine)){
		    $magazine_id = $this->getDoctrine()->getRepository('AppBundle:Magazine')->findOneBy(array('id' => $magazine));

		    if($magazine_id != null){
			    $content->setMagazine($magazine_id);
		    }else{
			    return new JsonResponse(array('created' => 'false', 'error' => 'status not found'), 404);
		    }
	    }

	    if(!empty($updated)){
		    $content->setUpdated(new \DateTime($updated));
	    }else{
		    $content->setUpdated($created);
	    }
	    if(!empty($deleted)){
		    $content->setDeleted(new \DateTime($deleted));
	    }else{
		    $content->setDeleted(null);
	    }

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($content);
	    $em->flush();

	    return new JsonResponse(array('created' => 'true'), 201);
    }

    /**
     * Deletes a content entity.
     *
     * @Route("/{id}", name="content_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Content $content)
    {
	    $deleted = $request->request->get('deleted');
	    $content->setDeleted(new \DateTime($deleted));

	    $em = $this->getDoctrine()->getManager();
	    $em->persist($content);
	    $em->flush();

	    return new JsonResponse(array('deleted' => 'true'), 201);
    }

    /**
     * Creates a form to delete a content entity.
     *
     * @param Content $content The content entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Content $content)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('content_delete', array('id' => $content->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
