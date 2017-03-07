<?php

/* TodoListCoreBundle:Default:index.html.twig */
class __TwigTemplate_06fd21a44072d1b90a2bd45c6df8e2289e9eecd7d14112aa19127b4c98e1f129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2df848810cec70a649c60aee1f4c2c6e028c5b515df1a25ac6d383b0e3e9e0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df848810cec70a649c60aee1f4c2c6e028c5b515df1a25ac6d383b0e3e9e0e2->enter($__internal_2df848810cec70a649c60aee1f4c2c6e028c5b515df1a25ac6d383b0e3e9e0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TodoListCoreBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_2df848810cec70a649c60aee1f4c2c6e028c5b515df1a25ac6d383b0e3e9e0e2->leave($__internal_2df848810cec70a649c60aee1f4c2c6e028c5b515df1a25ac6d383b0e3e9e0e2_prof);

    }

    public function getTemplateName()
    {
        return "TodoListCoreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "TodoListCoreBundle:Default:index.html.twig", "/home/desenvolvimento/Projetos/todoList/src/TodoList/CoreBundle/Resources/views/Default/index.html.twig");
    }
}
