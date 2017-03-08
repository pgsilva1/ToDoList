<?php

/* TodoListCoreBundle:IndexControler:index.html.twig */
class __TwigTemplate_457687261655779a33e28f87cf15bd57e9cdd121a2bb8e046342c0891d533317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TodoListCoreBundle:IndexControler:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a58d1754a92f7a80a41463248a6623d68d0b378cd94aeeded22c5e75b6b9910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a58d1754a92f7a80a41463248a6623d68d0b378cd94aeeded22c5e75b6b9910->enter($__internal_7a58d1754a92f7a80a41463248a6623d68d0b378cd94aeeded22c5e75b6b9910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a58d1754a92f7a80a41463248a6623d68d0b378cd94aeeded22c5e75b6b9910->leave($__internal_7a58d1754a92f7a80a41463248a6623d68d0b378cd94aeeded22c5e75b6b9910_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7cd7686c61bb1780957383e67de0d1fc684fcebb08e9dab0699aa9e1edb03ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cd7686c61bb1780957383e67de0d1fc684fcebb08e9dab0699aa9e1edb03ce->enter($__internal_c7cd7686c61bb1780957383e67de0d1fc684fcebb08e9dab0699aa9e1edb03ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "To Do List";
        
        $__internal_c7cd7686c61bb1780957383e67de0d1fc684fcebb08e9dab0699aa9e1edb03ce->leave($__internal_c7cd7686c61bb1780957383e67de0d1fc684fcebb08e9dab0699aa9e1edb03ce_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_94239df4707d6d552b3903ca430b48ad55f1cc12930f3e63f6f928b33a8a9288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94239df4707d6d552b3903ca430b48ad55f1cc12930f3e63f6f928b33a8a9288->enter($__internal_94239df4707d6d552b3903ca430b48ad55f1cc12930f3e63f6f928b33a8a9288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Página Principal ";
        
        $__internal_94239df4707d6d552b3903ca430b48ad55f1cc12930f3e63f6f928b33a8a9288->leave($__internal_94239df4707d6d552b3903ca430b48ad55f1cc12930f3e63f6f928b33a8a9288_prof);

    }

    // line 7
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7fb1844f01bc77ab6e55057276cf7cc1a5d107b81b4b71cd2abc1bd3340f9db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb1844f01bc77ab6e55057276cf7cc1a5d107b81b4b71cd2abc1bd3340f9db9->enter($__internal_7fb1844f01bc77ab6e55057276cf7cc1a5d107b81b4b71cd2abc1bd3340f9db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "  ";
        
        $__internal_7fb1844f01bc77ab6e55057276cf7cc1a5d107b81b4b71cd2abc1bd3340f9db9->leave($__internal_7fb1844f01bc77ab6e55057276cf7cc1a5d107b81b4b71cd2abc1bd3340f9db9_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_70e1947265cd96b37cc8fe574faaf09759a2e1ff6d847cbb7689ca299b14143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e1947265cd96b37cc8fe574faaf09759a2e1ff6d847cbb7689ca299b14143f->enter($__internal_70e1947265cd96b37cc8fe574faaf09759a2e1ff6d847cbb7689ca299b14143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "
<div class=\"main-sidebar\">
  <!-- Inner sidebar -->
  <div class=\"sidebar\">

    <!-- user panel (Optional) -->
    <!-- /.user-panel -->

    <!-- Search Form (Optional) -->
    <!-- /.sidebar-form -->

    <!-- Sidebar Menu -->
    <ul class=\"sidebar-menu\">
      <li class=\"header\">OPÇÕES</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\"><span>Listas</span></a></li>
      <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\"><span>Tarefas</span></a></li>

      <li class=\"treeview\">
        <a href=\"#\"><span>Criar</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
        <ul class=\"treeview-menu\">
          <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_new");
        echo "\">Lista</a></li>
          <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\">Tarefa</a></li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->
<p>Aplicação teste em Synfony 2.8, para gerenciar uma lista de afazeres (To Do List).</p>

<p>Cada tarefa lançada deve possuir as seguintes informações: identificador ou código,
descrição da tarefa, anotações ou observações, nome da lista a qual pertence, prazo de conclusão,
situação (pendente e concluída), data de criação e atualização.</p>

<p>A aplicação deve utilizar obrigatoriamente para o layout o framework Boostrap 3.</p>


";
        
        $__internal_70e1947265cd96b37cc8fe574faaf09759a2e1ff6d847cbb7689ca299b14143f->leave($__internal_70e1947265cd96b37cc8fe574faaf09759a2e1ff6d847cbb7689ca299b14143f_prof);

    }

    public function getTemplateName()
    {
        return "TodoListCoreBundle:IndexControler:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  108 => 31,  100 => 26,  96 => 25,  79 => 10,  73 => 9,  61 => 7,  49 => 6,  37 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{# extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' #}

{% block title %}To Do List{% endblock %}

{% block page_title %} Página Principal {% endblock %}
{% block page_subtitle %}  {% endblock %}

{% block page_content %}

<div class=\"main-sidebar\">
  <!-- Inner sidebar -->
  <div class=\"sidebar\">

    <!-- user panel (Optional) -->
    <!-- /.user-panel -->

    <!-- Search Form (Optional) -->
    <!-- /.sidebar-form -->

    <!-- Sidebar Menu -->
    <ul class=\"sidebar-menu\">
      <li class=\"header\">OPÇÕES</li>
      <!-- Optionally, you can add icons to the links -->
      <li><a href=\"{{ path('lista_index') }}\"><span>Listas</span></a></li>
      <li><a href=\"{{ path('tarefa_index') }}\"><span>Tarefas</span></a></li>

      <li class=\"treeview\">
        <a href=\"#\"><span>Criar</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
        <ul class=\"treeview-menu\">
          <li><a href=\"{{ path('lista_new') }}\">Lista</a></li>
          <li><a href=\"{{ path('tarefa_new') }}\">Tarefa</a></li>
        </ul>
      </li>
    </ul><!-- /.sidebar-menu -->

  </div><!-- /.sidebar -->
</div><!-- /.main-sidebar -->
<p>Aplicação teste em Synfony 2.8, para gerenciar uma lista de afazeres (To Do List).</p>

<p>Cada tarefa lançada deve possuir as seguintes informações: identificador ou código,
descrição da tarefa, anotações ou observações, nome da lista a qual pertence, prazo de conclusão,
situação (pendente e concluída), data de criação e atualização.</p>

<p>A aplicação deve utilizar obrigatoriamente para o layout o framework Boostrap 3.</p>


{% endblock %}
", "TodoListCoreBundle:IndexControler:index.html.twig", "/home/desenvolvimento/Projetos/todoList/src/TodoList/CoreBundle/Resources/views/IndexControler/index.html.twig");
    }
}
