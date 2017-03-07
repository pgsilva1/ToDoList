<?php

/* tarefa/index.html.twig */
class __TwigTemplate_0f460c0afdd131fec9bf6de77a1a96f46264b08292c3e097f50932ff66c760b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tarefa/index.html.twig", 1);
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
        $__internal_de4533b9d07a3a5545eb2a013b83d02ebc467a6926e45a0041b0f9532b273a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4533b9d07a3a5545eb2a013b83d02ebc467a6926e45a0041b0f9532b273a23->enter($__internal_de4533b9d07a3a5545eb2a013b83d02ebc467a6926e45a0041b0f9532b273a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de4533b9d07a3a5545eb2a013b83d02ebc467a6926e45a0041b0f9532b273a23->leave($__internal_de4533b9d07a3a5545eb2a013b83d02ebc467a6926e45a0041b0f9532b273a23_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14b274c0d9be374be5d2a38bca0a8c11b5cf0854f171d610a2e77c333ceee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14b274c0d9be374be5d2a38bca0a8c11b5cf0854f171d610a2e77c333ceee21->enter($__internal_c14b274c0d9be374be5d2a38bca0a8c11b5cf0854f171d610a2e77c333ceee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_c14b274c0d9be374be5d2a38bca0a8c11b5cf0854f171d610a2e77c333ceee21->leave($__internal_c14b274c0d9be374be5d2a38bca0a8c11b5cf0854f171d610a2e77c333ceee21_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_adf83d5b9a6e778b39fe22b4e291a2bf0ee96d0f3003ec452fbaf98e282d785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf83d5b9a6e778b39fe22b4e291a2bf0ee96d0f3003ec452fbaf98e282d785c->enter($__internal_adf83d5b9a6e778b39fe22b4e291a2bf0ee96d0f3003ec452fbaf98e282d785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_adf83d5b9a6e778b39fe22b4e291a2bf0ee96d0f3003ec452fbaf98e282d785c->leave($__internal_adf83d5b9a6e778b39fe22b4e291a2bf0ee96d0f3003ec452fbaf98e282d785c_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_a0ee9995f8e7ac5059aeca8bbfd6a87e304f419fe34f327a9555403ed4f7d7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ee9995f8e7ac5059aeca8bbfd6a87e304f419fe34f327a9555403ed4f7d7bb->enter($__internal_a0ee9995f8e7ac5059aeca8bbfd6a87e304f419fe34f327a9555403ed4f7d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_a0ee9995f8e7ac5059aeca8bbfd6a87e304f419fe34f327a9555403ed4f7d7bb->leave($__internal_a0ee9995f8e7ac5059aeca8bbfd6a87e304f419fe34f327a9555403ed4f7d7bb_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_cd0371938f91d766f9fcd2bbcae44d1db236dba2edec39322c9454de3f00958c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0371938f91d766f9fcd2bbcae44d1db236dba2edec39322c9454de3f00958c->enter($__internal_cd0371938f91d766f9fcd2bbcae44d1db236dba2edec39322c9454de3f00958c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "    <!-- <h1>Tarefas list</h1> -->

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? $this->getContext($context, "tarefas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
            // line 10
            echo "            <div class=\"box box-solid box-success\">
              <div class=\"box-header with-border\">
                  <h3 class=\"box-title\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "titulo", array()), "html", null, true);
            echo "</a></h3>
                  <div class=\"box-tools pull-right\">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class=\"label label-default\">Lista: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "lista", array()), "html", null, true);
            echo "</span>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

            <div class=\"box-body\">
            <table>
                <!-- <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Observação</th>
                        <th>Situação</th>
                        <th>Prazo de Conclusão</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                    </tr>
                </thead> -->
                <tbody>
                    <tr>
                    <th>Descrição</th>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "descricao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Observação</th>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "observacao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Situação</th>
                    <td>";
            // line 45
            if ($this->getAttribute($context["tarefa"], "situacao", array())) {
                echo "Concluída";
            } else {
                echo "Pendente";
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Prazo de Conclusão</th>
                    <td>";
            // line 50
            if ($this->getAttribute($context["tarefa"], "pzconclusao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "pzconclusao", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Criado</th>
                    <td>";
            // line 55
            if ($this->getAttribute($context["tarefa"], "criadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "criadoEm", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Atualizado</th>
                    <td>";
            // line 60
            if ($this->getAttribute($context["tarefa"], "atualizadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "atualizadoEm", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"><small>Mostrar</small></a>
                        <a class=\"btn btn-primary\" href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_edit", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"><small>Editar</small></a>

                    </td>
                </tr>

            </tbody>
        </table>
    </div><!-- /.box-body -->
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarefa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
    <a class=\"btn btn-success\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\">Criar nova Tarefa</a>



";
        
        $__internal_cd0371938f91d766f9fcd2bbcae44d1db236dba2edec39322c9454de3f00958c->leave($__internal_cd0371938f91d766f9fcd2bbcae44d1db236dba2edec39322c9454de3f00958c_prof);

    }

    public function getTemplateName()
    {
        return "tarefa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 76,  199 => 75,  183 => 65,  179 => 64,  170 => 60,  160 => 55,  150 => 50,  138 => 45,  130 => 40,  122 => 35,  100 => 16,  91 => 12,  87 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
{% block page_subtitle %} Página Principal {% endblock %}

{% block page_content %}
    <!-- <h1>Tarefas list</h1> -->

        {% for tarefa in tarefas %}
            <div class=\"box box-solid box-success\">
              <div class=\"box-header with-border\">
                  <h3 class=\"box-title\"><a href=\"{{ path('tarefa_show', { 'id': tarefa.id }) }}\">{{ tarefa.titulo }}</a></h3>
                  <div class=\"box-tools pull-right\">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class=\"label label-default\">Lista: {{ tarefa.lista }}</span>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->

            <div class=\"box-body\">
            <table>
                <!-- <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Observação</th>
                        <th>Situação</th>
                        <th>Prazo de Conclusão</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                    </tr>
                </thead> -->
                <tbody>
                    <tr>
                    <th>Descrição</th>
                    <td>{{ tarefa.descricao }}</td>
                    </tr>

                    <tr>
                    <th>Observação</th>
                    <td>{{ tarefa.observacao }}</td>
                    </tr>

                    <tr>
                    <th>Situação</th>
                    <td>{% if tarefa.situacao %}Concluída{% else %}Pendente{% endif %}</td>
                    </tr>

                    <tr>
                    <th>Prazo de Conclusão</th>
                    <td>{% if tarefa.pzconclusao %}{{ tarefa.pzconclusao|date('Y-m-d H:i:s') }}{% endif %}</td>
                    </tr>

                    <tr>
                    <th>Criado</th>
                    <td>{% if tarefa.criadoEm %}{{ tarefa.criadoEm|date('Y-m-d H:i:s') }}{% endif %}</td>
                    </tr>

                    <tr>
                    <th>Atualizado</th>
                    <td>{% if tarefa.atualizadoEm %}{{ tarefa.atualizadoEm|date('Y-m-d H:i:s') }}{% endif %}</td>
                    </tr>

                    <td>
                        <a class=\"btn btn-primary\" href=\"{{ path('tarefa_show', { 'id': tarefa.id }) }}\"><small>Mostrar</small></a>
                        <a class=\"btn btn-primary\" href=\"{{ path('tarefa_edit', { 'id': tarefa.id }) }}\"><small>Editar</small></a>

                    </td>
                </tr>

            </tbody>
        </table>
    </div><!-- /.box-body -->
    </div>
    {% endfor %}

    <a class=\"btn btn-success\" href=\"{{ path('tarefa_new') }}\">Criar nova Tarefa</a>



{% endblock %}
", "tarefa/index.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/index.html.twig");
    }
}
