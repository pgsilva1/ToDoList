<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_1ca00486e919a7e49b3109efa813bf22c8dd8553c966d46dc96141e6cd7f2962 extends Twig_Template
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
        $__internal_e8c617040bf0e34669ea8112ebcbc5b559efc35b19ebc54afe5ea358436edb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c617040bf0e34669ea8112ebcbc5b559efc35b19ebc54afe5ea358436edb64->enter($__internal_e8c617040bf0e34669ea8112ebcbc5b559efc35b19ebc54afe5ea358436edb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e8c617040bf0e34669ea8112ebcbc5b559efc35b19ebc54afe5ea358436edb64->leave($__internal_e8c617040bf0e34669ea8112ebcbc5b559efc35b19ebc54afe5ea358436edb64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
