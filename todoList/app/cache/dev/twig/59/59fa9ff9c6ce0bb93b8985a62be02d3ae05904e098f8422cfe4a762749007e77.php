<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b341fb63795afd188bf912189245c6243c6cc08d152841a61894026e72bece49 extends Twig_Template
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
        $__internal_a48a73f33378f19b58b8d7dc4d3e1cfe26cb600c0055fffdd8ad882ecaa82236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48a73f33378f19b58b8d7dc4d3e1cfe26cb600c0055fffdd8ad882ecaa82236->enter($__internal_a48a73f33378f19b58b8d7dc4d3e1cfe26cb600c0055fffdd8ad882ecaa82236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a48a73f33378f19b58b8d7dc4d3e1cfe26cb600c0055fffdd8ad882ecaa82236->leave($__internal_a48a73f33378f19b58b8d7dc4d3e1cfe26cb600c0055fffdd8ad882ecaa82236_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
