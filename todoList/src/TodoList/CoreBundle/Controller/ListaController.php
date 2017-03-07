<?php

namespace TodoList\CoreBundle\Controller;

use TodoList\CoreBundle\Entity\Lista;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Listum controller.
 *
 * @Route("lista")
 */
class ListaController extends Controller
{
    /**
     * Lists all listum entities.
     *
     * @Route("/", name="lista_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listas = $em->getRepository('TodoListCoreBundle:Lista')->findAll();

        return $this->render('lista/index.html.twig', array(
            'listas' => $listas,
        ));
    }

    /**
     * Creates a new listum entity.
     *
     * @Route("/new", name="lista_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $listum = new Lista();
        $form = $this->createForm('TodoList\CoreBundle\Form\ListaType', $listum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listum);
            $em->flush($listum);

            return $this->redirectToRoute('lista_show', array('id' => $listum->getId()));
        }

        return $this->render('lista/new.html.twig', array(
            'listum' => $listum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a listum entity.
     *
     * @Route("/{id}", name="lista_show")
     * @Method("GET")
     */
    public function showAction(Lista $listum)
    {
        $deleteForm = $this->createDeleteForm($listum);

        return $this->render('lista/show.html.twig', array(
            'listum' => $listum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing listum entity.
     *
     * @Route("/{id}/edit", name="lista_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lista $listum)
    {
        $deleteForm = $this->createDeleteForm($listum);
        $editForm = $this->createForm('TodoList\CoreBundle\Form\ListaType', $listum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lista_edit', array('id' => $listum->getId()));
        }

        return $this->render('lista/edit.html.twig', array(
            'listum' => $listum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a listum entity.
     *
     * @Route("/{id}", name="lista_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lista $listum)
    {
        $form = $this->createDeleteForm($listum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listum);
            $em->flush($listum);
        }

        return $this->redirectToRoute('lista_index');
    }

    /**
     * Creates a form to delete a listum entity.
     *
     * @param Lista $listum The listum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lista $listum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lista_delete', array('id' => $listum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
