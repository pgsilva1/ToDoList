<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fbc76ee69d60d67d044cb2f045f26a15ae90f7fe7940c3761f14dacefe851c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3442091b10096f8e1d450c1d462db3073f3d8660f810cc596c8adeff54e9976f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3442091b10096f8e1d450c1d462db3073f3d8660f810cc596c8adeff54e9976f->enter($__internal_3442091b10096f8e1d450c1d462db3073f3d8660f810cc596c8adeff54e9976f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3442091b10096f8e1d450c1d462db3073f3d8660f810cc596c8adeff54e9976f->leave($__internal_3442091b10096f8e1d450c1d462db3073f3d8660f810cc596c8adeff54e9976f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e813cc0c6abad18c5d1ed651680b5cd7224c31d5f2534019746130412145ac2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e813cc0c6abad18c5d1ed651680b5cd7224c31d5f2534019746130412145ac2a->enter($__internal_e813cc0c6abad18c5d1ed651680b5cd7224c31d5f2534019746130412145ac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e813cc0c6abad18c5d1ed651680b5cd7224c31d5f2534019746130412145ac2a->leave($__internal_e813cc0c6abad18c5d1ed651680b5cd7224c31d5f2534019746130412145ac2a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
