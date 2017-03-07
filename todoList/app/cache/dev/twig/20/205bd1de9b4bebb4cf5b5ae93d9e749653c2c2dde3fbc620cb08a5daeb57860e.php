<?php

/* ::base.html.twig */
class __TwigTemplate_3a67a1cbe6b7b76fdf81a9b12dd05778c691f2edf2a322e47f27d084184a778b extends Twig_Template
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
        $__internal_12e37d59bbaed1033a06b8b5f92e8818101d80d613a617dc26ff4386044078d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e37d59bbaed1033a06b8b5f92e8818101d80d613a617dc26ff4386044078d6->enter($__internal_12e37d59bbaed1033a06b8b5f92e8818101d80d613a617dc26ff4386044078d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e37d59bbaed1033a06b8b5f92e8818101d80d613a617dc26ff4386044078d6->leave($__internal_12e37d59bbaed1033a06b8b5f92e8818101d80d613a617dc26ff4386044078d6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_91d8ddf0101cdb4d8ab613ccb5383e95d2a7aa6399a4c7311eedee0c0b0aa1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d8ddf0101cdb4d8ab613ccb5383e95d2a7aa6399a4c7311eedee0c0b0aa1b1->enter($__internal_91d8ddf0101cdb4d8ab613ccb5383e95d2a7aa6399a4c7311eedee0c0b0aa1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List ";
        
        $__internal_91d8ddf0101cdb4d8ab613ccb5383e95d2a7aa6399a4c7311eedee0c0b0aa1b1->leave($__internal_91d8ddf0101cdb4d8ab613ccb5383e95d2a7aa6399a4c7311eedee0c0b0aa1b1_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e50c1a06dcc9e79c83a39c66744cd53b884351a70422d7d986ecc716c0b85831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50c1a06dcc9e79c83a39c66744cd53b884351a70422d7d986ecc716c0b85831->enter($__internal_e50c1a06dcc9e79c83a39c66744cd53b884351a70422d7d986ecc716c0b85831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "  ";
        
        $__internal_e50c1a06dcc9e79c83a39c66744cd53b884351a70422d7d986ecc716c0b85831->leave($__internal_e50c1a06dcc9e79c83a39c66744cd53b884351a70422d7d986ecc716c0b85831_prof);

    }

    // line 8
    public function block_page_footer($context, array $blocks = array())
    {
        $__internal_1d992727cc0c85d503932fa51a8cdf3a6fe286aade74510bb7853df61ec52425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d992727cc0c85d503932fa51a8cdf3a6fe286aade74510bb7853df61ec52425->enter($__internal_1d992727cc0c85d503932fa51a8cdf3a6fe286aade74510bb7853df61ec52425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_footer"));

        // line 9
        echo "
";
        
        $__internal_1d992727cc0c85d503932fa51a8cdf3a6fe286aade74510bb7853df61ec52425->leave($__internal_1d992727cc0c85d503932fa51a8cdf3a6fe286aade74510bb7853df61ec52425_prof);

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
