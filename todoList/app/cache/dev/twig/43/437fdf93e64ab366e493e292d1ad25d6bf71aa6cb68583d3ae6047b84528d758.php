<?php

/* AvanzuAdminThemeBundle:Default:index.html.twig */
class __TwigTemplate_08f7ee4a52e0aef623d59963c054a0643e4ee42e4b3e0f3894cff0f5e47bcd26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e04aba55659c2da79ba0a2e8c2f3a27a4981e6a8a7dffdc76191110bdbc02be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04aba55659c2da79ba0a2e8c2f3a27a4981e6a8a7dffdc76191110bdbc02be4->enter($__internal_e04aba55659c2da79ba0a2e8c2f3a27a4981e6a8a7dffdc76191110bdbc02be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04aba55659c2da79ba0a2e8c2f3a27a4981e6a8a7dffdc76191110bdbc02be4->leave($__internal_e04aba55659c2da79ba0a2e8c2f3a27a4981e6a8a7dffdc76191110bdbc02be4_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}



", "AvanzuAdminThemeBundle:Default:index.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/avanzu/admin-theme-bundle/Resources/views/Default/index.html.twig");
    }
}
