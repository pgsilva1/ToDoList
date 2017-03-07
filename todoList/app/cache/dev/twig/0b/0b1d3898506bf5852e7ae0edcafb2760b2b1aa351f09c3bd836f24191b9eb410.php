<?php

/* lista/show.html.twig */
class __TwigTemplate_05cd05f21f351047bd482066ffbee91af88789c7230af2596a42069804f49c4b extends Twig_Template
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
        $__internal_d4249e3a4e4096a52c28b7e09cb05188d5b8929f57e71eb8ab50cac770e2c598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4249e3a4e4096a52c28b7e09cb05188d5b8929f57e71eb8ab50cac770e2c598->enter($__internal_d4249e3a4e4096a52c28b7e09cb05188d5b8929f57e71eb8ab50cac770e2c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4249e3a4e4096a52c28b7e09cb05188d5b8929f57e71eb8ab50cac770e2c598->leave($__internal_d4249e3a4e4096a52c28b7e09cb05188d5b8929f57e71eb8ab50cac770e2c598_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cab87cae622f4fee967a56866c890af020a6421d653cf6be30d7852782bede99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab87cae622f4fee967a56866c890af020a6421d653cf6be30d7852782bede99->enter($__internal_cab87cae622f4fee967a56866c890af020a6421d653cf6be30d7852782bede99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_cab87cae622f4fee967a56866c890af020a6421d653cf6be30d7852782bede99->leave($__internal_cab87cae622f4fee967a56866c890af020a6421d653cf6be30d7852782bede99_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a6a3929046f5843ffcd7540a8978e38a1be85f0bb2d040ef6ca96b916e81844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6a3929046f5843ffcd7540a8978e38a1be85f0bb2d040ef6ca96b916e81844->enter($__internal_2a6a3929046f5843ffcd7540a8978e38a1be85f0bb2d040ef6ca96b916e81844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Lista";
        
        $__internal_2a6a3929046f5843ffcd7540a8978e38a1be85f0bb2d040ef6ca96b916e81844->leave($__internal_2a6a3929046f5843ffcd7540a8978e38a1be85f0bb2d040ef6ca96b916e81844_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5fbff4a3571b0988923e6f390ca83bcad5eae60c1296d34fc98ae5f9c9f8691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbff4a3571b0988923e6f390ca83bcad5eae60c1296d34fc98ae5f9c9f8691b->enter($__internal_5fbff4a3571b0988923e6f390ca83bcad5eae60c1296d34fc98ae5f9c9f8691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Categoria ";
        
        $__internal_5fbff4a3571b0988923e6f390ca83bcad5eae60c1296d34fc98ae5f9c9f8691b->leave($__internal_5fbff4a3571b0988923e6f390ca83bcad5eae60c1296d34fc98ae5f9c9f8691b_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_91d0d08e048180c0bef8262c141e7be6b9f796ebdbb64ebb3100bf6a193d8f71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d0d08e048180c0bef8262c141e7be6b9f796ebdbb64ebb3100bf6a193d8f71->enter($__internal_91d0d08e048180c0bef8262c141e7be6b9f796ebdbb64ebb3100bf6a193d8f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_91d0d08e048180c0bef8262c141e7be6b9f796ebdbb64ebb3100bf6a193d8f71->leave($__internal_91d0d08e048180c0bef8262c141e7be6b9f796ebdbb64ebb3100bf6a193d8f71_prof);

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
