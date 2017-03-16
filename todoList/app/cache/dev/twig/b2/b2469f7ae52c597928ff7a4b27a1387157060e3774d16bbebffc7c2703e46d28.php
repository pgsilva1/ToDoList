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
        $__internal_acc0d3209d067b3c8e49022eec65bb5b95cb7e4c52b9f6461ac8673bd41536fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc0d3209d067b3c8e49022eec65bb5b95cb7e4c52b9f6461ac8673bd41536fa->enter($__internal_acc0d3209d067b3c8e49022eec65bb5b95cb7e4c52b9f6461ac8673bd41536fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc0d3209d067b3c8e49022eec65bb5b95cb7e4c52b9f6461ac8673bd41536fa->leave($__internal_acc0d3209d067b3c8e49022eec65bb5b95cb7e4c52b9f6461ac8673bd41536fa_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_749e859f792515066f67b3fca242a3bd1ac57624253f1700d0f9d85073e86635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749e859f792515066f67b3fca242a3bd1ac57624253f1700d0f9d85073e86635->enter($__internal_749e859f792515066f67b3fca242a3bd1ac57624253f1700d0f9d85073e86635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "To Do List";
        
        $__internal_749e859f792515066f67b3fca242a3bd1ac57624253f1700d0f9d85073e86635->leave($__internal_749e859f792515066f67b3fca242a3bd1ac57624253f1700d0f9d85073e86635_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_72699d6343860472ae8aa88422d4db46f8bce28342a54830728df10b00b9d270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72699d6343860472ae8aa88422d4db46f8bce28342a54830728df10b00b9d270->enter($__internal_72699d6343860472ae8aa88422d4db46f8bce28342a54830728df10b00b9d270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Página Principal ";
        
        $__internal_72699d6343860472ae8aa88422d4db46f8bce28342a54830728df10b00b9d270->leave($__internal_72699d6343860472ae8aa88422d4db46f8bce28342a54830728df10b00b9d270_prof);

    }

    // line 7
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_e7625a79909a48e415edba35e6803c2218472771a2344847fdc67ef7a61866d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7625a79909a48e415edba35e6803c2218472771a2344847fdc67ef7a61866d1->enter($__internal_e7625a79909a48e415edba35e6803c2218472771a2344847fdc67ef7a61866d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "  ";
        
        $__internal_e7625a79909a48e415edba35e6803c2218472771a2344847fdc67ef7a61866d1->leave($__internal_e7625a79909a48e415edba35e6803c2218472771a2344847fdc67ef7a61866d1_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e817f38071e296345fb5cd82aeabe0fd52087cc82bc0a4fa5d5814b32ade85ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e817f38071e296345fb5cd82aeabe0fd52087cc82bc0a4fa5d5814b32ade85ee->enter($__internal_e817f38071e296345fb5cd82aeabe0fd52087cc82bc0a4fa5d5814b32ade85ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e817f38071e296345fb5cd82aeabe0fd52087cc82bc0a4fa5d5814b32ade85ee->leave($__internal_e817f38071e296345fb5cd82aeabe0fd52087cc82bc0a4fa5d5814b32ade85ee_prof);

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
