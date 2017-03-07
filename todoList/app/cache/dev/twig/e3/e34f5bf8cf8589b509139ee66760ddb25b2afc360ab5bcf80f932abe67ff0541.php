<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_19c21b3877f3aef57b5a7a68b17c7bbc92b9090dff7c430c92729010b25e524a extends Twig_Template
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
        $__internal_0e854c87bb3b115ca134f3a2f84c50c1a69d31114cebbeb7e725b6ec43dfec58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e854c87bb3b115ca134f3a2f84c50c1a69d31114cebbeb7e725b6ec43dfec58->enter($__internal_0e854c87bb3b115ca134f3a2f84c50c1a69d31114cebbeb7e725b6ec43dfec58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0e854c87bb3b115ca134f3a2f84c50c1a69d31114cebbeb7e725b6ec43dfec58->leave($__internal_0e854c87bb3b115ca134f3a2f84c50c1a69d31114cebbeb7e725b6ec43dfec58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
