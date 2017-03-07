<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c8dcbb42a37578b2c58e992b174fb1986ed859bb7a703fc14b8ebe24103e3d70 extends Twig_Template
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
        $__internal_2b73fc08c39104f3638b0cbea4d53f0f6cc7d38507c957f14cc143c3fd250712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b73fc08c39104f3638b0cbea4d53f0f6cc7d38507c957f14cc143c3fd250712->enter($__internal_2b73fc08c39104f3638b0cbea4d53f0f6cc7d38507c957f14cc143c3fd250712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2b73fc08c39104f3638b0cbea4d53f0f6cc7d38507c957f14cc143c3fd250712->leave($__internal_2b73fc08c39104f3638b0cbea4d53f0f6cc7d38507c957f14cc143c3fd250712_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
