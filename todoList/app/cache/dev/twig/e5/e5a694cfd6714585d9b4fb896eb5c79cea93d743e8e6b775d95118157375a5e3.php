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
        $__internal_7ba5add4c3925d13ddee0d062fad591e568f906f2db104c74a2367d203f33788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba5add4c3925d13ddee0d062fad591e568f906f2db104c74a2367d203f33788->enter($__internal_7ba5add4c3925d13ddee0d062fad591e568f906f2db104c74a2367d203f33788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tarefa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba5add4c3925d13ddee0d062fad591e568f906f2db104c74a2367d203f33788->leave($__internal_7ba5add4c3925d13ddee0d062fad591e568f906f2db104c74a2367d203f33788_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d956a403621e249e8d14ab0f1055c4500269b5943c14a7aadef6b5439dabed3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d956a403621e249e8d14ab0f1055c4500269b5943c14a7aadef6b5439dabed3f->enter($__internal_d956a403621e249e8d14ab0f1055c4500269b5943c14a7aadef6b5439dabed3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_d956a403621e249e8d14ab0f1055c4500269b5943c14a7aadef6b5439dabed3f->leave($__internal_d956a403621e249e8d14ab0f1055c4500269b5943c14a7aadef6b5439dabed3f_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e706bee10d0633bbc55bcab8d1b98e1d8dcf1ee5e1769af611067e2f481b1cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e706bee10d0633bbc55bcab8d1b98e1d8dcf1ee5e1769af611067e2f481b1cd1->enter($__internal_e706bee10d0633bbc55bcab8d1b98e1d8dcf1ee5e1769af611067e2f481b1cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_e706bee10d0633bbc55bcab8d1b98e1d8dcf1ee5e1769af611067e2f481b1cd1->leave($__internal_e706bee10d0633bbc55bcab8d1b98e1d8dcf1ee5e1769af611067e2f481b1cd1_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1dd963538a3e6fe4f1cf72d42c3cd99a1117b86e57851739e6ac1c943577321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd963538a3e6fe4f1cf72d42c3cd99a1117b86e57851739e6ac1c943577321b->enter($__internal_1dd963538a3e6fe4f1cf72d42c3cd99a1117b86e57851739e6ac1c943577321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_1dd963538a3e6fe4f1cf72d42c3cd99a1117b86e57851739e6ac1c943577321b->leave($__internal_1dd963538a3e6fe4f1cf72d42c3cd99a1117b86e57851739e6ac1c943577321b_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7e40e0a355aed831cbf888ec07d3302f650921ce6bd396cf79cce2b3a6348104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e40e0a355aed831cbf888ec07d3302f650921ce6bd396cf79cce2b3a6348104->enter($__internal_7e40e0a355aed831cbf888ec07d3302f650921ce6bd396cf79cce2b3a6348104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <!-- <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small> -->
                <div class=\"tools\">
                  <i class=\"fa fa-edit\" ><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\">  </a><small>Editar</small> </i>
                  <i class=\"fa fa-eye\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_edit", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"> </a><small>Mostrar</small> </i>
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
          <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
      </div>
    <!-- <h1>Tarefas list</h1> -->
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tarefas"] ?? $this->getContext($context, "tarefas")));
        foreach ($context['_seq'] as $context["_key"] => $context["tarefa"]) {
            // line 45
            echo "            <div class=\"box box-solid box-primary\">
              <div class=\"box-header with-border\">
                  <h3 class=\"box-title\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "titulo", array()), "html", null, true);
            echo "</a></h3>
                  <div class=\"box-tools pull-right\">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <span class=\"label label-default\">Lista: ";
            // line 51
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
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "descricao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Observação</th>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "observacao", array()), "html", null, true);
            echo "</td>
                    </tr>

                    <tr>
                    <th>Situação</th>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('TodoList\CoreBundle\Twig\AppExtension')->situacaoFilter($this->getAttribute($context["tarefa"], "situacao", array())), "html", null, true);
            echo " </td>
                    </tr>

                    <tr>
                    <th>Prazo de Conclusão</th>
                    <td>";
            // line 85
            if ($this->getAttribute($context["tarefa"], "pzconclusao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "pzconclusao", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Criado</th>
                    <td>";
            // line 90
            if ($this->getAttribute($context["tarefa"], "criadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "criadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <tr>
                    <th>Atualizado</th>
                    <td>";
            // line 95
            if ($this->getAttribute($context["tarefa"], "atualizadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "atualizadoEm", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    </tr>

                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"><small>Mostrar</small></a>
                        <a class=\"btn btn-primary\" href=\"";
            // line 100
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
        // line 110
        echo "
    <a class=\"btn btn-success\" href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\">Criar nova Tarefa</a>



";
        
        $__internal_7e40e0a355aed831cbf888ec07d3302f650921ce6bd396cf79cce2b3a6348104->leave($__internal_7e40e0a355aed831cbf888ec07d3302f650921ce6bd396cf79cce2b3a6348104_prof);

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
        return array (  252 => 111,  249 => 110,  233 => 100,  229 => 99,  220 => 95,  210 => 90,  200 => 85,  192 => 80,  184 => 75,  176 => 70,  154 => 51,  145 => 47,  141 => 45,  137 => 44,  126 => 35,  116 => 31,  112 => 30,  106 => 27,  98 => 21,  94 => 20,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
                <!-- <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small> -->
                <div class=\"tools\">
                  <i class=\"fa fa-edit\" ><a href=\"{{ path('tarefa_show', { 'id': tarefa.id }) }}\">  </a><small>Editar</small> </i>
                  <i class=\"fa fa-eye\"><a href=\"{{ path('tarefa_edit', { 'id': tarefa.id }) }}\"> </a><small>Mostrar</small> </i>
                </div>
              </li>
            {% endfor %}

          </ul>
        </div>
        <!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
          <button type=\"button\" class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
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
