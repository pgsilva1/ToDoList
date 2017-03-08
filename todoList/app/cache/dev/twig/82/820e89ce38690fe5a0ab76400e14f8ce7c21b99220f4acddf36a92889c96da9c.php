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
        $__internal_3d7fb91ea3a0d5b0d0982e44a1b9ef73035401e884f44858114c96c429abd60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7fb91ea3a0d5b0d0982e44a1b9ef73035401e884f44858114c96c429abd60c->enter($__internal_3d7fb91ea3a0d5b0d0982e44a1b9ef73035401e884f44858114c96c429abd60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d7fb91ea3a0d5b0d0982e44a1b9ef73035401e884f44858114c96c429abd60c->leave($__internal_3d7fb91ea3a0d5b0d0982e44a1b9ef73035401e884f44858114c96c429abd60c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18ab494570f11434613c852d78b6aec0888cea8901901ea446dc032cfca492fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ab494570f11434613c852d78b6aec0888cea8901901ea446dc032cfca492fe->enter($__internal_18ab494570f11434613c852d78b6aec0888cea8901901ea446dc032cfca492fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18ab494570f11434613c852d78b6aec0888cea8901901ea446dc032cfca492fe->leave($__internal_18ab494570f11434613c852d78b6aec0888cea8901901ea446dc032cfca492fe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93b6fdc4cc7aa0a5b2bada7b7f7d5d87101725a96a6815be0aeb5931627cc393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b6fdc4cc7aa0a5b2bada7b7f7d5d87101725a96a6815be0aeb5931627cc393->enter($__internal_93b6fdc4cc7aa0a5b2bada7b7f7d5d87101725a96a6815be0aeb5931627cc393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93b6fdc4cc7aa0a5b2bada7b7f7d5d87101725a96a6815be0aeb5931627cc393->leave($__internal_93b6fdc4cc7aa0a5b2bada7b7f7d5d87101725a96a6815be0aeb5931627cc393_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_403a59d7e68ea225466d2bb25c7cddc765526ee94d72be66a9dcbb7b44450145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403a59d7e68ea225466d2bb25c7cddc765526ee94d72be66a9dcbb7b44450145->enter($__internal_403a59d7e68ea225466d2bb25c7cddc765526ee94d72be66a9dcbb7b44450145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_403a59d7e68ea225466d2bb25c7cddc765526ee94d72be66a9dcbb7b44450145->leave($__internal_403a59d7e68ea225466d2bb25c7cddc765526ee94d72be66a9dcbb7b44450145_prof);

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
