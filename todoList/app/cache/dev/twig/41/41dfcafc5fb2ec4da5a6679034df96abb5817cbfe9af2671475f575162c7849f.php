<?php

/* ::base.html.twig */
class __TwigTemplate_4ad52adbe0103e049e4cd10f8b87e35f93e21d33af2616628350cabeda87b53c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "::base.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_footer' => array($this, 'block_page_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329ddca92382bdeed60cdf1bc2143c8c1e099803dfd7208d3b0b7fe909edd604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329ddca92382bdeed60cdf1bc2143c8c1e099803dfd7208d3b0b7fe909edd604->enter($__internal_329ddca92382bdeed60cdf1bc2143c8c1e099803dfd7208d3b0b7fe909edd604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329ddca92382bdeed60cdf1bc2143c8c1e099803dfd7208d3b0b7fe909edd604->leave($__internal_329ddca92382bdeed60cdf1bc2143c8c1e099803dfd7208d3b0b7fe909edd604_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e4cbeb8e1657177723c6938c57ecfd95c626d7b16c3dbbc2f6f50c744182283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4cbeb8e1657177723c6938c57ecfd95c626d7b16c3dbbc2f6f50c744182283->enter($__internal_5e4cbeb8e1657177723c6938c57ecfd95c626d7b16c3dbbc2f6f50c744182283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List ";
        
        $__internal_5e4cbeb8e1657177723c6938c57ecfd95c626d7b16c3dbbc2f6f50c744182283->leave($__internal_5e4cbeb8e1657177723c6938c57ecfd95c626d7b16c3dbbc2f6f50c744182283_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_758537e60a0efe21ea1d49696ee5d361b956d9f2135f84272c05830a7853793b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758537e60a0efe21ea1d49696ee5d361b956d9f2135f84272c05830a7853793b->enter($__internal_758537e60a0efe21ea1d49696ee5d361b956d9f2135f84272c05830a7853793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "  ";
        
        $__internal_758537e60a0efe21ea1d49696ee5d361b956d9f2135f84272c05830a7853793b->leave($__internal_758537e60a0efe21ea1d49696ee5d361b956d9f2135f84272c05830a7853793b_prof);

    }

    // line 8
    public function block_page_footer($context, array $blocks = array())
    {
        $__internal_9a5a57741cdb18e82f5aa19066a8f99c16ee0a7eb03a357a87ca43fa1ec6aacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5a57741cdb18e82f5aa19066a8f99c16ee0a7eb03a357a87ca43fa1ec6aacd->enter($__internal_9a5a57741cdb18e82f5aa19066a8f99c16ee0a7eb03a357a87ca43fa1ec6aacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_footer"));

        // line 9
        echo "
";
        
        $__internal_9a5a57741cdb18e82f5aa19066a8f99c16ee0a7eb03a357a87ca43fa1ec6aacd->leave($__internal_9a5a57741cdb18e82f5aa19066a8f99c16ee0a7eb03a357a87ca43fa1ec6aacd_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  60 => 8,  48 => 6,  36 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# extends \"::base.html.twig\" #}
{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}TO DO List {% endblock %}

{% block page_title %}  {% endblock %}

{% block page_footer %}

{% endblock %}
", "::base.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/base.html.twig");
    }
}
