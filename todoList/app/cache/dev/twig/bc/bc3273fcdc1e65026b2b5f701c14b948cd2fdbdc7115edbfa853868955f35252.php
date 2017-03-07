<?php

/* tarefa/new.html.twig */
class __TwigTemplate_6989b681d0155f136064c93dc89c3c669c0941dd2268e3fcfc76aa2cec13db46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tarefa/new.html.twig", 1);
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
        $__internal_dadf8a99dccaf5577b07c99390ac4402897bc9f56e760161a5d4366332675e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadf8a99dccaf5577b07c99390ac4402897bc9f56e760161a5d4366332675e8b->enter($__internal_dadf8a99dccaf5577b07c99390ac4402897bc9f56e760161a5d4366332675e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dadf8a99dccaf5577b07c99390ac4402897bc9f56e760161a5d4366332675e8b->leave($__internal_dadf8a99dccaf5577b07c99390ac4402897bc9f56e760161a5d4366332675e8b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f39fe965d860513c59d03def95d4c238829e178e17875da1cd5f254cd190ca8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39fe965d860513c59d03def95d4c238829e178e17875da1cd5f254cd190ca8e->enter($__internal_f39fe965d860513c59d03def95d4c238829e178e17875da1cd5f254cd190ca8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_f39fe965d860513c59d03def95d4c238829e178e17875da1cd5f254cd190ca8e->leave($__internal_f39fe965d860513c59d03def95d4c238829e178e17875da1cd5f254cd190ca8e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_936dca9715e87de9d82c47ec572134064c6c5fff9ca6ed05e6852776f83c5ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936dca9715e87de9d82c47ec572134064c6c5fff9ca6ed05e6852776f83c5ea7->enter($__internal_936dca9715e87de9d82c47ec572134064c6c5fff9ca6ed05e6852776f83c5ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_936dca9715e87de9d82c47ec572134064c6c5fff9ca6ed05e6852776f83c5ea7->leave($__internal_936dca9715e87de9d82c47ec572134064c6c5fff9ca6ed05e6852776f83c5ea7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_2708a43ab0eed6edaa6363e1952b760a57145f91ec001fabc6dd59a554bb2f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2708a43ab0eed6edaa6363e1952b760a57145f91ec001fabc6dd59a554bb2f3d->enter($__internal_2708a43ab0eed6edaa6363e1952b760a57145f91ec001fabc6dd59a554bb2f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Criação ";
        
        $__internal_2708a43ab0eed6edaa6363e1952b760a57145f91ec001fabc6dd59a554bb2f3d->leave($__internal_2708a43ab0eed6edaa6363e1952b760a57145f91ec001fabc6dd59a554bb2f3d_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_685bca974bc8779127c755bbcd2af54dfaed6506218a31e8d4c0503bf1065499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685bca974bc8779127c755bbcd2af54dfaed6506218a31e8d4c0503bf1065499->enter($__internal_685bca974bc8779127c755bbcd2af54dfaed6506218a31e8d4c0503bf1065499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titulo", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Título"));
        echo "
    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "titulo", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descricao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Descrição"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descricao", array()), 'errors');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "descricao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Observação"));
        echo "
    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacao", array()), 'errors');
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "observacao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "situacao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Situação"));
        echo "
    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "situacao", array()), 'errors');
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "situacao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pzconclusao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Prazo de Conclusão"));
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pzconclusao", array()), 'errors');
        echo "
    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pzconclusao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lista", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Lista"));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lista", array()), 'errors');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lista", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "


    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

    <input class=\"btn btn-success\"  type=\"submit\" value=\"Criar\" />
    <a class=\"btn btn-primary\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>
";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_685bca974bc8779127c755bbcd2af54dfaed6506218a31e8d4c0503bf1065499->leave($__internal_685bca974bc8779127c755bbcd2af54dfaed6506218a31e8d4c0503bf1065499_prof);

    }

    public function getTemplateName()
    {
        return "tarefa/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 39,  172 => 38,  166 => 35,  160 => 32,  156 => 31,  152 => 30,  147 => 28,  143 => 27,  139 => 26,  134 => 24,  130 => 23,  126 => 22,  121 => 20,  117 => 19,  113 => 18,  108 => 16,  104 => 15,  100 => 14,  95 => 12,  91 => 11,  87 => 10,  82 => 8,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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

    {{ form_label(form.titulo, 'Título', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.titulo) }}
    {{ form_widget(form.titulo, {'attr': {'class': 'foo'}}) }}

    {{ form_label(form.descricao, 'Descrição', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.descricao) }}
    {{ form_widget(form.descricao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(form.observacao, 'Observação', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.observacao) }}
    {{ form_widget(form.observacao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(form.situacao, 'Situação', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.situacao) }}
    {{ form_widget(form.situacao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(form.pzconclusao, 'Prazo de Conclusão', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.pzconclusao) }}
    {{ form_widget(form.pzconclusao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(form.lista, 'Lista', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(form.lista) }}
    {{ form_widget(form.lista, {'attr': {'class': 'foo'}}) }}


    {{ form_rest(form) }}

    <input class=\"btn btn-success\"  type=\"submit\" value=\"Criar\" />
    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>
{{ form_end(form)  }}


{% endblock %}
", "tarefa/new.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/new.html.twig");
    }
}
