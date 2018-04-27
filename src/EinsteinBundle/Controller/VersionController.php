<?php

namespace EinsteinBundle\Controller;

use EinsteinBundle\Entity\Version;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Version controller.
 *
 */
class VersionController extends Controller
{
    /**
     * Lists all version entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $versions = $em->getRepository('EinsteinBundle:Version')->findAll();

        return $this->render('version/index.html.twig', array(
            'versions' => $versions,
        ));
    }

    /**
     * Creates a new version entity.
     *
     */
    public function newAction(Request $request)
    {
        $version = new Version();
        $form = $this->createForm('EinsteinBundle\Form\VersionType', $version);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($version);
            $em->flush();

            return $this->redirectToRoute('einstein_version_show', array('id' => $version->getId()));
        }

        return $this->render('version/new.html.twig', array(
            'version' => $version,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a version entity.
     *
     */
    public function showAction(Version $version)
    {
        $deleteForm = $this->createDeleteForm($version);

        return $this->render('version/show.html.twig', array(
            'version' => $version,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing version entity.
     *
     */
    public function editAction(Request $request, Version $version)
    {
        $deleteForm = $this->createDeleteForm($version);
        $editForm = $this->createForm('EinsteinBundle\Form\VersionType', $version);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('einstein_version_edit', array('id' => $version->getId()));
        }

        return $this->render('version/edit.html.twig', array(
            'version' => $version,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a version entity.
     *
     */
    public function deleteAction(Request $request, Version $version)
    {
        $form = $this->createDeleteForm($version);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($version);
            $em->flush();
        }

        return $this->redirectToRoute('einstein_version_index');
    }

    /**
     * Creates a form to delete a version entity.
     *
     * @param Version $version The version entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Version $version)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('einstein_version_delete', array('id' => $version->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
