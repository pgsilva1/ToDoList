<?php

/* :tarefa:new.html.twig */
class __TwigTemplate_b8dc17df7b18c0e5fe59b04eb9d1c36f79c59117bcb03c38e9d00362ea051ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tarefa:new.html.twig", 1);
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
        $__internal_33326c6aed2ca4ecd40c43b02425a47e800e3de49b6fdc9100044451d7def4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33326c6aed2ca4ecd40c43b02425a47e800e3de49b6fdc9100044451d7def4ad->enter($__internal_33326c6aed2ca4ecd40c43b02425a47e800e3de49b6fdc9100044451d7def4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tarefa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33326c6aed2ca4ecd40c43b02425a47e800e3de49b6fdc9100044451d7def4ad->leave($__internal_33326c6aed2ca4ecd40c43b02425a47e800e3de49b6fdc9100044451d7def4ad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecb854919aaf6915485d76d7b00a290b61dd5a733352729c6c48605ad95bdab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb854919aaf6915485d76d7b00a290b61dd5a733352729c6c48605ad95bdab7->enter($__internal_ecb854919aaf6915485d76d7b00a290b61dd5a733352729c6c48605ad95bdab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_ecb854919aaf6915485d76d7b00a290b61dd5a733352729c6c48605ad95bdab7->leave($__internal_ecb854919aaf6915485d76d7b00a290b61dd5a733352729c6c48605ad95bdab7_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2a9d3e0a1db7c175f3527af5f5e9fc4a506f0c79d6ef69009a66f2f7ce005482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9d3e0a1db7c175f3527af5f5e9fc4a506f0c79d6ef69009a66f2f7ce005482->enter($__internal_2a9d3e0a1db7c175f3527af5f5e9fc4a506f0c79d6ef69009a66f2f7ce005482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_2a9d3e0a1db7c175f3527af5f5e9fc4a506f0c79d6ef69009a66f2f7ce005482->leave($__internal_2a9d3e0a1db7c175f3527af5f5e9fc4a506f0c79d6ef69009a66f2f7ce005482_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8a2bf29d19662b3b1ad5caf9c632c659c085e02354377df89bd91738275d4530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2bf29d19662b3b1ad5caf9c632c659c085e02354377df89bd91738275d4530->enter($__internal_8a2bf29d19662b3b1ad5caf9c632c659c085e02354377df89bd91738275d4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Criação ";
        
        $__internal_8a2bf29d19662b3b1ad5caf9c632c659c085e02354377df89bd91738275d4530->leave($__internal_8a2bf29d19662b3b1ad5caf9c632c659c085e02354377df89bd91738275d4530_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1e7e46fffa0306e2216fc2e722ac068126595a86afaf6d28005baa7d1d67415f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e7e46fffa0306e2216fc2e722ac068126595a86afaf6d28005baa7d1d67415f->enter($__internal_1e7e46fffa0306e2216fc2e722ac068126595a86afaf6d28005baa7d1d67415f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
    
    <input class=\"btn btn-success\"  type=\"submit\" value=\"Criar\" />
";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>

";
        
        $__internal_1e7e46fffa0306e2216fc2e722ac068126595a86afaf6d28005baa7d1d67415f->leave($__internal_1e7e46fffa0306e2216fc2e722ac068126595a86afaf6d28005baa7d1d67415f_prof);

    }

    public function getTemplateName()
    {
        return ":tarefa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 14,  92 => 12,  86 => 9,  82 => 8,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block title %}Tarefas - TODO List{% endblock %}
{% block page_title %} Tarefas {% endblock %}
{% block page_subtitle %} Criação {% endblock %}

{% block page_content %}

{{ form_start(form) }}
    {{ form_widget(form) }}
    
    <input class=\"btn btn-success\"  type=\"submit\" value=\"Criar\" />
{{ form_end(form) }}

    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>

{% endblock %}
", ":tarefa:new.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/new.html.twig");
    }
}
