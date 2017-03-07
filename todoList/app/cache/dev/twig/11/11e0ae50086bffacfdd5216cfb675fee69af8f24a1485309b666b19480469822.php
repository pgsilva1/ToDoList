<?php

/* TodoListCoreBundle:IndexControler:show.html.twig */
class __TwigTemplate_0c271e7a37ab838b0ddabdb8779504a79b64584ff353d97e7d54fe45f9e373f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "TodoListCoreBundle:IndexControler:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af4b398c8b17a3152c7ea84778f0c48c02f913702f607bc788a176bcc4e5b74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4b398c8b17a3152c7ea84778f0c48c02f913702f607bc788a176bcc4e5b74d->enter($__internal_af4b398c8b17a3152c7ea84778f0c48c02f913702f607bc788a176bcc4e5b74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:IndexControler:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af4b398c8b17a3152c7ea84778f0c48c02f913702f607bc788a176bcc4e5b74d->leave($__internal_af4b398c8b17a3152c7ea84778f0c48c02f913702f607bc788a176bcc4e5b74d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5802fcae9e40a00de8673498e1b7b0910395b70c40cf9bbb966e8038da0c6ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5802fcae9e40a00de8673498e1b7b0910395b70c40cf9bbb966e8038da0c6ffc->enter($__internal_5802fcae9e40a00de8673498e1b7b0910395b70c40cf9bbb966e8038da0c6ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TodoListCoreBundle:IndexControler:show";
        
        $__internal_5802fcae9e40a00de8673498e1b7b0910395b70c40cf9bbb966e8038da0c6ffc->leave($__internal_5802fcae9e40a00de8673498e1b7b0910395b70c40cf9bbb966e8038da0c6ffc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a19a0ca38ce36c3b93ff34ec30be2f5d061a9957104a98a28fc8888fb8af72d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a19a0ca38ce36c3b93ff34ec30be2f5d061a9957104a98a28fc8888fb8af72d->enter($__internal_1a19a0ca38ce36c3b93ff34ec30be2f5d061a9957104a98a28fc8888fb8af72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<h1>Welcome to the IndexControler:show page</h1>
";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["tarefa"] ?? $this->getContext($context, "tarefa")));
        echo "

";
        
        $__internal_1a19a0ca38ce36c3b93ff34ec30be2f5d061a9957104a98a28fc8888fb8af72d->leave($__internal_1a19a0ca38ce36c3b93ff34ec30be2f5d061a9957104a98a28fc8888fb8af72d_prof);

    }

    public function getTemplateName()
    {
        return "TodoListCoreBundle:IndexControler:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}TodoListCoreBundle:IndexControler:show{% endblock %}

{% block body %}

<h1>Welcome to the IndexControler:show page</h1>
{{ dump(tarefa) }}

{% endblock %}
", "TodoListCoreBundle:IndexControler:show.html.twig", "/home/desenvolvimento/Projetos/todoList/src/TodoList/CoreBundle/Resources/views/IndexControler/show.html.twig");
    }
}
