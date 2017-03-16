<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8026803b340f4fe8a654f0a9e18d43bbcc82b0472616071198b6132f0db89805 extends Twig_Template
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
        $__internal_250f97a6d8947ab5b06e58181ec6d81430cb87eb12ce3a81290b055bebc356ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250f97a6d8947ab5b06e58181ec6d81430cb87eb12ce3a81290b055bebc356ab->enter($__internal_250f97a6d8947ab5b06e58181ec6d81430cb87eb12ce3a81290b055bebc356ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_250f97a6d8947ab5b06e58181ec6d81430cb87eb12ce3a81290b055bebc356ab->leave($__internal_250f97a6d8947ab5b06e58181ec6d81430cb87eb12ce3a81290b055bebc356ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0f2c8dcbd925f2e2c6b584727d7290a227dd24873b0d6c29bda7ae8e087e970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f2c8dcbd925f2e2c6b584727d7290a227dd24873b0d6c29bda7ae8e087e970->enter($__internal_d0f2c8dcbd925f2e2c6b584727d7290a227dd24873b0d6c29bda7ae8e087e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0f2c8dcbd925f2e2c6b584727d7290a227dd24873b0d6c29bda7ae8e087e970->leave($__internal_d0f2c8dcbd925f2e2c6b584727d7290a227dd24873b0d6c29bda7ae8e087e970_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f1b751b68b780e4cc16b9ce3c6238d212822e4cebfe7322e6ea627e31080aa53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b751b68b780e4cc16b9ce3c6238d212822e4cebfe7322e6ea627e31080aa53->enter($__internal_f1b751b68b780e4cc16b9ce3c6238d212822e4cebfe7322e6ea627e31080aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f1b751b68b780e4cc16b9ce3c6238d212822e4cebfe7322e6ea627e31080aa53->leave($__internal_f1b751b68b780e4cc16b9ce3c6238d212822e4cebfe7322e6ea627e31080aa53_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_860fa4452141243f9ed4d1656d0b1a7be777161450e52930a1fc4fc9e927d13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_860fa4452141243f9ed4d1656d0b1a7be777161450e52930a1fc4fc9e927d13a->enter($__internal_860fa4452141243f9ed4d1656d0b1a7be777161450e52930a1fc4fc9e927d13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_860fa4452141243f9ed4d1656d0b1a7be777161450e52930a1fc4fc9e927d13a->leave($__internal_860fa4452141243f9ed4d1656d0b1a7be777161450e52930a1fc4fc9e927d13a_prof);

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
