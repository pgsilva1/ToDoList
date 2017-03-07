<?php

/* lista/index.html.twig */
class __TwigTemplate_987ad838e7bdae6bcfd3cf081f04e61a0e4b3dc14eb1cb002d551e408c331a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lista/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35e1b5cc4cbd1e4c171783e8ecf13dc5e7aa4664c9e1a8ee86a9014550632ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e1b5cc4cbd1e4c171783e8ecf13dc5e7aa4664c9e1a8ee86a9014550632ea4->enter($__internal_35e1b5cc4cbd1e4c171783e8ecf13dc5e7aa4664c9e1a8ee86a9014550632ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35e1b5cc4cbd1e4c171783e8ecf13dc5e7aa4664c9e1a8ee86a9014550632ea4->leave($__internal_35e1b5cc4cbd1e4c171783e8ecf13dc5e7aa4664c9e1a8ee86a9014550632ea4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_757e770a544f96eca9bd8869c7ad9722831d0ad581218f9fca59626a92ca5fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757e770a544f96eca9bd8869c7ad9722831d0ad581218f9fca59626a92ca5fa1->enter($__internal_757e770a544f96eca9bd8869c7ad9722831d0ad581218f9fca59626a92ca5fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_757e770a544f96eca9bd8869c7ad9722831d0ad581218f9fca59626a92ca5fa1->leave($__internal_757e770a544f96eca9bd8869c7ad9722831d0ad581218f9fca59626a92ca5fa1_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c1af698a108834b40e2b11bcdbb0a15fdb485bdb6a2044627aee7f90518ec3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1af698a108834b40e2b11bcdbb0a15fdb485bdb6a2044627aee7f90518ec3d8->enter($__internal_c1af698a108834b40e2b11bcdbb0a15fdb485bdb6a2044627aee7f90518ec3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_c1af698a108834b40e2b11bcdbb0a15fdb485bdb6a2044627aee7f90518ec3d8->leave($__internal_c1af698a108834b40e2b11bcdbb0a15fdb485bdb6a2044627aee7f90518ec3d8_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_19dce7eceb3b7a2c96555f3015df01c5e94114281b8abbaf0b905be7f71bde56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dce7eceb3b7a2c96555f3015df01c5e94114281b8abbaf0b905be7f71bde56->enter($__internal_19dce7eceb3b7a2c96555f3015df01c5e94114281b8abbaf0b905be7f71bde56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_19dce7eceb3b7a2c96555f3015df01c5e94114281b8abbaf0b905be7f71bde56->leave($__internal_19dce7eceb3b7a2c96555f3015df01c5e94114281b8abbaf0b905be7f71bde56_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ec2c6aa44ccc762864c1c15322295fa4cb721744e169b20ada9b409e7393067d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2c6aa44ccc762864c1c15322295fa4cb721744e169b20ada9b409e7393067d->enter($__internal_ec2c6aa44ccc762864c1c15322295fa4cb721744e169b20ada9b409e7393067d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <!-- <h1>Listas list</h1> -->

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listas"] ?? $this->getContext($context, "listas")));
        foreach ($context['_seq'] as $context["_key"] => $context["listum"]) {
            // line 10
            echo "        <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
              <h3 class=\"box-title\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listum"], "categoria", array()), "html", null, true);
            echo "</a></h3>
              <div class=\"box-tools pull-right\">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class=\"label label-info\"> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_show", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">Mostrar</a> </span>
                <span class=\"label label-info\"> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_edit", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">Editar</a></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </div>


  <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_new");
        echo "\">Criar nova Lista</a>

";
        
        $__internal_ec2c6aa44ccc762864c1c15322295fa4cb721744e169b20ada9b409e7393067d->leave($__internal_ec2c6aa44ccc762864c1c15322295fa4cb721744e169b20ada9b409e7393067d_prof);

    }

    public function getTemplateName()
    {
        return "lista/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  115 => 22,  104 => 17,  100 => 16,  91 => 12,  87 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Listas - TO DO List{% endblock %}
{% block page_title %} Listas {% endblock %}
{% block page_subtitle %} Página Principal {% endblock %}

{% block page_content %}
    <!-- <h1>Listas list</h1> -->

        {% for listum in listas %}
        <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
              <h3 class=\"box-title\"><a href=\"{{ path('tarefa_show', { 'id': listum.id }) }}\">{{ listum.categoria }}</a></h3>
              <div class=\"box-tools pull-right\">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class=\"label label-info\"> <a href=\"{{ path('lista_show', { 'id': listum.id }) }}\">Mostrar</a> </span>
                <span class=\"label label-info\"> <a href=\"{{ path('lista_edit', { 'id': listum.id }) }}\">Editar</a></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->

      {% endfor %}
  </div>


  <a class=\"btn btn-primary\" href=\"{{ path('lista_new') }}\">Criar nova Lista</a>

{% endblock %}
", "lista/index.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/index.html.twig");
    }
}
