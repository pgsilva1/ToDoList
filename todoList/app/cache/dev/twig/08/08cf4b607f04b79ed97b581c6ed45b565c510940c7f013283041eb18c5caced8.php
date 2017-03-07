<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1a267e3e75021fa99a0b6e1e41ac9172ecc0ff0eaa8a2a726ebbf48ea452333f extends Twig_Template
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
        $__internal_913245759252ac31549a1fe5e2bc5825e921d7b377338b4b33f34438f64d6d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913245759252ac31549a1fe5e2bc5825e921d7b377338b4b33f34438f64d6d85->enter($__internal_913245759252ac31549a1fe5e2bc5825e921d7b377338b4b33f34438f64d6d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913245759252ac31549a1fe5e2bc5825e921d7b377338b4b33f34438f64d6d85->leave($__internal_913245759252ac31549a1fe5e2bc5825e921d7b377338b4b33f34438f64d6d85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_daba76fc89bb9f7f95bc6ff1ebc316cd3b0189965c0e7e07919ff9212c79bfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daba76fc89bb9f7f95bc6ff1ebc316cd3b0189965c0e7e07919ff9212c79bfc4->enter($__internal_daba76fc89bb9f7f95bc6ff1ebc316cd3b0189965c0e7e07919ff9212c79bfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_daba76fc89bb9f7f95bc6ff1ebc316cd3b0189965c0e7e07919ff9212c79bfc4->leave($__internal_daba76fc89bb9f7f95bc6ff1ebc316cd3b0189965c0e7e07919ff9212c79bfc4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74398e8f2041afd279bc8f82fa66dbbf0aae2167d5d2b51cfe009304c00c3ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74398e8f2041afd279bc8f82fa66dbbf0aae2167d5d2b51cfe009304c00c3ea1->enter($__internal_74398e8f2041afd279bc8f82fa66dbbf0aae2167d5d2b51cfe009304c00c3ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_74398e8f2041afd279bc8f82fa66dbbf0aae2167d5d2b51cfe009304c00c3ea1->leave($__internal_74398e8f2041afd279bc8f82fa66dbbf0aae2167d5d2b51cfe009304c00c3ea1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7087b39310f92c6624c3fdd39176a6538c0959d9c95a80c4e13d94ecb7414987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7087b39310f92c6624c3fdd39176a6538c0959d9c95a80c4e13d94ecb7414987->enter($__internal_7087b39310f92c6624c3fdd39176a6538c0959d9c95a80c4e13d94ecb7414987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7087b39310f92c6624c3fdd39176a6538c0959d9c95a80c4e13d94ecb7414987->leave($__internal_7087b39310f92c6624c3fdd39176a6538c0959d9c95a80c4e13d94ecb7414987_prof);

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
