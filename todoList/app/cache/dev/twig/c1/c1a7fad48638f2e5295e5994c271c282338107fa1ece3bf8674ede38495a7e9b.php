<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_94fb689dd3191402e582bab15150b7554b77a0305e0fba37caf1381d117399fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29a9fcb4c2b1b8e24bf117f08e116e283d43589ac6406272a366947e650d5ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a9fcb4c2b1b8e24bf117f08e116e283d43589ac6406272a366947e650d5ac7->enter($__internal_29a9fcb4c2b1b8e24bf117f08e116e283d43589ac6406272a366947e650d5ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29a9fcb4c2b1b8e24bf117f08e116e283d43589ac6406272a366947e650d5ac7->leave($__internal_29a9fcb4c2b1b8e24bf117f08e116e283d43589ac6406272a366947e650d5ac7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_133c1d1c2a90822545ceec3173c979b24d274c7bc76eb4c84ebe8a3f2af68849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133c1d1c2a90822545ceec3173c979b24d274c7bc76eb4c84ebe8a3f2af68849->enter($__internal_133c1d1c2a90822545ceec3173c979b24d274c7bc76eb4c84ebe8a3f2af68849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_133c1d1c2a90822545ceec3173c979b24d274c7bc76eb4c84ebe8a3f2af68849->leave($__internal_133c1d1c2a90822545ceec3173c979b24d274c7bc76eb4c84ebe8a3f2af68849_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_256220d166c4b1739688affb9b5fef6fad5e3c85dee088f11fa87cece4927bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256220d166c4b1739688affb9b5fef6fad5e3c85dee088f11fa87cece4927bc4->enter($__internal_256220d166c4b1739688affb9b5fef6fad5e3c85dee088f11fa87cece4927bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_256220d166c4b1739688affb9b5fef6fad5e3c85dee088f11fa87cece4927bc4->leave($__internal_256220d166c4b1739688affb9b5fef6fad5e3c85dee088f11fa87cece4927bc4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_384260e01b2c2ad3e8d520c04368bafc7c4181da8f7e2a56243a23ddcb533b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_384260e01b2c2ad3e8d520c04368bafc7c4181da8f7e2a56243a23ddcb533b93->enter($__internal_384260e01b2c2ad3e8d520c04368bafc7c4181da8f7e2a56243a23ddcb533b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_384260e01b2c2ad3e8d520c04368bafc7c4181da8f7e2a56243a23ddcb533b93->leave($__internal_384260e01b2c2ad3e8d520c04368bafc7c4181da8f7e2a56243a23ddcb533b93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
