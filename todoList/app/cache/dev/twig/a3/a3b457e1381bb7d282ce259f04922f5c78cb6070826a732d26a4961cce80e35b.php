<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_6a7c6e23688e53f702f22e85c087e8e02959c3291cc5cace4e01a116093cf838 extends Twig_Template
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
        $__internal_0cb05af5cc29fb4bbe124d699ff2835b87027d7d0a6b001ee20e5b6dcf380866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb05af5cc29fb4bbe124d699ff2835b87027d7d0a6b001ee20e5b6dcf380866->enter($__internal_0cb05af5cc29fb4bbe124d699ff2835b87027d7d0a6b001ee20e5b6dcf380866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0cb05af5cc29fb4bbe124d699ff2835b87027d7d0a6b001ee20e5b6dcf380866->leave($__internal_0cb05af5cc29fb4bbe124d699ff2835b87027d7d0a6b001ee20e5b6dcf380866_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
