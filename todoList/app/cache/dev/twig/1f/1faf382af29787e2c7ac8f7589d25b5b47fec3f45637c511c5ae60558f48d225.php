<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9f97aaa075b9cad4f5f0768586c369cbfdadb8721a881fc571b99399560837b2 extends Twig_Template
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
        $__internal_2bdb80b22bb729682330deec7bf8208c65eac7f58e0c1f790d5c122e83b82bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdb80b22bb729682330deec7bf8208c65eac7f58e0c1f790d5c122e83b82bf8->enter($__internal_2bdb80b22bb729682330deec7bf8208c65eac7f58e0c1f790d5c122e83b82bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2bdb80b22bb729682330deec7bf8208c65eac7f58e0c1f790d5c122e83b82bf8->leave($__internal_2bdb80b22bb729682330deec7bf8208c65eac7f58e0c1f790d5c122e83b82bf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
