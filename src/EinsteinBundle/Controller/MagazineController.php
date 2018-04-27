<?php

namespace EinsteinBundle\Controller;

use EinsteinBundle\Entity\Magazine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Magazine controller.
 *
 */
class MagazineController extends Controller
{
    /**
     * Lists all magazine entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $magazines = $em->getRepository('EinsteinBundle:Magazine')->findAll();

        return $this->render('magazine/index.html.twig', array(
            'magazines' => $magazines,
        ));
    }

    /**
     * Creates a new magazine entity.
     *
     */
    public function newAction(Request $request)
    {
        $magazine = new Magazine();
        $form = $this->createForm('EinsteinBundle\Form\MagazineType', $magazine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($magazine);
            $em->flush();

            return $this->redirectToRoute('einstein_magazine_show', array('id' => $magazine->getId()));
        }

        return $this->render('magazine/new.html.twig', array(
            'magazine' => $magazine,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a magazine entity.
     *
     */
    public function showAction(Magazine $magazine)
    {
        $deleteForm = $this->createDeleteForm($magazine);

        return $this->render('magazine/show.html.twig', array(
            'magazine' => $magazine,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing magazine entity.
     *
     */
    public function editAction(Request $request, Magazine $magazine)
    {
        $deleteForm = $this->createDeleteForm($magazine);
        $editForm = $this->createForm('EinsteinBundle\Form\MagazineType', $magazine);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('einstein_magazine_edit', array('id' => $magazine->getId()));
        }

        return $this->render('magazine/edit.html.twig', array(
            'magazine' => $magazine,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a magazine entity.
     *
     */
    public function deleteAction(Request $request, Magazine $magazine)
    {
        $form = $this->createDeleteForm($magazine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($magazine);
            $em->flush();
        }

        return $this->redirectToRoute('einstein_magazine_index');
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
            ->setAction($this->generateUrl('einstein_magazine_delete', array('id' => $magazine->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
