<?php

/* :tarefa:show.html.twig */
class __TwigTemplate_a24902302aae2fd9c92fe5f709c692c90ee437a698d057db9209319551e61c63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tarefa:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed039d0a517735aa28efd8966bdd3294405a2b5ce6a64915316503da061a38c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed039d0a517735aa28efd8966bdd3294405a2b5ce6a64915316503da061a38c4->enter($__internal_ed039d0a517735aa28efd8966bdd3294405a2b5ce6a64915316503da061a38c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tarefa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed039d0a517735aa28efd8966bdd3294405a2b5ce6a64915316503da061a38c4->leave($__internal_ed039d0a517735aa28efd8966bdd3294405a2b5ce6a64915316503da061a38c4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_280bbca6b8f3eacd4b4afbfc9ec6aefc77c2f8610dca859d7a4e819234c2e1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280bbca6b8f3eacd4b4afbfc9ec6aefc77c2f8610dca859d7a4e819234c2e1bc->enter($__internal_280bbca6b8f3eacd4b4afbfc9ec6aefc77c2f8610dca859d7a4e819234c2e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_280bbca6b8f3eacd4b4afbfc9ec6aefc77c2f8610dca859d7a4e819234c2e1bc->leave($__internal_280bbca6b8f3eacd4b4afbfc9ec6aefc77c2f8610dca859d7a4e819234c2e1bc_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_211e36e398ec95f6eb45ca298777c63a7d7842da164ecacca9dc1e7f7cae3c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211e36e398ec95f6eb45ca298777c63a7d7842da164ecacca9dc1e7f7cae3c12->enter($__internal_211e36e398ec95f6eb45ca298777c63a7d7842da164ecacca9dc1e7f7cae3c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_211e36e398ec95f6eb45ca298777c63a7d7842da164ecacca9dc1e7f7cae3c12->leave($__internal_211e36e398ec95f6eb45ca298777c63a7d7842da164ecacca9dc1e7f7cae3c12_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_800e5e3c7a229447bc9e91c759c312bc0ca410f22a4b88d4d9184ff41645a112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800e5e3c7a229447bc9e91c759c312bc0ca410f22a4b88d4d9184ff41645a112->enter($__internal_800e5e3c7a229447bc9e91c759c312bc0ca410f22a4b88d4d9184ff41645a112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "titulo", array()), "html", null, true);
        echo " ";
        
        $__internal_800e5e3c7a229447bc9e91c759c312bc0ca410f22a4b88d4d9184ff41645a112->leave($__internal_800e5e3c7a229447bc9e91c759c312bc0ca410f22a4b88d4d9184ff41645a112_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e6e6c5b13c7d1bbd7425ca89c74e25b6d0b006cfb169e8dfc9cb817f422bf190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e6c5b13c7d1bbd7425ca89c74e25b6d0b006cfb169e8dfc9cb817f422bf190->enter($__internal_e6e6c5b13c7d1bbd7425ca89c74e25b6d0b006cfb169e8dfc9cb817f422bf190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"box box-primary\">
    <table>
        <tbody>
            <tr>
                <th>Titulo: </th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "titulo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lista: </th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "lista", array()), "html", null, true);
        echo "</td>
            </tr>

            <tr>
                <th>Descrição: </th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "descricao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Observação: </th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "observacao", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Situação: </th>
                <td>";
        // line 29
        if ($this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "situacao", array())) {
            echo "Concluída";
        } else {
            echo "Pendente";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Prazo de Conclusão: </th>
                <td>";
        // line 33
        if ($this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "pzconclusao", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "pzconclusao", array()), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Criado: </th>
                <td>";
        // line 37
        if ($this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "criadoEm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "criadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Atualizado: </th>
                <td>";
        // line 41
        if ($this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "atualizadoEm", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "atualizadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-primary\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_edit", array("id" => $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "id", array()))), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_e6e6c5b13c7d1bbd7425ca89c74e25b6d0b006cfb169e8dfc9cb817f422bf190->leave($__internal_e6e6c5b13c7d1bbd7425ca89c74e25b6d0b006cfb169e8dfc9cb817f422bf190_prof);

    }

    public function getTemplateName()
    {
        return ":tarefa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  166 => 50,  161 => 48,  156 => 46,  146 => 41,  137 => 37,  128 => 33,  117 => 29,  110 => 25,  103 => 21,  95 => 16,  88 => 12,  81 => 7,  75 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Tarefas - TODO List{% endblock %}
{% block page_title %} Tarefas {% endblock %}
{% block page_subtitle %} {{ tarefa.titulo }} {% endblock %}

{% block page_content %}
<div class=\"box box-primary\">
    <table>
        <tbody>
            <tr>
                <th>Titulo: </th>
                <td>{{ tarefa.titulo }}</td>
            </tr>
            <tr>
                <th>Lista: </th>
                <td>{{ tarefa.lista }}</td>
            </tr>

            <tr>
                <th>Descrição: </th>
                <td>{{ tarefa.descricao }}</td>
            </tr>
            <tr>
                <th>Observação: </th>
                <td>{{ tarefa.observacao }}</td>
            </tr>
            <tr>
                <th>Situação: </th>
                <td>{% if tarefa.situacao %}Concluída{% else %}Pendente{% endif %}</td>
            </tr>
            <tr>
                <th>Prazo de Conclusão: </th>
                <td>{% if tarefa.pzconclusao %}{{ tarefa.pzconclusao|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Criado: </th>
                <td>{% if tarefa.criadoEm %}{{ tarefa.criadoEm|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Atualizado: </th>
                <td>{% if tarefa.atualizadoEm %}{{ tarefa.atualizadoEm|date('d/m/Y H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>

    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_edit', { 'id': tarefa.id }) }}\">Editar</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", ":tarefa:show.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/show.html.twig");
    }
}
