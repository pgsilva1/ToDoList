<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd7c7458e691a5e05ff88d1b6ee45be12701d5e239dfd48f1721419c227ac60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e323d6e54fac0b50cdab8c64461a07cce27d927e550cb787e5027656979d580a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e323d6e54fac0b50cdab8c64461a07cce27d927e550cb787e5027656979d580a->enter($__internal_e323d6e54fac0b50cdab8c64461a07cce27d927e550cb787e5027656979d580a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e323d6e54fac0b50cdab8c64461a07cce27d927e550cb787e5027656979d580a->leave($__internal_e323d6e54fac0b50cdab8c64461a07cce27d927e550cb787e5027656979d580a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67609a77777ded9bb4206847d6218e25f716dadb1a44f2249f5ffcb49aabecb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67609a77777ded9bb4206847d6218e25f716dadb1a44f2249f5ffcb49aabecb4->enter($__internal_67609a77777ded9bb4206847d6218e25f716dadb1a44f2249f5ffcb49aabecb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67609a77777ded9bb4206847d6218e25f716dadb1a44f2249f5ffcb49aabecb4->leave($__internal_67609a77777ded9bb4206847d6218e25f716dadb1a44f2249f5ffcb49aabecb4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46bdedc82f8f52bb05a1ff9c094f98f524646f6e6f9ba0caddf73e474f00b464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bdedc82f8f52bb05a1ff9c094f98f524646f6e6f9ba0caddf73e474f00b464->enter($__internal_46bdedc82f8f52bb05a1ff9c094f98f524646f6e6f9ba0caddf73e474f00b464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46bdedc82f8f52bb05a1ff9c094f98f524646f6e6f9ba0caddf73e474f00b464->leave($__internal_46bdedc82f8f52bb05a1ff9c094f98f524646f6e6f9ba0caddf73e474f00b464_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94a03adbbfcd969b78cffa13da09c34bc5713b092107e89aa11849008d10b092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94a03adbbfcd969b78cffa13da09c34bc5713b092107e89aa11849008d10b092->enter($__internal_94a03adbbfcd969b78cffa13da09c34bc5713b092107e89aa11849008d10b092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_94a03adbbfcd969b78cffa13da09c34bc5713b092107e89aa11849008d10b092->leave($__internal_94a03adbbfcd969b78cffa13da09c34bc5713b092107e89aa11849008d10b092_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
