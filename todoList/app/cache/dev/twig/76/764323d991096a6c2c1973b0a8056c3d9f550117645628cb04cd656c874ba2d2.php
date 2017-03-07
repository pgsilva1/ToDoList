<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_02c677d8034c1a6395861156c70060794bf48c7936a403d08eabb79be17282a9 extends Twig_Template
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
        $__internal_c56f08c77aa5d4c10f567bcb5fabcd65bebce1c0494198d8c043a3e6f6653eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56f08c77aa5d4c10f567bcb5fabcd65bebce1c0494198d8c043a3e6f6653eda->enter($__internal_c56f08c77aa5d4c10f567bcb5fabcd65bebce1c0494198d8c043a3e6f6653eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c56f08c77aa5d4c10f567bcb5fabcd65bebce1c0494198d8c043a3e6f6653eda->leave($__internal_c56f08c77aa5d4c10f567bcb5fabcd65bebce1c0494198d8c043a3e6f6653eda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/desenvolvimento/Projetos/todoList/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
