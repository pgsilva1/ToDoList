<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_1d4d92f8e866e94324a7c6534afe6abccece300fc6ac7f6cb5834b5960321440 extends Twig_Template
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
        $__internal_cd76488fe33d59f345aa82bb3996fe29b61074dac59a4418d24dc2ab25726b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd76488fe33d59f345aa82bb3996fe29b61074dac59a4418d24dc2ab25726b77->enter($__internal_cd76488fe33d59f345aa82bb3996fe29b61074dac59a4418d24dc2ab25726b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cd76488fe33d59f345aa82bb3996fe29b61074dac59a4418d24dc2ab25726b77->leave($__internal_cd76488fe33d59f345aa82bb3996fe29b61074dac59a4418d24dc2ab25726b77_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2dc6eb9dff10b11aa8e02023361c2a1ffba60524d1e44f0d1f0a467df43a86b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc6eb9dff10b11aa8e02023361c2a1ffba60524d1e44f0d1f0a467df43a86b0->enter($__internal_2dc6eb9dff10b11aa8e02023361c2a1ffba60524d1e44f0d1f0a467df43a86b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2dc6eb9dff10b11aa8e02023361c2a1ffba60524d1e44f0d1f0a467df43a86b0->leave($__internal_2dc6eb9dff10b11aa8e02023361c2a1ffba60524d1e44f0d1f0a467df43a86b0_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
