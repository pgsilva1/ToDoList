<?php

/* tarefa/edit.html.twig */
class __TwigTemplate_fd1874f795e0dcfe3a9ea2c216ff51f1db052b9600f1951af8a24e264ccf8d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tarefa/edit.html.twig", 1);
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
        $__internal_4cdda3a0bc3373ee4a610dce6d9c845398512bb2dc6f7c52dd5b18885d165567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdda3a0bc3373ee4a610dce6d9c845398512bb2dc6f7c52dd5b18885d165567->enter($__internal_4cdda3a0bc3373ee4a610dce6d9c845398512bb2dc6f7c52dd5b18885d165567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdda3a0bc3373ee4a610dce6d9c845398512bb2dc6f7c52dd5b18885d165567->leave($__internal_4cdda3a0bc3373ee4a610dce6d9c845398512bb2dc6f7c52dd5b18885d165567_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_87092663a28c50eceefdfcb680b591d500e26ac08af23431615d9f0fcfd25553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87092663a28c50eceefdfcb680b591d500e26ac08af23431615d9f0fcfd25553->enter($__internal_87092663a28c50eceefdfcb680b591d500e26ac08af23431615d9f0fcfd25553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TO DO List";
        
        $__internal_87092663a28c50eceefdfcb680b591d500e26ac08af23431615d9f0fcfd25553->leave($__internal_87092663a28c50eceefdfcb680b591d500e26ac08af23431615d9f0fcfd25553_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_82ba2fa2558841a6cf60cd5fee1755fad4278203396dd6e984e50d2390e02c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ba2fa2558841a6cf60cd5fee1755fad4278203396dd6e984e50d2390e02c29->enter($__internal_82ba2fa2558841a6cf60cd5fee1755fad4278203396dd6e984e50d2390e02c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_82ba2fa2558841a6cf60cd5fee1755fad4278203396dd6e984e50d2390e02c29->leave($__internal_82ba2fa2558841a6cf60cd5fee1755fad4278203396dd6e984e50d2390e02c29_prof);

    }

    // line 5
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_215e614141501ee9d1b3ee1fba27eecf308ce1fc9acb6506db1868ada974e2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215e614141501ee9d1b3ee1fba27eecf308ce1fc9acb6506db1868ada974e2ac->enter($__internal_215e614141501ee9d1b3ee1fba27eecf308ce1fc9acb6506db1868ada974e2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Edição ";
        
        $__internal_215e614141501ee9d1b3ee1fba27eecf308ce1fc9acb6506db1868ada974e2ac->leave($__internal_215e614141501ee9d1b3ee1fba27eecf308ce1fc9acb6506db1868ada974e2ac_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b5bd5a1b17334f1b2972c1a1977168aa1aef264e2a09837c5a60dccf5d4edb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bd5a1b17334f1b2972c1a1977168aa1aef264e2a09837c5a60dccf5d4edb61->enter($__internal_b5bd5a1b17334f1b2972c1a1977168aa1aef264e2a09837c5a60dccf5d4edb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titulo", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Título"));
        echo "
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titulo", array()), 'errors');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "titulo", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descricao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Descrição"));
        echo "
    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descricao", array()), 'errors');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "descricao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "observacao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Observação"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "observacao", array()), 'errors');
        echo "
    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "observacao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "situacao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Situação"));
        echo "
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "situacao", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "situacao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pzconclusao", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Prazo de Conclusão"));
        echo "
    ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pzconclusao", array()), 'errors');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "pzconclusao", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "

    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lista", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Lista"));
        echo "
    ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lista", array()), 'errors');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lista", array()), 'widget', array("attr" => array("class" => "foo")));
        echo "


    ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'rest');
        echo "


        <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" />
    ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "



    <a class=\"btn btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>

    ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_b5bd5a1b17334f1b2972c1a1977168aa1aef264e2a09837c5a60dccf5d4edb61->leave($__internal_b5bd5a1b17334f1b2972c1a1977168aa1aef264e2a09837c5a60dccf5d4edb61_prof);

    }

    public function getTemplateName()
    {
        return "tarefa/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 48,  185 => 46,  180 => 44,  173 => 40,  166 => 36,  160 => 33,  156 => 32,  152 => 31,  147 => 29,  143 => 28,  139 => 27,  134 => 25,  130 => 24,  126 => 23,  121 => 21,  117 => 20,  113 => 19,  108 => 17,  104 => 16,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  82 => 9,  79 => 8,  73 => 7,  61 => 5,  49 => 4,  37 => 2,  11 => 1,);
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

    {{ form_label(edit_form.titulo, 'Título', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.titulo) }}
    {{ form_widget(edit_form.titulo, {'attr': {'class': 'foo'}}) }}

    {{ form_label(edit_form.descricao, 'Descrição', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.descricao) }}
    {{ form_widget(edit_form.descricao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(edit_form.observacao, 'Observação', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.observacao) }}
    {{ form_widget(edit_form.observacao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(edit_form.situacao, 'Situação', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.situacao) }}
    {{ form_widget(edit_form.situacao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(edit_form.pzconclusao, 'Prazo de Conclusão', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.pzconclusao) }}
    {{ form_widget(edit_form.pzconclusao, {'attr': {'class': 'foo'}}) }}

    {{ form_label(edit_form.lista, 'Lista', {'label_attr': {'class': 'foo'}}) }}
    {{ form_errors(edit_form.lista) }}
    {{ form_widget(edit_form.lista, {'attr': {'class': 'foo'}}) }}


    {{ form_rest(edit_form) }}


        <input class=\"btn btn-primary\" type=\"submit\" value=\"Salvar\" />
    {{ form_end(edit_form) }}



    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", "tarefa/edit.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/edit.html.twig");
    }
}
