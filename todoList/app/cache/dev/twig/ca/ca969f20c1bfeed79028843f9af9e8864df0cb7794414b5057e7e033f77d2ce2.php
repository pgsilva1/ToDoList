<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ef274b969e8e6697b40e226c08fc8faf74bd1b560f79ebf1216bf9e1fd561623 extends Twig_Template
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
        $__internal_58bf7a0ba827b1a5857e87eb5b368b57a1d6fa490a928425c3dc6bdb0d1e84c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bf7a0ba827b1a5857e87eb5b368b57a1d6fa490a928425c3dc6bdb0d1e84c4->enter($__internal_58bf7a0ba827b1a5857e87eb5b368b57a1d6fa490a928425c3dc6bdb0d1e84c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_58bf7a0ba827b1a5857e87eb5b368b57a1d6fa490a928425c3dc6bdb0d1e84c4->leave($__internal_58bf7a0ba827b1a5857e87eb5b368b57a1d6fa490a928425c3dc6bdb0d1e84c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
