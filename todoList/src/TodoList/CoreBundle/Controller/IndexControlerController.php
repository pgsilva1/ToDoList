<?php

namespace TodoList\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexControlerController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $tarefas = $em->getRepository('TodoListCoreBundle:Tarefa')->findAllInOrder();

      return [
        'tarefas' => $tarefas,
      ];
    }

    /**
     * @Route("/show/{id}", name="show")
     * @Template()
     */
    public function showAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $tarefa = $em->getRepository('TodoListCoreBundle:Tarefa')->find($id);

      if (!$tarefa) {
        throw $this->createNotFoundException('A tarefa não existe! Volte para home!');
      }

      return [
        'tarefa' => $tarefa,
      ];
    }

}
