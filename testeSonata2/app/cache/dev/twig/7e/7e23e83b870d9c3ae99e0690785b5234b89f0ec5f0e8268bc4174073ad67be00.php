<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4c51e2ae719b6f41a25b99c7aafd107604d9bfda7a3661a9235b679501aba167 extends Twig_Template
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
        $__internal_607be27a4cf4669b69a350e92ca653c03d4989f8e5a599ff6960fa8b137f8eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607be27a4cf4669b69a350e92ca653c03d4989f8e5a599ff6960fa8b137f8eae->enter($__internal_607be27a4cf4669b69a350e92ca653c03d4989f8e5a599ff6960fa8b137f8eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_607be27a4cf4669b69a350e92ca653c03d4989f8e5a599ff6960fa8b137f8eae->leave($__internal_607be27a4cf4669b69a350e92ca653c03d4989f8e5a599ff6960fa8b137f8eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/desenvolvimento/Projetos/testeSonata2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
