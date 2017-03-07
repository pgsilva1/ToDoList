<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_39c06f3d8961d554a2759431d1369a9293f049fb51b33a57e47bc5aa63e3b6ec extends Twig_Template
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
        $__internal_81e6841c14420c4c59cc1c267c70154699b73af04aa62477c8f404f9eb6792d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e6841c14420c4c59cc1c267c70154699b73af04aa62477c8f404f9eb6792d0->enter($__internal_81e6841c14420c4c59cc1c267c70154699b73af04aa62477c8f404f9eb6792d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_81e6841c14420c4c59cc1c267c70154699b73af04aa62477c8f404f9eb6792d0->leave($__internal_81e6841c14420c4c59cc1c267c70154699b73af04aa62477c8f404f9eb6792d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
