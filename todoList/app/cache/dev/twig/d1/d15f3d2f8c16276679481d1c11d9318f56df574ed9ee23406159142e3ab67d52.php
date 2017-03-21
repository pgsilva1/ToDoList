<?php

/* lista/index.html.twig */
class __TwigTemplate_cdbd25e303afcd5e8c71010cb043c07aa718541e09700683712ca75fa7bcd91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lista/index.html.twig", 1);
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
        $__internal_9b5067e1c533705707b877132ecd158f0926efb348df147a17590ec749ff590e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5067e1c533705707b877132ecd158f0926efb348df147a17590ec749ff590e->enter($__internal_9b5067e1c533705707b877132ecd158f0926efb348df147a17590ec749ff590e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lista/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5067e1c533705707b877132ecd158f0926efb348df147a17590ec749ff590e->leave($__internal_9b5067e1c533705707b877132ecd158f0926efb348df147a17590ec749ff590e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2aa346905c43a72f09d208dd32e00438920f64d6a3ecfc627a615f84df9faac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa346905c43a72f09d208dd32e00438920f64d6a3ecfc627a615f84df9faac7->enter($__internal_2aa346905c43a72f09d208dd32e00438920f64d6a3ecfc627a615f84df9faac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Listas - TO DO List";
        
        $__internal_2aa346905c43a72f09d208dd32e00438920f64d6a3ecfc627a615f84df9faac7->leave($__internal_2aa346905c43a72f09d208dd32e00438920f64d6a3ecfc627a615f84df9faac7_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fe8d1ce1b03608c6d228158a290f849abd6b99d1608aefd48fe0be654c263c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8d1ce1b03608c6d228158a290f849abd6b99d1608aefd48fe0be654c263c51->enter($__internal_fe8d1ce1b03608c6d228158a290f849abd6b99d1608aefd48fe0be654c263c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Listas ";
        
        $__internal_fe8d1ce1b03608c6d228158a290f849abd6b99d1608aefd48fe0be654c263c51->leave($__internal_fe8d1ce1b03608c6d228158a290f849abd6b99d1608aefd48fe0be654c263c51_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_bf7eb37b20fbfb0330f2e081fa086bc47af5079b3a79a80f2c93e7cd4ac45e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7eb37b20fbfb0330f2e081fa086bc47af5079b3a79a80f2c93e7cd4ac45e35->enter($__internal_bf7eb37b20fbfb0330f2e081fa086bc47af5079b3a79a80f2c93e7cd4ac45e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_bf7eb37b20fbfb0330f2e081fa086bc47af5079b3a79a80f2c93e7cd4ac45e35->leave($__internal_bf7eb37b20fbfb0330f2e081fa086bc47af5079b3a79a80f2c93e7cd4ac45e35_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cf1eeebbc93e0e7f3ebd114ba085ad95e191116e8e6d8de8bcfe3167d58f46ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1eeebbc93e0e7f3ebd114ba085ad95e191116e8e6d8de8bcfe3167d58f46ff->enter($__internal_cf1eeebbc93e0e7f3ebd114ba085ad95e191116e8e6d8de8bcfe3167d58f46ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <!-- <h1>Listas list</h1> -->

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listas"] ?? $this->getContext($context, "listas")));
        foreach ($context['_seq'] as $context["_key"] => $context["listum"]) {
            // line 10
            echo "        <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
              <h3 class=\"box-title\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_show", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listum"], "categoria", array()), "html", null, true);
            echo "</a></h3>
              <div class=\"box-tools pull-right\">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class=\"label label-info\"> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_show", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">Mostrar</a> </span>
                <span class=\"label label-info\"> <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_edit", array("id" => $this->getAttribute($context["listum"], "id", array()))), "html", null, true);
            echo "\">Editar</a></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
          </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "


  <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lista_new");
        echo "\">Criar nova Lista</a>

";
        
        $__internal_cf1eeebbc93e0e7f3ebd114ba085ad95e191116e8e6d8de8bcfe3167d58f46ff->leave($__internal_cf1eeebbc93e0e7f3ebd114ba085ad95e191116e8e6d8de8bcfe3167d58f46ff_prof);

    }

    public function getTemplateName()
    {
        return "lista/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  115 => 22,  104 => 17,  100 => 16,  91 => 12,  87 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_subtitle %} Página Principal {% endblock %}

{% block page_content %}
    <!-- <h1>Listas list</h1> -->

        {% for listum in listas %}
        <div class=\"box box-solid box-default\">
          <div class=\"box-header with-border\">
              <h3 class=\"box-title\"><a href=\"{{ path('lista_show', { 'id': listum.id }) }}\">{{ listum.categoria }}</a></h3>
              <div class=\"box-tools pull-right\">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class=\"label label-info\"> <a href=\"{{ path('lista_show', { 'id': listum.id }) }}\">Mostrar</a> </span>
                <span class=\"label label-info\"> <a href=\"{{ path('lista_edit', { 'id': listum.id }) }}\">Editar</a></span>
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
          </div>
      {% endfor %}



  <a class=\"btn btn-primary\" href=\"{{ path('lista_new') }}\">Criar nova Lista</a>

{% endblock %}
", "lista/index.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/lista/index.html.twig");
    }
}
