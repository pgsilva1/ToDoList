<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_750cd767a5ef24bb14f77b9f06aab743b537837523df30f08141633cf666cc74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_44bf452967d832ad461a50c9fc2c8dd1adb6c809b468130a4be706596db70105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44bf452967d832ad461a50c9fc2c8dd1adb6c809b468130a4be706596db70105->enter($__internal_44bf452967d832ad461a50c9fc2c8dd1adb6c809b468130a4be706596db70105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44bf452967d832ad461a50c9fc2c8dd1adb6c809b468130a4be706596db70105->leave($__internal_44bf452967d832ad461a50c9fc2c8dd1adb6c809b468130a4be706596db70105_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_513df5cc58db3a273371131d996569df066487961a216b86df78be186e9447ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513df5cc58db3a273371131d996569df066487961a216b86df78be186e9447ed->enter($__internal_513df5cc58db3a273371131d996569df066487961a216b86df78be186e9447ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_513df5cc58db3a273371131d996569df066487961a216b86df78be186e9447ed->leave($__internal_513df5cc58db3a273371131d996569df066487961a216b86df78be186e9447ed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54030838d4753cb09476e5e7850da747f68037a0826aaf1f88a96371b31eb026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54030838d4753cb09476e5e7850da747f68037a0826aaf1f88a96371b31eb026->enter($__internal_54030838d4753cb09476e5e7850da747f68037a0826aaf1f88a96371b31eb026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_54030838d4753cb09476e5e7850da747f68037a0826aaf1f88a96371b31eb026->leave($__internal_54030838d4753cb09476e5e7850da747f68037a0826aaf1f88a96371b31eb026_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_91883137f61d547378487e7ec4714b8a0d297bb53452171e2717cb03c733f9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91883137f61d547378487e7ec4714b8a0d297bb53452171e2717cb03c733f9de->enter($__internal_91883137f61d547378487e7ec4714b8a0d297bb53452171e2717cb03c733f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_91883137f61d547378487e7ec4714b8a0d297bb53452171e2717cb03c733f9de->leave($__internal_91883137f61d547378487e7ec4714b8a0d297bb53452171e2717cb03c733f9de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
