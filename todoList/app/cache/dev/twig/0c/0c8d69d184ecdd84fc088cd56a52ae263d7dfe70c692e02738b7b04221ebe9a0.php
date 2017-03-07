<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8a1119786bc5a38687f5d8259223a3f8c3d2fa82929acc3729d517c2f3e8c434 extends Twig_Template
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
        $__internal_d37a4cb771322cdec10ef803b9d956a2445b642b2129a0d44927f996e9945285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37a4cb771322cdec10ef803b9d956a2445b642b2129a0d44927f996e9945285->enter($__internal_d37a4cb771322cdec10ef803b9d956a2445b642b2129a0d44927f996e9945285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d37a4cb771322cdec10ef803b9d956a2445b642b2129a0d44927f996e9945285->leave($__internal_d37a4cb771322cdec10ef803b9d956a2445b642b2129a0d44927f996e9945285_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
