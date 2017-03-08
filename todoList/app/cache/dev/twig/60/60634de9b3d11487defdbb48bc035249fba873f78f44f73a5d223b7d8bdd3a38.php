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
        $__internal_1ba5c05bde2fb51587b9c9c0b72987028d13f616d2ae7b0c15c89705dcde58db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ba5c05bde2fb51587b9c9c0b72987028d13f616d2ae7b0c15c89705dcde58db->enter($__internal_1ba5c05bde2fb51587b9c9c0b72987028d13f616d2ae7b0c15c89705dcde58db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba5c05bde2fb51587b9c9c0b72987028d13f616d2ae7b0c15c89705dcde58db->leave($__internal_1ba5c05bde2fb51587b9c9c0b72987028d13f616d2ae7b0c15c89705dcde58db_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c11bbbac3d52e7b57fcda3b02f94d45e319e631f89c997917267b0a1f6bd45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c11bbbac3d52e7b57fcda3b02f94d45e319e631f89c997917267b0a1f6bd45->enter($__internal_01c11bbbac3d52e7b57fcda3b02f94d45e319e631f89c997917267b0a1f6bd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_01c11bbbac3d52e7b57fcda3b02f94d45e319e631f89c997917267b0a1f6bd45->leave($__internal_01c11bbbac3d52e7b57fcda3b02f94d45e319e631f89c997917267b0a1f6bd45_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e7ce80bda920ec7e4da528fb6dca7065ce8f8c8dbc61b7feb1b9a753e323a8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ce80bda920ec7e4da528fb6dca7065ce8f8c8dbc61b7feb1b9a753e323a8f3->enter($__internal_e7ce80bda920ec7e4da528fb6dca7065ce8f8c8dbc61b7feb1b9a753e323a8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_e7ce80bda920ec7e4da528fb6dca7065ce8f8c8dbc61b7feb1b9a753e323a8f3->leave($__internal_e7ce80bda920ec7e4da528fb6dca7065ce8f8c8dbc61b7feb1b9a753e323a8f3_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_911d4b47da5830546340b1cf4a354387e8bb66480d65265c6fe02bf563ac9cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911d4b47da5830546340b1cf4a354387e8bb66480d65265c6fe02bf563ac9cdc->enter($__internal_911d4b47da5830546340b1cf4a354387e8bb66480d65265c6fe02bf563ac9cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_911d4b47da5830546340b1cf4a354387e8bb66480d65265c6fe02bf563ac9cdc->leave($__internal_911d4b47da5830546340b1cf4a354387e8bb66480d65265c6fe02bf563ac9cdc_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0a7036291b244c9f1612b73320ffa02d356205210335ffa374a0967341c7e907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7036291b244c9f1612b73320ffa02d356205210335ffa374a0967341c7e907->enter($__internal_0a7036291b244c9f1612b73320ffa02d356205210335ffa374a0967341c7e907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_show", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
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
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "


  <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_new");
        echo "\">Criar nova Lista</a>

";
        
        $__internal_0a7036291b244c9f1612b73320ffa02d356205210335ffa374a0967341c7e907->leave($__internal_0a7036291b244c9f1612b73320ffa02d356205210335ffa374a0967341c7e907_prof);

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
              <h3 class=\"box-title\"><a href=\"{{ path('lista_show', { 'id': listum.id }) }}\">{{ listum.categoria }}</a></h3>
              <div class=\"box-tools pull-right\">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class=\"label label-info\"> <a href=\"{{ path('lista_show', { 'id': listum.id }) }}\">Mostrar</a> </span>
                <span class=\"label label-info\"> <a href=\"{{ path('lista_edit', { 'id': listum.id }) }}\">Editar</a></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
          </div>
      {% endfor %}



  <a class=\"btn btn-primary\" href=\"{{ path('lista_new') }}\">Criar nova Lista</a>

{% endblock %}
", "lista/index.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/index.html.twig");
    }
}
