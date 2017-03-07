<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_da4858d25b1fae2753f2635edffd8943279e1309ba441b8a4dcbdb81f46d7e1a extends Twig_Template
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
        $__internal_a56be69287af9de9d97fe19162d70e6ab32fc89a44c031999579553458ea4e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56be69287af9de9d97fe19162d70e6ab32fc89a44c031999579553458ea4e72->enter($__internal_a56be69287af9de9d97fe19162d70e6ab32fc89a44c031999579553458ea4e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a56be69287af9de9d97fe19162d70e6ab32fc89a44c031999579553458ea4e72->leave($__internal_a56be69287af9de9d97fe19162d70e6ab32fc89a44c031999579553458ea4e72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
