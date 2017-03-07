<?php

/* lista/new.html.twig */
class __TwigTemplate_4c785751ab032f842ceb3c93b2cef60bcecedaaa87ba0410cce113c0c8209846 extends Twig_Template
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
        $__internal_df0c8949b3bbf8ad055b0183413afde48ab67927dacd4f0afdfd9c1a0359ac23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0c8949b3bbf8ad055b0183413afde48ab67927dacd4f0afdfd9c1a0359ac23->enter($__internal_df0c8949b3bbf8ad055b0183413afde48ab67927dacd4f0afdfd9c1a0359ac23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df0c8949b3bbf8ad055b0183413afde48ab67927dacd4f0afdfd9c1a0359ac23->leave($__internal_df0c8949b3bbf8ad055b0183413afde48ab67927dacd4f0afdfd9c1a0359ac23_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5d41dfd12dc130913c3ea9042b1e4361632947a0cd2bad056c9d7e78caa2548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d41dfd12dc130913c3ea9042b1e4361632947a0cd2bad056c9d7e78caa2548->enter($__internal_e5d41dfd12dc130913c3ea9042b1e4361632947a0cd2bad056c9d7e78caa2548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_e5d41dfd12dc130913c3ea9042b1e4361632947a0cd2bad056c9d7e78caa2548->leave($__internal_e5d41dfd12dc130913c3ea9042b1e4361632947a0cd2bad056c9d7e78caa2548_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5755b046e3378beb1adc09360033b2c6cd512bb927be01133022963cb1e4fb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5755b046e3378beb1adc09360033b2c6cd512bb927be01133022963cb1e4fb26->enter($__internal_5755b046e3378beb1adc09360033b2c6cd512bb927be01133022963cb1e4fb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_5755b046e3378beb1adc09360033b2c6cd512bb927be01133022963cb1e4fb26->leave($__internal_5755b046e3378beb1adc09360033b2c6cd512bb927be01133022963cb1e4fb26_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_7ab9ce7f73fac807cdb7a4f1366d50ffd2fb6d0207e6faf241ade37f7d30f0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab9ce7f73fac807cdb7a4f1366d50ffd2fb6d0207e6faf241ade37f7d30f0b6->enter($__internal_7ab9ce7f73fac807cdb7a4f1366d50ffd2fb6d0207e6faf241ade37f7d30f0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Criação ";
        
        $__internal_7ab9ce7f73fac807cdb7a4f1366d50ffd2fb6d0207e6faf241ade37f7d30f0b6->leave($__internal_7ab9ce7f73fac807cdb7a4f1366d50ffd2fb6d0207e6faf241ade37f7d30f0b6_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b82785969d6be42c6af90681c531c20ee78d0b450da4ef14deb6afcad538ea0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82785969d6be42c6af90681c531c20ee78d0b450da4ef14deb6afcad538ea0c->enter($__internal_b82785969d6be42c6af90681c531c20ee78d0b450da4ef14deb6afcad538ea0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_b82785969d6be42c6af90681c531c20ee78d0b450da4ef14deb6afcad538ea0c->leave($__internal_b82785969d6be42c6af90681c531c20ee78d0b450da4ef14deb6afcad538ea0c_prof);

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
