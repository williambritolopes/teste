<?php

namespace EinsteinBundle\Controller;

use EinsteinBundle\Entity\TypeUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Typeuser controller.
 *
 */
class TypeUserController extends Controller
{
    /**
     * Lists all typeUser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeUsers = $em->getRepository('EinsteinBundle:TypeUser')->findAll();

        return $this->render('typeuser/index.html.twig', array(
            'typeUsers' => $typeUsers,
        ));
    }

    /**
     * Creates a new typeUser entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeUser = new Typeuser();
        $form = $this->createForm('EinsteinBundle\Form\TypeUserType', $typeUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeUser);
            $em->flush();

            return $this->redirectToRoute('einstein_typeuser_show', array('id' => $typeUser->getId()));
        }

        return $this->render('typeuser/new.html.twig', array(
            'typeUser' => $typeUser,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeUser entity.
     *
     */
    public function showAction(TypeUser $typeUser)
    {
        $deleteForm = $this->createDeleteForm($typeUser);

        return $this->render('typeuser/show.html.twig', array(
            'typeUser' => $typeUser,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeUser entity.
     *
     */
    public function editAction(Request $request, TypeUser $typeUser)
    {
        $deleteForm = $this->createDeleteForm($typeUser);
        $editForm = $this->createForm('EinsteinBundle\Form\TypeUserType', $typeUser);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('einstein_typeuser_edit', array('id' => $typeUser->getId()));
        }

        return $this->render('typeuser/edit.html.twig', array(
            'typeUser' => $typeUser,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeUser entity.
     *
     */
    public function deleteAction(Request $request, TypeUser $typeUser)
    {
        $form = $this->createDeleteForm($typeUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeUser);
            $em->flush();
        }

        return $this->redirectToRoute('einstein_typeuser_index');
    }

    /**
     * Creates a form to delete a typeUser entity.
     *
     * @param TypeUser $typeUser The typeUser entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeUser $typeUser)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('einstein_typeuser_delete', array('id' => $typeUser->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
