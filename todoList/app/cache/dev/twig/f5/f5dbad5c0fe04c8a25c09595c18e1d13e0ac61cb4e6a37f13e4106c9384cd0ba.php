<?php

/* base.html.twig */
class __TwigTemplate_487225880b404daac05b38a6487c93c0935963a9d2e98ace4ba755075738f203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "base.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_footer' => array($this, 'block_page_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8869c55662537e888e0ef0f6657d7ff7a7508de052170be5326175718e83757e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8869c55662537e888e0ef0f6657d7ff7a7508de052170be5326175718e83757e->enter($__internal_8869c55662537e888e0ef0f6657d7ff7a7508de052170be5326175718e83757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8869c55662537e888e0ef0f6657d7ff7a7508de052170be5326175718e83757e->leave($__internal_8869c55662537e888e0ef0f6657d7ff7a7508de052170be5326175718e83757e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2b5792ca959d81ce5624041341b9030a348796853aa2f8c23ea4cd9572a1c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b5792ca959d81ce5624041341b9030a348796853aa2f8c23ea4cd9572a1c5e->enter($__internal_e2b5792ca959d81ce5624041341b9030a348796853aa2f8c23ea4cd9572a1c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List ";
        
        $__internal_e2b5792ca959d81ce5624041341b9030a348796853aa2f8c23ea4cd9572a1c5e->leave($__internal_e2b5792ca959d81ce5624041341b9030a348796853aa2f8c23ea4cd9572a1c5e_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2e804eac82aa8ad4015e250323ff5677fd6071320be7fa15affb3812f4e2e9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e804eac82aa8ad4015e250323ff5677fd6071320be7fa15affb3812f4e2e9f4->enter($__internal_2e804eac82aa8ad4015e250323ff5677fd6071320be7fa15affb3812f4e2e9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "  ";
        
        $__internal_2e804eac82aa8ad4015e250323ff5677fd6071320be7fa15affb3812f4e2e9f4->leave($__internal_2e804eac82aa8ad4015e250323ff5677fd6071320be7fa15affb3812f4e2e9f4_prof);

    }

    // line 8
    public function block_page_footer($context, array $blocks = array())
    {
        $__internal_5ca233cce69457b9a6d26cb91bca8fcea4b19905b3d372e68ae7e59a5500bc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca233cce69457b9a6d26cb91bca8fcea4b19905b3d372e68ae7e59a5500bc1f->enter($__internal_5ca233cce69457b9a6d26cb91bca8fcea4b19905b3d372e68ae7e59a5500bc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_footer"));

        // line 9
        echo "
";
        
        $__internal_5ca233cce69457b9a6d26cb91bca8fcea4b19905b3d372e68ae7e59a5500bc1f->leave($__internal_5ca233cce69457b9a6d26cb91bca8fcea4b19905b3d372e68ae7e59a5500bc1f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# extends \"::base.html.twig\" #}
{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}TO DO List {% endblock %}

{% block page_title %}  {% endblock %}

{% block page_footer %}

{% endblock %}
", "base.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/base.html.twig");
    }
}
