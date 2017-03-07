<?php

/* :lista:new.html.twig */
class __TwigTemplate_14737923203c767a2a0618e967230426bcd798efea0762e3066e32c7c121053f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lista:new.html.twig", 1);
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
        $__internal_a2c07219eb37c16e876229ce7eb8ee63120710ef8b615e4baca75566b009393f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c07219eb37c16e876229ce7eb8ee63120710ef8b615e4baca75566b009393f->enter($__internal_a2c07219eb37c16e876229ce7eb8ee63120710ef8b615e4baca75566b009393f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lista:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c07219eb37c16e876229ce7eb8ee63120710ef8b615e4baca75566b009393f->leave($__internal_a2c07219eb37c16e876229ce7eb8ee63120710ef8b615e4baca75566b009393f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e410cd3dab991dc7f9e67c2395835a5d601b1195b050a1d7b7bea088be516aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e410cd3dab991dc7f9e67c2395835a5d601b1195b050a1d7b7bea088be516aa->enter($__internal_2e410cd3dab991dc7f9e67c2395835a5d601b1195b050a1d7b7bea088be516aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_2e410cd3dab991dc7f9e67c2395835a5d601b1195b050a1d7b7bea088be516aa->leave($__internal_2e410cd3dab991dc7f9e67c2395835a5d601b1195b050a1d7b7bea088be516aa_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_33537e366cdaea2ea48a95993784ffe07542801db858397a856ddd62f16b421f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33537e366cdaea2ea48a95993784ffe07542801db858397a856ddd62f16b421f->enter($__internal_33537e366cdaea2ea48a95993784ffe07542801db858397a856ddd62f16b421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_33537e366cdaea2ea48a95993784ffe07542801db858397a856ddd62f16b421f->leave($__internal_33537e366cdaea2ea48a95993784ffe07542801db858397a856ddd62f16b421f_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b535c3b51ed18cb1193dd3bb6acd53c6a91ab2f2044437f960fbd28f9a9bafe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b535c3b51ed18cb1193dd3bb6acd53c6a91ab2f2044437f960fbd28f9a9bafe5->enter($__internal_b535c3b51ed18cb1193dd3bb6acd53c6a91ab2f2044437f960fbd28f9a9bafe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Criação ";
        
        $__internal_b535c3b51ed18cb1193dd3bb6acd53c6a91ab2f2044437f960fbd28f9a9bafe5->leave($__internal_b535c3b51ed18cb1193dd3bb6acd53c6a91ab2f2044437f960fbd28f9a9bafe5_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e56c8a5adb05e9436820861a5597630a23b9aac597109a10eb04453f3ef63fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56c8a5adb05e9436820861a5597630a23b9aac597109a10eb04453f3ef63fc1->enter($__internal_e56c8a5adb05e9436820861a5597630a23b9aac597109a10eb04453f3ef63fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e56c8a5adb05e9436820861a5597630a23b9aac597109a10eb04453f3ef63fc1->leave($__internal_e56c8a5adb05e9436820861a5597630a23b9aac597109a10eb04453f3ef63fc1_prof);

    }

    public function getTemplateName()
    {
        return ":lista:new.html.twig";
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
", ":lista:new.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/new.html.twig");
    }
}
