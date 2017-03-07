<?php

/* :lista:show.html.twig */
class __TwigTemplate_18e01af3e046df6d122ed0b5cfdb88115862ff4dc4b71df8d1e86a20fd45596a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lista:show.html.twig", 1);
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
        $__internal_740493d1b970aa094570f4fd9bc7b980b5bb42fb52aae3e80b08527907531088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740493d1b970aa094570f4fd9bc7b980b5bb42fb52aae3e80b08527907531088->enter($__internal_740493d1b970aa094570f4fd9bc7b980b5bb42fb52aae3e80b08527907531088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lista:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740493d1b970aa094570f4fd9bc7b980b5bb42fb52aae3e80b08527907531088->leave($__internal_740493d1b970aa094570f4fd9bc7b980b5bb42fb52aae3e80b08527907531088_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_393c5c3991b604af926014520d5aea7ee9c8c798d7c265acbd95c5d72e417401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393c5c3991b604af926014520d5aea7ee9c8c798d7c265acbd95c5d72e417401->enter($__internal_393c5c3991b604af926014520d5aea7ee9c8c798d7c265acbd95c5d72e417401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_393c5c3991b604af926014520d5aea7ee9c8c798d7c265acbd95c5d72e417401->leave($__internal_393c5c3991b604af926014520d5aea7ee9c8c798d7c265acbd95c5d72e417401_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_82f722f905cadc3ed701d8ee88e87ca64d69c1ac8b0c2ac5f9ed0fec9d07b68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f722f905cadc3ed701d8ee88e87ca64d69c1ac8b0c2ac5f9ed0fec9d07b68d->enter($__internal_82f722f905cadc3ed701d8ee88e87ca64d69c1ac8b0c2ac5f9ed0fec9d07b68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Lista";
        
        $__internal_82f722f905cadc3ed701d8ee88e87ca64d69c1ac8b0c2ac5f9ed0fec9d07b68d->leave($__internal_82f722f905cadc3ed701d8ee88e87ca64d69c1ac8b0c2ac5f9ed0fec9d07b68d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_9b9deb6f9a06a2fd532746c85e7637190eb794b94a24bc092c07726d2a98c1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9deb6f9a06a2fd532746c85e7637190eb794b94a24bc092c07726d2a98c1f9->enter($__internal_9b9deb6f9a06a2fd532746c85e7637190eb794b94a24bc092c07726d2a98c1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Categoria ";
        
        $__internal_9b9deb6f9a06a2fd532746c85e7637190eb794b94a24bc092c07726d2a98c1f9->leave($__internal_9b9deb6f9a06a2fd532746c85e7637190eb794b94a24bc092c07726d2a98c1f9_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4d23ca456c44da263aa84700be3cfcb5b5cc87bf2f8e330a8bf1a48fe916055a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d23ca456c44da263aa84700be3cfcb5b5cc87bf2f8e330a8bf1a48fe916055a->enter($__internal_4d23ca456c44da263aa84700be3cfcb5b5cc87bf2f8e330a8bf1a48fe916055a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
      <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
                <h3 class=\"box-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["listum"] ?? $this->getContext($context, "listum")), "categoria", array()), "html", null, true);
        echo "</h3>
            </div>
      </div>

    <a class=\"btn btn-primary\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_index");
        echo "\">Voltar à Lista</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_edit", array("id" => $this->getAttribute(($context["listum"] ?? $this->getContext($context, "listum")), "id", array()))), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_4d23ca456c44da263aa84700be3cfcb5b5cc87bf2f8e330a8bf1a48fe916055a->leave($__internal_4d23ca456c44da263aa84700be3cfcb5b5cc87bf2f8e330a8bf1a48fe916055a_prof);

    }

    public function getTemplateName()
    {
        return ":lista:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  101 => 19,  96 => 17,  91 => 15,  84 => 11,  79 => 8,  73 => 7,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_title %} Lista{% endblock %}
{% block page_subtitle %} Categoria {% endblock %}


{% block page_content %}

      <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
                <h3 class=\"box-title\">{{ listum.categoria }}</h3>
            </div>
      </div>

    <a class=\"btn btn-primary\" href=\"{{ path('lista_index') }}\">Voltar à Lista</a>

    <a class=\"btn btn-primary\" href=\"{{ path('lista_edit', { 'id': listum.id }) }}\">Editar</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", ":lista:show.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/show.html.twig");
    }
}
