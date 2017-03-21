<?php

/* lista/show.html.twig */
class __TwigTemplate_acbaa47ccfae4fb95e42d5f95349ac318dabc6ae88ebe878c088033b60d2c163 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lista/show.html.twig", 1);
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
        $__internal_40c106fa149a8d60f6cf40ed97ef468d1224634826afb340fec2173cada6a4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c106fa149a8d60f6cf40ed97ef468d1224634826afb340fec2173cada6a4fd->enter($__internal_40c106fa149a8d60f6cf40ed97ef468d1224634826afb340fec2173cada6a4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c106fa149a8d60f6cf40ed97ef468d1224634826afb340fec2173cada6a4fd->leave($__internal_40c106fa149a8d60f6cf40ed97ef468d1224634826afb340fec2173cada6a4fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_64a837e5c3620304e70c741d34cd8b9e808540f6183571fa7295aed92769b194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a837e5c3620304e70c741d34cd8b9e808540f6183571fa7295aed92769b194->enter($__internal_64a837e5c3620304e70c741d34cd8b9e808540f6183571fa7295aed92769b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_64a837e5c3620304e70c741d34cd8b9e808540f6183571fa7295aed92769b194->leave($__internal_64a837e5c3620304e70c741d34cd8b9e808540f6183571fa7295aed92769b194_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_51fd12a6dd362b263cfacac2d8ac65b6a3b6dc343652ab6b79a92abd375073c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fd12a6dd362b263cfacac2d8ac65b6a3b6dc343652ab6b79a92abd375073c4->enter($__internal_51fd12a6dd362b263cfacac2d8ac65b6a3b6dc343652ab6b79a92abd375073c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Lista";
        
        $__internal_51fd12a6dd362b263cfacac2d8ac65b6a3b6dc343652ab6b79a92abd375073c4->leave($__internal_51fd12a6dd362b263cfacac2d8ac65b6a3b6dc343652ab6b79a92abd375073c4_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bf8b8b36f93d3ca1b64a9a54773db2f0234a79b2f4fe99a06cdc08b43b96d1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8b8b36f93d3ca1b64a9a54773db2f0234a79b2f4fe99a06cdc08b43b96d1e6->enter($__internal_bf8b8b36f93d3ca1b64a9a54773db2f0234a79b2f4fe99a06cdc08b43b96d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Categoria ";
        
        $__internal_bf8b8b36f93d3ca1b64a9a54773db2f0234a79b2f4fe99a06cdc08b43b96d1e6->leave($__internal_bf8b8b36f93d3ca1b64a9a54773db2f0234a79b2f4fe99a06cdc08b43b96d1e6_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c2306280c17fd3b28f0746493236de1293638148d0cccad060af8503fe6bc672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2306280c17fd3b28f0746493236de1293638148d0cccad060af8503fe6bc672->enter($__internal_c2306280c17fd3b28f0746493236de1293638148d0cccad060af8503fe6bc672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
      <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
                <h3 class=\"box-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["listum"] ?? $this->getContext($context, "listum")), "categoria", array()), "html", null, true);
        echo "</h3>
            </div>
      </div>

    <a class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\">Voltar à Lista</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_edit", array("id" => $this->getAttribute(($context["listum"] ?? $this->getContext($context, "listum")), "id", array()))), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_c2306280c17fd3b28f0746493236de1293638148d0cccad060af8503fe6bc672->leave($__internal_c2306280c17fd3b28f0746493236de1293638148d0cccad060af8503fe6bc672_prof);

    }

    public function getTemplateName()
    {
        return "lista/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  101 => 19,  96 => 17,  91 => 15,  84 => 11,  79 => 8,  73 => 7,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_title %} Lista{% endblock %}
{% block page_subtitle %} Categoria {% endblock %}


{% block page_content %}

      <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
                <h3 class=\"box-title\">{{ listum.categoria }}</h3>
            </div>
      </div>

    <a class=\"btn btn-primary\" href=\"{{ path('lista_index') }}\">Voltar à Lista</a>

    <a class=\"btn btn-primary\" href=\"{{ path('lista_edit', { 'id': listum.id }) }}\">Editar</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", "lista/show.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/show.html.twig");
    }
}
