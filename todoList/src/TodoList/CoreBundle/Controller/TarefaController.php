<?php

namespace TodoList\CoreBundle\Controller;

use TodoList\CoreBundle\Entity\Tarefa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tarefa controller.
 *
 * @Route("tarefa")
 */
class TarefaController extends Controller
{
    /**
     * Lists all tarefa entities.
     *
     * @Route("/", name="tarefa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarefas = $em->getRepository('TodoListCoreBundle:Tarefa')->findAll();

        return $this->render('tarefa/index.html.twig', array(
            'tarefas' => $tarefas,
        ));
    }

    /**
     * Creates a new tarefa entity.
     *
     * @Route("/new", name="tarefa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tarefa = new Tarefa();
        $form = $this->createForm('TodoList\CoreBundle\Form\TarefaType', $tarefa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tarefa);
            $em->flush($tarefa);

            $request->getSession()
            ->getFlashBag()
            ->add('success', 'Tarefa criada com sucesso!');

            $url = $this->generateUrl('tarefa_show', array('id' => $tarefa->getId()));

            return $this->redirect($url);
        }

        return $this->render('tarefa/new.html.twig', array(
            'tarefa' => $tarefa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tarefa entity.
     *
     * @Route("/{id}", name="tarefa_show")
     * @Method("GET")
     */
    public function showAction(Tarefa $tarefa)
    {
        $deleteForm = $this->createDeleteForm($tarefa);

        return $this->render('tarefa/show.html.twig', array(
            'tarefa' => $tarefa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tarefa entity.
     *
     * @Route("/{id}/edit", name="tarefa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tarefa $tarefa)
    {
        $deleteForm = $this->createDeleteForm($tarefa);
        $editForm = $this->createForm('TodoList\CoreBundle\Form\TarefaType', $tarefa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tarefa_edit', array('id' => $tarefa->getId()));
        }

        return $this->render('tarefa/edit.html.twig', array(
            'tarefa' => $tarefa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tarefa entity.
     *
     * @Route("/{id}", name="tarefa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tarefa $tarefa)
    {
        $form = $this->createDeleteForm($tarefa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarefa);
            $em->flush($tarefa);
        }

        return $this->redirectToRoute('tarefa_index');
    }

    /**
     * Creates a form to delete a tarefa entity.
     *
     * @param Tarefa $tarefa The tarefa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarefa $tarefa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tarefa_delete', array('id' => $tarefa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
