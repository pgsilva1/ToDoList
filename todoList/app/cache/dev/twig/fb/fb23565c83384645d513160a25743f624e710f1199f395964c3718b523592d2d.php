<?php

/* TodoListCoreBundle:IndexControler:index.html.twig */
class __TwigTemplate_ad68db9d4788bf5f805410c30b278d66b9fb2829333da0847bc332dec269e284 extends Twig_Template
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
        $__internal_1301e2efdcffcae1fc86d6e9b6e48c734d389afbf441f1067aa49aa31fefb41a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1301e2efdcffcae1fc86d6e9b6e48c734d389afbf441f1067aa49aa31fefb41a->enter($__internal_1301e2efdcffcae1fc86d6e9b6e48c734d389afbf441f1067aa49aa31fefb41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1301e2efdcffcae1fc86d6e9b6e48c734d389afbf441f1067aa49aa31fefb41a->leave($__internal_1301e2efdcffcae1fc86d6e9b6e48c734d389afbf441f1067aa49aa31fefb41a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_36e937d65cf14eb33f3a3df0abef62c4b9d73f222bbe324a7c154cc1671ef1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e937d65cf14eb33f3a3df0abef62c4b9d73f222bbe324a7c154cc1671ef1c1->enter($__internal_36e937d65cf14eb33f3a3df0abef62c4b9d73f222bbe324a7c154cc1671ef1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List";
        
        $__internal_36e937d65cf14eb33f3a3df0abef62c4b9d73f222bbe324a7c154cc1671ef1c1->leave($__internal_36e937d65cf14eb33f3a3df0abef62c4b9d73f222bbe324a7c154cc1671ef1c1_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_3e3876b137a20e9ce0aa3b8733008fe42b82d3f750aa3ca4fe3435e5fc119c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3876b137a20e9ce0aa3b8733008fe42b82d3f750aa3ca4fe3435e5fc119c8b->enter($__internal_3e3876b137a20e9ce0aa3b8733008fe42b82d3f750aa3ca4fe3435e5fc119c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Página Principal ";
        
        $__internal_3e3876b137a20e9ce0aa3b8733008fe42b82d3f750aa3ca4fe3435e5fc119c8b->leave($__internal_3e3876b137a20e9ce0aa3b8733008fe42b82d3f750aa3ca4fe3435e5fc119c8b_prof);

    }

    // line 7
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a4a6e2a03a10ce84e7ec211773ad29d492df7623365badbba04b8eadc9430a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a6e2a03a10ce84e7ec211773ad29d492df7623365badbba04b8eadc9430a19->enter($__internal_a4a6e2a03a10ce84e7ec211773ad29d492df7623365badbba04b8eadc9430a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "  ";
        
        $__internal_a4a6e2a03a10ce84e7ec211773ad29d492df7623365badbba04b8eadc9430a19->leave($__internal_a4a6e2a03a10ce84e7ec211773ad29d492df7623365badbba04b8eadc9430a19_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b18fa97065ae86ab24eac14c319eacc12dc69ed51b9175a3b4d5c27c086a3021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18fa97065ae86ab24eac14c319eacc12dc69ed51b9175a3b4d5c27c086a3021->enter($__internal_b18fa97065ae86ab24eac14c319eacc12dc69ed51b9175a3b4d5c27c086a3021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b18fa97065ae86ab24eac14c319eacc12dc69ed51b9175a3b4d5c27c086a3021->leave($__internal_b18fa97065ae86ab24eac14c319eacc12dc69ed51b9175a3b4d5c27c086a3021_prof);

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

{% block title %}TO DO List{% endblock %}

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
