<?php

/* ::base.html.twig */
class __TwigTemplate_487225880b404daac05b38a6487c93c0935963a9d2e98ace4ba755075738f203 extends Twig_Template
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
        $__internal_bb2818ab76013b951be140e0f8075efc543408777a9d7f49e679fde7009cb653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2818ab76013b951be140e0f8075efc543408777a9d7f49e679fde7009cb653->enter($__internal_bb2818ab76013b951be140e0f8075efc543408777a9d7f49e679fde7009cb653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb2818ab76013b951be140e0f8075efc543408777a9d7f49e679fde7009cb653->leave($__internal_bb2818ab76013b951be140e0f8075efc543408777a9d7f49e679fde7009cb653_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2052175da67a08890d5768d3b6cf0294d13ea30202c430ad972a7d6c372c23cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2052175da67a08890d5768d3b6cf0294d13ea30202c430ad972a7d6c372c23cf->enter($__internal_2052175da67a08890d5768d3b6cf0294d13ea30202c430ad972a7d6c372c23cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TO DO List ";
        
        $__internal_2052175da67a08890d5768d3b6cf0294d13ea30202c430ad972a7d6c372c23cf->leave($__internal_2052175da67a08890d5768d3b6cf0294d13ea30202c430ad972a7d6c372c23cf_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1b8ce2e8a61214c2899d6c1782cb6922b93b979a1492716ffa6cf140867ef3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8ce2e8a61214c2899d6c1782cb6922b93b979a1492716ffa6cf140867ef3aa->enter($__internal_1b8ce2e8a61214c2899d6c1782cb6922b93b979a1492716ffa6cf140867ef3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "  ";
        
        $__internal_1b8ce2e8a61214c2899d6c1782cb6922b93b979a1492716ffa6cf140867ef3aa->leave($__internal_1b8ce2e8a61214c2899d6c1782cb6922b93b979a1492716ffa6cf140867ef3aa_prof);

    }

    // line 8
    public function block_page_footer($context, array $blocks = array())
    {
        $__internal_197ecc5489e7f10df1bd636c1af05d44cf34fcc1b4437cbdcb63bdb30c2f239f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197ecc5489e7f10df1bd636c1af05d44cf34fcc1b4437cbdcb63bdb30c2f239f->enter($__internal_197ecc5489e7f10df1bd636c1af05d44cf34fcc1b4437cbdcb63bdb30c2f239f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_footer"));

        // line 9
        echo "
";
        
        $__internal_197ecc5489e7f10df1bd636c1af05d44cf34fcc1b4437cbdcb63bdb30c2f239f->leave($__internal_197ecc5489e7f10df1bd636c1af05d44cf34fcc1b4437cbdcb63bdb30c2f239f_prof);

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
