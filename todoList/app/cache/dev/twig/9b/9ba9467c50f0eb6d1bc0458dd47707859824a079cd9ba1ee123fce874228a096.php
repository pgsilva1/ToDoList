<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8493305f56718b33102abdbefe21ab4f06834ee500d81d8d5da49989930b123e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72054b2bf8f0d347ab9cd2c0dfaafa2243a90c878d62600b3ea53a62ea2be431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72054b2bf8f0d347ab9cd2c0dfaafa2243a90c878d62600b3ea53a62ea2be431->enter($__internal_72054b2bf8f0d347ab9cd2c0dfaafa2243a90c878d62600b3ea53a62ea2be431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72054b2bf8f0d347ab9cd2c0dfaafa2243a90c878d62600b3ea53a62ea2be431->leave($__internal_72054b2bf8f0d347ab9cd2c0dfaafa2243a90c878d62600b3ea53a62ea2be431_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e23b433085f83e85cd0f6e0e68d9732861819b4270e8ed8b8595e710b114aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e23b433085f83e85cd0f6e0e68d9732861819b4270e8ed8b8595e710b114aa8->enter($__internal_6e23b433085f83e85cd0f6e0e68d9732861819b4270e8ed8b8595e710b114aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6e23b433085f83e85cd0f6e0e68d9732861819b4270e8ed8b8595e710b114aa8->leave($__internal_6e23b433085f83e85cd0f6e0e68d9732861819b4270e8ed8b8595e710b114aa8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffe17d986e30724e899dc84e1c413c3dbcd1b8ed3b48030b91548cca6d899db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe17d986e30724e899dc84e1c413c3dbcd1b8ed3b48030b91548cca6d899db7->enter($__internal_ffe17d986e30724e899dc84e1c413c3dbcd1b8ed3b48030b91548cca6d899db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ffe17d986e30724e899dc84e1c413c3dbcd1b8ed3b48030b91548cca6d899db7->leave($__internal_ffe17d986e30724e899dc84e1c413c3dbcd1b8ed3b48030b91548cca6d899db7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e0d2bea879bb87abb25ae74dd94db6a3787f565ba078bbfec70ee3b9583ad11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d2bea879bb87abb25ae74dd94db6a3787f565ba078bbfec70ee3b9583ad11b->enter($__internal_e0d2bea879bb87abb25ae74dd94db6a3787f565ba078bbfec70ee3b9583ad11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e0d2bea879bb87abb25ae74dd94db6a3787f565ba078bbfec70ee3b9583ad11b->leave($__internal_e0d2bea879bb87abb25ae74dd94db6a3787f565ba078bbfec70ee3b9583ad11b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
