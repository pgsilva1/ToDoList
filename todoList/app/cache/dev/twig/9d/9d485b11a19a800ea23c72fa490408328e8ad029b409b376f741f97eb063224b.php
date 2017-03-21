<?php

/* tarefa/show.html.twig */
class __TwigTemplate_a39bd593d31ec8a53e309164702ca4fc22bf844e5fc30fe8f31fe8d9d8562ee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tarefa/show.html.twig", 1);
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
        $__internal_bb456f33c542a3989b540f8a1a1cc3b0932d46144b7bf7e14bb5ae5b689f91fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb456f33c542a3989b540f8a1a1cc3b0932d46144b7bf7e14bb5ae5b689f91fb->enter($__internal_bb456f33c542a3989b540f8a1a1cc3b0932d46144b7bf7e14bb5ae5b689f91fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb456f33c542a3989b540f8a1a1cc3b0932d46144b7bf7e14bb5ae5b689f91fb->leave($__internal_bb456f33c542a3989b540f8a1a1cc3b0932d46144b7bf7e14bb5ae5b689f91fb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c88ea3ddab0320011d2deed15870dae40d697665ea645f1350fd1f49e5fd81bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88ea3ddab0320011d2deed15870dae40d697665ea645f1350fd1f49e5fd81bd->enter($__internal_c88ea3ddab0320011d2deed15870dae40d697665ea645f1350fd1f49e5fd81bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_c88ea3ddab0320011d2deed15870dae40d697665ea645f1350fd1f49e5fd81bd->leave($__internal_c88ea3ddab0320011d2deed15870dae40d697665ea645f1350fd1f49e5fd81bd_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a87d53d4dda6fb71cda194819648dbcd6c70a16b2c245810bc602d34a0af58f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87d53d4dda6fb71cda194819648dbcd6c70a16b2c245810bc602d34a0af58f4->enter($__internal_a87d53d4dda6fb71cda194819648dbcd6c70a16b2c245810bc602d34a0af58f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_a87d53d4dda6fb71cda194819648dbcd6c70a16b2c245810bc602d34a0af58f4->leave($__internal_a87d53d4dda6fb71cda194819648dbcd6c70a16b2c245810bc602d34a0af58f4_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a0300c87a29a1b5a188c54eeff5559668b93f291e11d68765c125c1ee2eee96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0300c87a29a1b5a188c54eeff5559668b93f291e11d68765c125c1ee2eee96c->enter($__internal_a0300c87a29a1b5a188c54eeff5559668b93f291e11d68765c125c1ee2eee96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "titulo", array()), "html", null, true);
        echo " ";
        
        $__internal_a0300c87a29a1b5a188c54eeff5559668b93f291e11d68765c125c1ee2eee96c->leave($__internal_a0300c87a29a1b5a188c54eeff5559668b93f291e11d68765c125c1ee2eee96c_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3a92f450c9be9f4dd272acb5acd3f4b108dac24a01813625fa0822a661216dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a92f450c9be9f4dd272acb5acd3f4b108dac24a01813625fa0822a661216dec->enter($__internal_3a92f450c9be9f4dd272acb5acd3f4b108dac24a01813625fa0822a661216dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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

";
        // line 47
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 48
            echo "    <div class=\"alert alert-success\">
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 50
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "    </div>
";
        }
        // line 54
        echo "
    <a class=\"btn btn-primary\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_index");
        echo "\">Voltar às Tarefas</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_edit", array("id" => $this->getAttribute(($context["tarefa"] ?? $this->getContext($context, "tarefa")), "id", array()))), "html", null, true);
        echo "\">Editar</a>

    ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_3a92f450c9be9f4dd272acb5acd3f4b108dac24a01813625fa0822a661216dec->leave($__internal_3a92f450c9be9f4dd272acb5acd3f4b108dac24a01813625fa0822a661216dec_prof);

    }

    public function getTemplateName()
    {
        return "tarefa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 61,  192 => 59,  187 => 57,  182 => 55,  179 => 54,  175 => 52,  166 => 50,  162 => 49,  159 => 48,  157 => 47,  146 => 41,  137 => 37,  128 => 33,  117 => 29,  110 => 25,  103 => 21,  95 => 16,  88 => 12,  81 => 7,  75 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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

{% if app.session.flashBag.has('success') %}
    <div class=\"alert alert-success\">
        {% for msg in app.session.flashBag.get('success') %}
            {{ msg }}
        {% endfor %}
    </div>
{% endif %}

    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_index') }}\">Voltar às Tarefas</a>

    <a class=\"btn btn-primary\" href=\"{{ path('tarefa_edit', { 'id': tarefa.id }) }}\">Editar</a>

    {{ form_start(delete_form) }}
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Deletar\">
    {{ form_end(delete_form) }}

{% endblock %}
", "tarefa/show.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/show.html.twig");
    }
}
