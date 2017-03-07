<?php

/* TodoListCoreBundle:IndexControler:index.html.twig */
class __TwigTemplate_e27fa870313a8cb4ff878624a7100d52d1b62e5588da77cf4f0ca5a26a2404b0 extends Twig_Template
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
        $__internal_8972010565fc47c4439fee4e55a0803a81c13b6dfaf67b99e2a3db6b6f289d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8972010565fc47c4439fee4e55a0803a81c13b6dfaf67b99e2a3db6b6f289d25->enter($__internal_8972010565fc47c4439fee4e55a0803a81c13b6dfaf67b99e2a3db6b6f289d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8972010565fc47c4439fee4e55a0803a81c13b6dfaf67b99e2a3db6b6f289d25->leave($__internal_8972010565fc47c4439fee4e55a0803a81c13b6dfaf67b99e2a3db6b6f289d25_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0f65a279f644c97c6f4c6c7adbb9879bced825b6d9d5fc9eabc1d4e91a7a683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f65a279f644c97c6f4c6c7adbb9879bced825b6d9d5fc9eabc1d4e91a7a683->enter($__internal_b0f65a279f644c97c6f4c6c7adbb9879bced825b6d9d5fc9eabc1d4e91a7a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List";
        
        $__internal_b0f65a279f644c97c6f4c6c7adbb9879bced825b6d9d5fc9eabc1d4e91a7a683->leave($__internal_b0f65a279f644c97c6f4c6c7adbb9879bced825b6d9d5fc9eabc1d4e91a7a683_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ed71620d3fbe88174a2f151136e7d03b22c096f71866d8a56e0fce842d422445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed71620d3fbe88174a2f151136e7d03b22c096f71866d8a56e0fce842d422445->enter($__internal_ed71620d3fbe88174a2f151136e7d03b22c096f71866d8a56e0fce842d422445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Página Principal ";
        
        $__internal_ed71620d3fbe88174a2f151136e7d03b22c096f71866d8a56e0fce842d422445->leave($__internal_ed71620d3fbe88174a2f151136e7d03b22c096f71866d8a56e0fce842d422445_prof);

    }

    // line 7
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d3d179269779ceae3a4c7fa1501b52f9a41ccab6074af24cb1deb1f624b1d68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d179269779ceae3a4c7fa1501b52f9a41ccab6074af24cb1deb1f624b1d68f->enter($__internal_d3d179269779ceae3a4c7fa1501b52f9a41ccab6074af24cb1deb1f624b1d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "  ";
        
        $__internal_d3d179269779ceae3a4c7fa1501b52f9a41ccab6074af24cb1deb1f624b1d68f->leave($__internal_d3d179269779ceae3a4c7fa1501b52f9a41ccab6074af24cb1deb1f624b1d68f_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d55a2bd1f51f9b8e0cddd1dd13ae0bdb93c1aebf188098532aa8ce619a4e3db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d55a2bd1f51f9b8e0cddd1dd13ae0bdb93c1aebf188098532aa8ce619a4e3db8->enter($__internal_d55a2bd1f51f9b8e0cddd1dd13ae0bdb93c1aebf188098532aa8ce619a4e3db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_d55a2bd1f51f9b8e0cddd1dd13ae0bdb93c1aebf188098532aa8ce619a4e3db8->leave($__internal_d55a2bd1f51f9b8e0cddd1dd13ae0bdb93c1aebf188098532aa8ce619a4e3db8_prof);

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
