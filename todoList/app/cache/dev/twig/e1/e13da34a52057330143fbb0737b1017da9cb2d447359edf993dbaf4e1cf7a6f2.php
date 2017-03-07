<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8592afea49c9b738e77f04dc3520ec4e1c5336201811f5de17f6b5ecd31e30b0 extends Twig_Template
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
        $__internal_bca7cc7091c97a177631f4707938c6b166ece39e4d6c2e7eecb7a9667068175b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca7cc7091c97a177631f4707938c6b166ece39e4d6c2e7eecb7a9667068175b->enter($__internal_bca7cc7091c97a177631f4707938c6b166ece39e4d6c2e7eecb7a9667068175b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bca7cc7091c97a177631f4707938c6b166ece39e4d6c2e7eecb7a9667068175b->leave($__internal_bca7cc7091c97a177631f4707938c6b166ece39e4d6c2e7eecb7a9667068175b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
