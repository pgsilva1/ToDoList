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
        $__internal_d7c8d0a5596ff2606bf1ff57fac837b5ceb9b0eec9145ebf4ce80ed19cace8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c8d0a5596ff2606bf1ff57fac837b5ceb9b0eec9145ebf4ce80ed19cace8bc->enter($__internal_d7c8d0a5596ff2606bf1ff57fac837b5ceb9b0eec9145ebf4ce80ed19cace8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c8d0a5596ff2606bf1ff57fac837b5ceb9b0eec9145ebf4ce80ed19cace8bc->leave($__internal_d7c8d0a5596ff2606bf1ff57fac837b5ceb9b0eec9145ebf4ce80ed19cace8bc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aab2bdd4e9fa1029c704fbd161151053c7f6556706a4bf88fdb875ff78a3a38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab2bdd4e9fa1029c704fbd161151053c7f6556706a4bf88fdb875ff78a3a38e->enter($__internal_aab2bdd4e9fa1029c704fbd161151053c7f6556706a4bf88fdb875ff78a3a38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "To Do List";
        
        $__internal_aab2bdd4e9fa1029c704fbd161151053c7f6556706a4bf88fdb875ff78a3a38e->leave($__internal_aab2bdd4e9fa1029c704fbd161151053c7f6556706a4bf88fdb875ff78a3a38e_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4103a20c800ba276426d118806cddeafb72828924bab561d8d90b9cfc40ffe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4103a20c800ba276426d118806cddeafb72828924bab561d8d90b9cfc40ffe59->enter($__internal_4103a20c800ba276426d118806cddeafb72828924bab561d8d90b9cfc40ffe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Página Principal ";
        
        $__internal_4103a20c800ba276426d118806cddeafb72828924bab561d8d90b9cfc40ffe59->leave($__internal_4103a20c800ba276426d118806cddeafb72828924bab561d8d90b9cfc40ffe59_prof);

    }

    // line 7
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4abd7645ca9c7df920c04b8d853a376ba3ad695818bc0fb1eec610287cafda3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abd7645ca9c7df920c04b8d853a376ba3ad695818bc0fb1eec610287cafda3f->enter($__internal_4abd7645ca9c7df920c04b8d853a376ba3ad695818bc0fb1eec610287cafda3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "  ";
        
        $__internal_4abd7645ca9c7df920c04b8d853a376ba3ad695818bc0fb1eec610287cafda3f->leave($__internal_4abd7645ca9c7df920c04b8d853a376ba3ad695818bc0fb1eec610287cafda3f_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3a216996dceba778960a9c00cdd2d8a0a7d3afa65824d5d512e98b84bb692ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a216996dceba778960a9c00cdd2d8a0a7d3afa65824d5d512e98b84bb692ddf->enter($__internal_3a216996dceba778960a9c00cdd2d8a0a7d3afa65824d5d512e98b84bb692ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_3a216996dceba778960a9c00cdd2d8a0a7d3afa65824d5d512e98b84bb692ddf->leave($__internal_3a216996dceba778960a9c00cdd2d8a0a7d3afa65824d5d512e98b84bb692ddf_prof);

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
