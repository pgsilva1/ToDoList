<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_b7f098173d0c25e9fa4afb8cd75dea87283bc259108980829d2bfda53d007aa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_752e5464938f180908c06069d8e41c6e21b579eff66163f77f2f4ba44d19aa24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752e5464938f180908c06069d8e41c6e21b579eff66163f77f2f4ba44d19aa24->enter($__internal_752e5464938f180908c06069d8e41c6e21b579eff66163f77f2f4ba44d19aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_752e5464938f180908c06069d8e41c6e21b579eff66163f77f2f4ba44d19aa24->leave($__internal_752e5464938f180908c06069d8e41c6e21b579eff66163f77f2f4ba44d19aa24_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7d6c05bdc74c83ad2ad15d302a8a93c44e2f29a9ff270087b10f44526fedc381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6c05bdc74c83ad2ad15d302a8a93c44e2f29a9ff270087b10f44526fedc381->enter($__internal_7d6c05bdc74c83ad2ad15d302a8a93c44e2f29a9ff270087b10f44526fedc381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_7d6c05bdc74c83ad2ad15d302a8a93c44e2f29a9ff270087b10f44526fedc381->leave($__internal_7d6c05bdc74c83ad2ad15d302a8a93c44e2f29a9ff270087b10f44526fedc381_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
