<?php

/* lista/new.html.twig */
class __TwigTemplate_ad8d87cd4181f458173054a1998a730ae5cd32110d6deee04db30ba710dc9546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lista/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_789cdec71c18d3ae15227d36977ddd51c67fe2ec863d0b40f148dd75769bc40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789cdec71c18d3ae15227d36977ddd51c67fe2ec863d0b40f148dd75769bc40b->enter($__internal_789cdec71c18d3ae15227d36977ddd51c67fe2ec863d0b40f148dd75769bc40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_789cdec71c18d3ae15227d36977ddd51c67fe2ec863d0b40f148dd75769bc40b->leave($__internal_789cdec71c18d3ae15227d36977ddd51c67fe2ec863d0b40f148dd75769bc40b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_842ebe55fccfc42fc768ac2539466380431768442fdc328327c509838ed36b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842ebe55fccfc42fc768ac2539466380431768442fdc328327c509838ed36b24->enter($__internal_842ebe55fccfc42fc768ac2539466380431768442fdc328327c509838ed36b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_842ebe55fccfc42fc768ac2539466380431768442fdc328327c509838ed36b24->leave($__internal_842ebe55fccfc42fc768ac2539466380431768442fdc328327c509838ed36b24_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5b61c924cb1eb3fdd1bc260db962efaff2db0878d79e30508dc2d6f2f1ba8c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b61c924cb1eb3fdd1bc260db962efaff2db0878d79e30508dc2d6f2f1ba8c0f->enter($__internal_5b61c924cb1eb3fdd1bc260db962efaff2db0878d79e30508dc2d6f2f1ba8c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_5b61c924cb1eb3fdd1bc260db962efaff2db0878d79e30508dc2d6f2f1ba8c0f->leave($__internal_5b61c924cb1eb3fdd1bc260db962efaff2db0878d79e30508dc2d6f2f1ba8c0f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_3999249ad3d39ea8676829568755824d947f766968c9bc8f3c112cfc3618d61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3999249ad3d39ea8676829568755824d947f766968c9bc8f3c112cfc3618d61a->enter($__internal_3999249ad3d39ea8676829568755824d947f766968c9bc8f3c112cfc3618d61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Criação ";
        
        $__internal_3999249ad3d39ea8676829568755824d947f766968c9bc8f3c112cfc3618d61a->leave($__internal_3999249ad3d39ea8676829568755824d947f766968c9bc8f3c112cfc3618d61a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9a1e7731aaadd84f52d0decd1b7096df274339bf8187f9cb9e238b74bb78f35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1e7731aaadd84f52d0decd1b7096df274339bf8187f9cb9e238b74bb78f35e->enter($__internal_9a1e7731aaadd84f52d0decd1b7096df274339bf8187f9cb9e238b74bb78f35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-primary\"  type=\"submit\" value=\"Criar\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\">Voltar à Central de Listas</a>

";
        
        $__internal_9a1e7731aaadd84f52d0decd1b7096df274339bf8187f9cb9e238b74bb78f35e->leave($__internal_9a1e7731aaadd84f52d0decd1b7096df274339bf8187f9cb9e238b74bb78f35e_prof);

    }

    public function getTemplateName()
    {
        return "lista/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 13,  91 => 11,  86 => 9,  82 => 8,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Listas - TO DO List{% endblock %}
{% block page_title %} Listas {% endblock %}
{% block page_subtitle %} Criação {% endblock %}

{% block page_content %}

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input class=\"btn btn-primary\"  type=\"submit\" value=\"Criar\" />
    {{ form_end(form) }}

    <a class=\"btn btn-primary\" href=\"{{ path('lista_index') }}\">Voltar à Central de Listas</a>

{% endblock %}
", "lista/new.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/new.html.twig");
    }
}
