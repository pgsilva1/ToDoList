<?php

/* tarefa/index.html.twig */
class __TwigTemplate_38c29ccbc8cfdc3103a66db3b0d78211034223b8f88bf82308b4b08c0fccac89 extends Twig_Template
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
        $__internal_965ddce9ec5a1165cd7092a95381778d44e12e321e15c492b3b04ba3f30cefc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965ddce9ec5a1165cd7092a95381778d44e12e321e15c492b3b04ba3f30cefc1->enter($__internal_965ddce9ec5a1165cd7092a95381778d44e12e321e15c492b3b04ba3f30cefc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965ddce9ec5a1165cd7092a95381778d44e12e321e15c492b3b04ba3f30cefc1->leave($__internal_965ddce9ec5a1165cd7092a95381778d44e12e321e15c492b3b04ba3f30cefc1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf1b9375e05eda1df33817e56d7d34831df3111153a3cb05ebe77633d5b4d27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1b9375e05eda1df33817e56d7d34831df3111153a3cb05ebe77633d5b4d27d->enter($__internal_bf1b9375e05eda1df33817e56d7d34831df3111153a3cb05ebe77633d5b4d27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_bf1b9375e05eda1df33817e56d7d34831df3111153a3cb05ebe77633d5b4d27d->leave($__internal_bf1b9375e05eda1df33817e56d7d34831df3111153a3cb05ebe77633d5b4d27d_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_72f188a9178e1087fe6a4a1dce11bc7c3b1aeeb0bd775a15127d241548ce890d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f188a9178e1087fe6a4a1dce11bc7c3b1aeeb0bd775a15127d241548ce890d->enter($__internal_72f188a9178e1087fe6a4a1dce11bc7c3b1aeeb0bd775a15127d241548ce890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_72f188a9178e1087fe6a4a1dce11bc7c3b1aeeb0bd775a15127d241548ce890d->leave($__internal_72f188a9178e1087fe6a4a1dce11bc7c3b1aeeb0bd775a15127d241548ce890d_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4591ad73f35d245b57c8ac9bbc2dbd1e79a12ade7b73a1620e81155e4bd30fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4591ad73f35d245b57c8ac9bbc2dbd1e79a12ade7b73a1620e81155e4bd30fba->enter($__internal_4591ad73f35d245b57c8ac9bbc2dbd1e79a12ade7b73a1620e81155e4bd30fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_4591ad73f35d245b57c8ac9bbc2dbd1e79a12ade7b73a1620e81155e4bd30fba->leave($__internal_4591ad73f35d245b57c8ac9bbc2dbd1e79a12ade7b73a1620e81155e4bd30fba_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5d40ba3ee6815c8a1fb8934ccd1d8541e6d3bef7c79cf3ce669804d23412f183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d40ba3ee6815c8a1fb8934ccd1d8541e6d3bef7c79cf3ce669804d23412f183->enter($__internal_5d40ba3ee6815c8a1fb8934ccd1d8541e6d3bef7c79cf3ce669804d23412f183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "
<!-- TO DO List -->
      <div class=\"box box-primary\">
        <div class=\"box-header\">
          <i class=\"ion ion-clipboard\"></i>

          <h3 class=\"box-title\">To Do List</h3>

        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <ul class=\"todo-list\">

            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? $this->getContext($context, "tarefas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
            // line 21
            echo "              <li>
                    <span class=\"handle\">
                      <i class=\"fa fa-ellipsis-v\"></i>
                      <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                <input type=\"checkbox\" value=\"\">
                <span class=\"text\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "titulo", array()), "html", null, true);
            echo "</span>
                <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                <div class=\"tools\">
                  <i class=\"fa fa-edit\"></i>
                  <i class=\"fa fa-trash-o\"></i>
                </div>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tarefa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
          </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
          <button type=\"button\" class=\"btn btn-default pull-right\" href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
      </div>
    <!-- <h1>Tarefas list</h1> -->

        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? $this->getContext($context, "tarefas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
            // line 46
            echo "            <div class=\"box box-solid box-primary\">
              <div class=\"box-header with-border\">
                  <h3 class=\"box-title\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "titulo", array()), "html", null, true);
            echo "</a></h3>
                  <div class=\"box-tools pull-right\">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class=\"label label-default\">Lista: ";
            // line 52
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
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "descricao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Observação</th>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "observacao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Situação</th>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('TodoList\CoreBundle\Twig\AppExtension')->situacaoFilter($this->getAttribute($context["tarefa"], "situacao", array())), "html", null, true);
            echo " </td>
                    </tr>

                    <tr>
                    <th>Prazo de Conclusão</th>
                    <td>";
            // line 86
            if ($this->getAttribute($context["tarefa"], "pzconclusao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "pzconclusao", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Criado</th>
                    <td>";
            // line 91
            if ($this->getAttribute($context["tarefa"], "criadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "criadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Atualizado</th>
                    <td>";
            // line 96
            if ($this->getAttribute($context["tarefa"], "atualizadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "atualizadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"><small>Mostrar</small></a>
                        <a class=\"btn btn-primary\" href=\"";
            // line 101
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
        // line 111
        echo "
    <a class=\"btn btn-success\" href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\">Criar nova Tarefa</a>



";
        
        $__internal_5d40ba3ee6815c8a1fb8934ccd1d8541e6d3bef7c79cf3ce669804d23412f183->leave($__internal_5d40ba3ee6815c8a1fb8934ccd1d8541e6d3bef7c79cf3ce669804d23412f183_prof);

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
        return array (  250 => 112,  247 => 111,  231 => 101,  227 => 100,  218 => 96,  208 => 91,  198 => 86,  190 => 81,  182 => 76,  174 => 71,  152 => 52,  143 => 48,  139 => 46,  135 => 45,  127 => 40,  120 => 35,  106 => 27,  98 => 21,  94 => 20,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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

<!-- TO DO List -->
      <div class=\"box box-primary\">
        <div class=\"box-header\">
          <i class=\"ion ion-clipboard\"></i>

          <h3 class=\"box-title\">To Do List</h3>

        </div>
        <!-- /.box-header -->
        <div class=\"box-body\">
          <ul class=\"todo-list\">

            {% for tarefa in tarefas %}
              <li>
                    <span class=\"handle\">
                      <i class=\"fa fa-ellipsis-v\"></i>
                      <i class=\"fa fa-ellipsis-v\"></i>
                    </span>
                <input type=\"checkbox\" value=\"\">
                <span class=\"text\">{{ tarefa.titulo }}</span>
                <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                <div class=\"tools\">
                  <i class=\"fa fa-edit\"></i>
                  <i class=\"fa fa-trash-o\"></i>
                </div>
              </li>
            {% endfor %}

          </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
          <button type=\"button\" class=\"btn btn-default pull-right\" href=\"{{ path('tarefa_new') }}\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
      </div>
    <!-- <h1>Tarefas list</h1> -->

        {% for tarefa in tarefas %}
            <div class=\"box box-solid box-primary\">
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
                    <td>{{ tarefa.situacao|situacao_show }} </td>
                    </tr>

                    <tr>
                    <th>Prazo de Conclusão</th>
                    <td>{% if tarefa.pzconclusao %}{{ tarefa.pzconclusao|date('d/m/Y H:i:s') }}{% endif %}</td>
                    </tr>

                    <tr>
                    <th>Criado</th>
                    <td>{% if tarefa.criadoEm %}{{ tarefa.criadoEm|date('d/m/Y H:i:s') }}{% endif %}</td>
                    </tr>

                    <tr>
                    <th>Atualizado</th>
                    <td>{% if tarefa.atualizadoEm %}{{ tarefa.atualizadoEm|date('d/m/Y H:i:s') }}{% endif %}</td>
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
