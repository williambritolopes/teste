<?php

namespace EinsteinBundle\Controller;

use EinsteinBundle\Entity\Favorite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Favorite controller.
 *
 */
class FavoriteController extends Controller
{
    /**
     * Lists all favorite entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $favorites = $em->getRepository('EinsteinBundle:Favorite')->findAll();

        return $this->render('favorite/index.html.twig', array(
            'favorites' => $favorites,
        ));
    }

    /**
     * Creates a new favorite entity.
     *
     */
    public function newAction(Request $request)
    {
        $favorite = new Favorite();
        $form = $this->createForm('EinsteinBundle\Form\FavoriteType', $favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($favorite);
            $em->flush();

            return $this->redirectToRoute('einstein_favorite_show', array('id' => $favorite->getId()));
        }

        return $this->render('favorite/new.html.twig', array(
            'favorite' => $favorite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a favorite entity.
     *
     */
    public function showAction(Favorite $favorite)
    {
        $deleteForm = $this->createDeleteForm($favorite);

        return $this->render('favorite/show.html.twig', array(
            'favorite' => $favorite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing favorite entity.
     *
     */
    public function editAction(Request $request, Favorite $favorite)
    {
        $deleteForm = $this->createDeleteForm($favorite);
        $editForm = $this->createForm('EinsteinBundle\Form\FavoriteType', $favorite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('einstein_favorite_edit', array('id' => $favorite->getId()));
        }

        return $this->render('favorite/edit.html.twig', array(
            'favorite' => $favorite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a favorite entity.
     *
     */
    public function deleteAction(Request $request, Favorite $favorite)
    {
        $form = $this->createDeleteForm($favorite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($favorite);
            $em->flush();
        }

        return $this->redirectToRoute('einstein_favorite_index');
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
            ->setAction($this->generateUrl('einstein_favorite_delete', array('id' => $favorite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
