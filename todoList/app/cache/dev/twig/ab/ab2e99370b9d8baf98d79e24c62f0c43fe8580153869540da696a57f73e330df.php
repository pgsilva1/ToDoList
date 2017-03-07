<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5cd835b617ac6a39dbfc9b1f2d7240117792411067db24607933b57bd3d96f5c extends Twig_Template
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
        $__internal_8984b1c841a26babf6f69fba8e40c4ed51f8336fdb23613cc6c7456b8188d4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8984b1c841a26babf6f69fba8e40c4ed51f8336fdb23613cc6c7456b8188d4bd->enter($__internal_8984b1c841a26babf6f69fba8e40c4ed51f8336fdb23613cc6c7456b8188d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8984b1c841a26babf6f69fba8e40c4ed51f8336fdb23613cc6c7456b8188d4bd->leave($__internal_8984b1c841a26babf6f69fba8e40c4ed51f8336fdb23613cc6c7456b8188d4bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
