<?php

/* :tarefa:edit.html.twig */
class __TwigTemplate_3268578f13305b311a84e9f45ca4f72ca411a9f6137c34b795191f7dd382d8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tarefa:edit.html.twig", 1);
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
        $__internal_550b0a691ff8d09bb042d5bf7e9a002b5ad2a0f62bbceda51f73b752edf31bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550b0a691ff8d09bb042d5bf7e9a002b5ad2a0f62bbceda51f73b752edf31bcc->enter($__internal_550b0a691ff8d09bb042d5bf7e9a002b5ad2a0f62bbceda51f73b752edf31bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tarefa:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_550b0a691ff8d09bb042d5bf7e9a002b5ad2a0f62bbceda51f73b752edf31bcc->leave($__internal_550b0a691ff8d09bb042d5bf7e9a002b5ad2a0f62bbceda51f73b752edf31bcc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_abeb83a1db0df81c24cfa3a8450603c986b1b893e09be33a212f9ecc8a286b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abeb83a1db0df81c24cfa3a8450603c986b1b893e09be33a212f9ecc8a286b92->enter($__internal_abeb83a1db0df81c24cfa3a8450603c986b1b893e09be33a212f9ecc8a286b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TO DO List";
        
        $__internal_abeb83a1db0df81c24cfa3a8450603c986b1b893e09be33a212f9ecc8a286b92->leave($__internal_abeb83a1db0df81c24cfa3a8450603c986b1b893e09be33a212f9ecc8a286b92_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d002b9e92bb43d1901e4fa6e02f6743f5a04f012e42bd3b15eb5f7bff8f1106e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d002b9e92bb43d1901e4fa6e02f6743f5a04f012e42bd3b15eb5f7bff8f1106e->enter($__internal_d002b9e92bb43d1901e4fa6e02f6743f5a04f012e42bd3b15eb5f7bff8f1106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_d002b9e92bb43d1901e4fa6e02f6743f5a04f012e42bd3b15eb5f7bff8f1106e->leave($__internal_d002b9e92bb43d1901e4fa6e02f6743f5a04f012e42bd3b15eb5f7bff8f1106e_prof);

    }

    // line 5
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_8640eccca004968894b545d984423f784c2eabe2484c9714d70fc0938ef96839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8640eccca004968894b545d984423f784c2eabe2484c9714d70fc0938ef96839->enter($__internal_8640eccca004968894b545d984423f784c2eabe2484c9714d70fc0938ef96839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Edição ";
        
        $__internal_8640eccca004968894b545d984423f784c2eabe2484c9714d70fc0938ef96839->leave($__internal_8640eccca004968894b545d984423f784c2eabe2484c9714d70fc0938ef96839_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e40a4417380c548a563ff9b98188e1b4ba1c5e718ca029da5f0a045edc99c37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40a4417380c548a563ff9b98188e1b4ba1c5e718ca029da5f0a045edc99c37d->enter($__internal_e40a4417380c548a563ff9b98188e1b4ba1c5e718ca029da5f0a045edc99c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" />
    ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "



    <a class=\"btn btn-primary\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>

    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_e40a4417380c548a563ff9b98188e1b4ba1c5e718ca029da5f0a045edc99c37d->leave($__internal_e40a4417380c548a563ff9b98188e1b4ba1c5e718ca029da5f0a045edc99c37d_prof);

    }

    public function getTemplateName()
    {
        return ":tarefa:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  103 => 18,  98 => 16,  91 => 12,  86 => 10,  82 => 9,  79 => 8,  73 => 7,  61 => 5,  49 => 4,  37 => 2,  11 => 1,);
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
{% block title %}Tarefas - TO DO List{% endblock %}

{% block page_title %} Tarefas {% endblock %}
{% block page_subtitle %} Edição {% endblock %}

{% block page_content %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" />
    {{ form_end(edit_form) }}



    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", ":tarefa:edit.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/edit.html.twig");
    }
}
