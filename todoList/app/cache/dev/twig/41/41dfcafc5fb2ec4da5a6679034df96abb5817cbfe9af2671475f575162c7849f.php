<?php

/* ::base.html.twig */
class __TwigTemplate_4ad52adbe0103e049e4cd10f8b87e35f93e21d33af2616628350cabeda87b53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "::base.html.twig", 2);
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
        $__internal_9f0f07ea47f13ab7e7d2ca26584806b124a5d503252acd97e6cd1db9e3760d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0f07ea47f13ab7e7d2ca26584806b124a5d503252acd97e6cd1db9e3760d8d->enter($__internal_9f0f07ea47f13ab7e7d2ca26584806b124a5d503252acd97e6cd1db9e3760d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0f07ea47f13ab7e7d2ca26584806b124a5d503252acd97e6cd1db9e3760d8d->leave($__internal_9f0f07ea47f13ab7e7d2ca26584806b124a5d503252acd97e6cd1db9e3760d8d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_48fb1c52c285213648c4a5275f0b75bb4fae5202d2fb75a3c26b52cf62e2d41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fb1c52c285213648c4a5275f0b75bb4fae5202d2fb75a3c26b52cf62e2d41e->enter($__internal_48fb1c52c285213648c4a5275f0b75bb4fae5202d2fb75a3c26b52cf62e2d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List ";
        
        $__internal_48fb1c52c285213648c4a5275f0b75bb4fae5202d2fb75a3c26b52cf62e2d41e->leave($__internal_48fb1c52c285213648c4a5275f0b75bb4fae5202d2fb75a3c26b52cf62e2d41e_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d29f514d8ded6024accfca9b943442a58d9ea7aa875b923df16f37232c5973db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29f514d8ded6024accfca9b943442a58d9ea7aa875b923df16f37232c5973db->enter($__internal_d29f514d8ded6024accfca9b943442a58d9ea7aa875b923df16f37232c5973db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "  ";
        
        $__internal_d29f514d8ded6024accfca9b943442a58d9ea7aa875b923df16f37232c5973db->leave($__internal_d29f514d8ded6024accfca9b943442a58d9ea7aa875b923df16f37232c5973db_prof);

    }

    // line 8
    public function block_page_footer($context, array $blocks = array())
    {
        $__internal_345fa3e5908c826778d1e7ac45e5c6e340eea4c1755e52d4a16d3f07b751b94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345fa3e5908c826778d1e7ac45e5c6e340eea4c1755e52d4a16d3f07b751b94c->enter($__internal_345fa3e5908c826778d1e7ac45e5c6e340eea4c1755e52d4a16d3f07b751b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_footer"));

        // line 9
        echo "
";
        
        $__internal_345fa3e5908c826778d1e7ac45e5c6e340eea4c1755e52d4a16d3f07b751b94c->leave($__internal_345fa3e5908c826778d1e7ac45e5c6e340eea4c1755e52d4a16d3f07b751b94c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/base.html.twig");
    }
}
