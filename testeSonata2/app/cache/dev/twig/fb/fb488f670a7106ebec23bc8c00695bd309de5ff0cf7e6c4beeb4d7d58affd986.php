<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0adfc0a7ab9c932de1783268d4db5f11e852d1e50dac9d96ffa5ebfdc66cdbb6 extends Twig_Template
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
        $__internal_6e9dd1af614f3b16e5e47178f2b87ea194bf8d832901bd4500f96cae0b683ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9dd1af614f3b16e5e47178f2b87ea194bf8d832901bd4500f96cae0b683ede->enter($__internal_6e9dd1af614f3b16e5e47178f2b87ea194bf8d832901bd4500f96cae0b683ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_6e9dd1af614f3b16e5e47178f2b87ea194bf8d832901bd4500f96cae0b683ede->leave($__internal_6e9dd1af614f3b16e5e47178f2b87ea194bf8d832901bd4500f96cae0b683ede_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
