<?php

/* :lista:edit.html.twig */
class __TwigTemplate_dc26ae5356544ae90dbb2af29003059ac0dc048132f25c0b8264c7540534d0ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lista:edit.html.twig", 1);
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
        $__internal_8044a964438953b02f67a535e6f409485f520fee0f52292cec7bba2986f98683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8044a964438953b02f67a535e6f409485f520fee0f52292cec7bba2986f98683->enter($__internal_8044a964438953b02f67a535e6f409485f520fee0f52292cec7bba2986f98683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lista:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8044a964438953b02f67a535e6f409485f520fee0f52292cec7bba2986f98683->leave($__internal_8044a964438953b02f67a535e6f409485f520fee0f52292cec7bba2986f98683_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_61315cff296778b4f41288b6cec45f45f8adff70c5942f7de590796465f3275b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61315cff296778b4f41288b6cec45f45f8adff70c5942f7de590796465f3275b->enter($__internal_61315cff296778b4f41288b6cec45f45f8adff70c5942f7de590796465f3275b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_61315cff296778b4f41288b6cec45f45f8adff70c5942f7de590796465f3275b->leave($__internal_61315cff296778b4f41288b6cec45f45f8adff70c5942f7de590796465f3275b_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dc907812d14e5b6d222f9e9251daca637612bf65994bb750813eec989202857a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc907812d14e5b6d222f9e9251daca637612bf65994bb750813eec989202857a->enter($__internal_dc907812d14e5b6d222f9e9251daca637612bf65994bb750813eec989202857a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_dc907812d14e5b6d222f9e9251daca637612bf65994bb750813eec989202857a->leave($__internal_dc907812d14e5b6d222f9e9251daca637612bf65994bb750813eec989202857a_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d0161a34c66e2139d20475cdc4556f2deeb2b7b39a3835b4a2b4909e8220b380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0161a34c66e2139d20475cdc4556f2deeb2b7b39a3835b4a2b4909e8220b380->enter($__internal_d0161a34c66e2139d20475cdc4556f2deeb2b7b39a3835b4a2b4909e8220b380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Edição ";
        
        $__internal_d0161a34c66e2139d20475cdc4556f2deeb2b7b39a3835b4a2b4909e8220b380->leave($__internal_d0161a34c66e2139d20475cdc4556f2deeb2b7b39a3835b4a2b4909e8220b380_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_337c0444097a8375b871551fae64cb3579c0370d3614e4649e35adf4a48d3abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337c0444097a8375b871551fae64cb3579c0370d3614e4649e35adf4a48d3abd->enter($__internal_337c0444097a8375b871551fae64cb3579c0370d3614e4649e35adf4a48d3abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Editar\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\">Voltar à Lista</a>

    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_337c0444097a8375b871551fae64cb3579c0370d3614e4649e35adf4a48d3abd->leave($__internal_337c0444097a8375b871551fae64cb3579c0370d3614e4649e35adf4a48d3abd_prof);

    }

    public function getTemplateName()
    {
        return ":lista:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  101 => 15,  96 => 13,  91 => 11,  86 => 9,  82 => 8,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_subtitle %} Edição {% endblock %}

{% block page_content %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Editar\" />
    {{ form_end(edit_form) }}

    <a class=\"btn btn-primary\" href=\"{{ path('lista_index') }}\">Voltar à Lista</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", ":lista:edit.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/edit.html.twig");
    }
}
