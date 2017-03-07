<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0441de61dff0af26592f87e57ca7519e5bcf2d179d3bcb5d7babdde3d0951e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_8da26de8a423b1f221628edec696da422eee8607ee246f65ff924ff36420fc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da26de8a423b1f221628edec696da422eee8607ee246f65ff924ff36420fc95->enter($__internal_8da26de8a423b1f221628edec696da422eee8607ee246f65ff924ff36420fc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da26de8a423b1f221628edec696da422eee8607ee246f65ff924ff36420fc95->leave($__internal_8da26de8a423b1f221628edec696da422eee8607ee246f65ff924ff36420fc95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08a5fe4d3dee5d882db0cdf272a891eea0d534d3e2b25548ee04d5811ebb5826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a5fe4d3dee5d882db0cdf272a891eea0d534d3e2b25548ee04d5811ebb5826->enter($__internal_08a5fe4d3dee5d882db0cdf272a891eea0d534d3e2b25548ee04d5811ebb5826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_08a5fe4d3dee5d882db0cdf272a891eea0d534d3e2b25548ee04d5811ebb5826->leave($__internal_08a5fe4d3dee5d882db0cdf272a891eea0d534d3e2b25548ee04d5811ebb5826_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_544e3b5f08a2660270f7596992c8cd97ada1f3a45adbfede9da0172cbafe3087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544e3b5f08a2660270f7596992c8cd97ada1f3a45adbfede9da0172cbafe3087->enter($__internal_544e3b5f08a2660270f7596992c8cd97ada1f3a45adbfede9da0172cbafe3087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_544e3b5f08a2660270f7596992c8cd97ada1f3a45adbfede9da0172cbafe3087->leave($__internal_544e3b5f08a2660270f7596992c8cd97ada1f3a45adbfede9da0172cbafe3087_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
