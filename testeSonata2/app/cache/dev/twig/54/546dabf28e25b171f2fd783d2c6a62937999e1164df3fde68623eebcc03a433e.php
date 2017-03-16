<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_0db97fc36e72666499904a52ee8ee51ed855bdb3c109d33c6b4afbadcc6a630d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f465ee76fd4613527552281061d6e20d4be44975080e8d5ae8ba0b904d61146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f465ee76fd4613527552281061d6e20d4be44975080e8d5ae8ba0b904d61146->enter($__internal_0f465ee76fd4613527552281061d6e20d4be44975080e8d5ae8ba0b904d61146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f465ee76fd4613527552281061d6e20d4be44975080e8d5ae8ba0b904d61146->leave($__internal_0f465ee76fd4613527552281061d6e20d4be44975080e8d5ae8ba0b904d61146_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b29feee89939ddd7e5fa25372822855fb9f48d27209adaee33ed038c86ebf15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29feee89939ddd7e5fa25372822855fb9f48d27209adaee33ed038c86ebf15a->enter($__internal_b29feee89939ddd7e5fa25372822855fb9f48d27209adaee33ed038c86ebf15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b29feee89939ddd7e5fa25372822855fb9f48d27209adaee33ed038c86ebf15a->leave($__internal_b29feee89939ddd7e5fa25372822855fb9f48d27209adaee33ed038c86ebf15a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
