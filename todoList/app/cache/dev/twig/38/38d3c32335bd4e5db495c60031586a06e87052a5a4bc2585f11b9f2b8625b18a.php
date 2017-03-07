<?php

/* lista/edit.html.twig */
class __TwigTemplate_2cb11f6e7d7324a2bee636595919b54db129274ffad686f790210ed30ce39af1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lista/edit.html.twig", 1);
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
        $__internal_fa6f6632c2d3fdc39639b5b9fa76f68f298025d7a59dfbc6e65711c530aa7f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6f6632c2d3fdc39639b5b9fa76f68f298025d7a59dfbc6e65711c530aa7f55->enter($__internal_fa6f6632c2d3fdc39639b5b9fa76f68f298025d7a59dfbc6e65711c530aa7f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa6f6632c2d3fdc39639b5b9fa76f68f298025d7a59dfbc6e65711c530aa7f55->leave($__internal_fa6f6632c2d3fdc39639b5b9fa76f68f298025d7a59dfbc6e65711c530aa7f55_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c885f0b511bff1045747a21accbc13a82dd2c3f38cd83354c12a79a5cfef2f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c885f0b511bff1045747a21accbc13a82dd2c3f38cd83354c12a79a5cfef2f5f->enter($__internal_c885f0b511bff1045747a21accbc13a82dd2c3f38cd83354c12a79a5cfef2f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_c885f0b511bff1045747a21accbc13a82dd2c3f38cd83354c12a79a5cfef2f5f->leave($__internal_c885f0b511bff1045747a21accbc13a82dd2c3f38cd83354c12a79a5cfef2f5f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fe0ce231d300d134b0c207a8bf2b321b5e98fde7127df5d3777b87e04fef15b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0ce231d300d134b0c207a8bf2b321b5e98fde7127df5d3777b87e04fef15b2->enter($__internal_fe0ce231d300d134b0c207a8bf2b321b5e98fde7127df5d3777b87e04fef15b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_fe0ce231d300d134b0c207a8bf2b321b5e98fde7127df5d3777b87e04fef15b2->leave($__internal_fe0ce231d300d134b0c207a8bf2b321b5e98fde7127df5d3777b87e04fef15b2_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_06d172d5ecc6afece7532c0847e2470f7c31991de2f5f7a595e0d5374b93cdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d172d5ecc6afece7532c0847e2470f7c31991de2f5f7a595e0d5374b93cdb2->enter($__internal_06d172d5ecc6afece7532c0847e2470f7c31991de2f5f7a595e0d5374b93cdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Edição ";
        
        $__internal_06d172d5ecc6afece7532c0847e2470f7c31991de2f5f7a595e0d5374b93cdb2->leave($__internal_06d172d5ecc6afece7532c0847e2470f7c31991de2f5f7a595e0d5374b93cdb2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c55170708ae1851f6ff17d6308adfa584c65bf57edf4a85e237b2906d57f2beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55170708ae1851f6ff17d6308adfa584c65bf57edf4a85e237b2906d57f2beb->enter($__internal_c55170708ae1851f6ff17d6308adfa584c65bf57edf4a85e237b2906d57f2beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Editar\" />
    ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\">Voltar à Lista</a>

    ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 17
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_c55170708ae1851f6ff17d6308adfa584c65bf57edf4a85e237b2906d57f2beb->leave($__internal_c55170708ae1851f6ff17d6308adfa584c65bf57edf4a85e237b2906d57f2beb_prof);

    }

    public function getTemplateName()
    {
        return "lista/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  101 => 15,  96 => 13,  91 => 11,  86 => 9,  82 => 8,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_subtitle %} Edição {% endblock %}

{% block page_content %}

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Editar\" />
    {{ form_end(edit_form) }}

    <a class=\"btn btn-primary\" href=\"{{ path('lista_index') }}\">Voltar à Lista</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", "lista/edit.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/edit.html.twig");
    }
}
