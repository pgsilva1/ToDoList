<?php

/* :tarefa:index.html.twig */
class __TwigTemplate_4b26dfb4def4dd96682f1d3daa1913eef8b218362d757727b1ab0cf0c4afabdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tarefa:index.html.twig", 1);
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
        $__internal_25c3e3a452e9c4976e3b5d04d7575289c1565eda4fe04e2dc444a80d0bdd821d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c3e3a452e9c4976e3b5d04d7575289c1565eda4fe04e2dc444a80d0bdd821d->enter($__internal_25c3e3a452e9c4976e3b5d04d7575289c1565eda4fe04e2dc444a80d0bdd821d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tarefa:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c3e3a452e9c4976e3b5d04d7575289c1565eda4fe04e2dc444a80d0bdd821d->leave($__internal_25c3e3a452e9c4976e3b5d04d7575289c1565eda4fe04e2dc444a80d0bdd821d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eacc88eac9a7dd3c483b9380f21684a9d61b6c512edb964ece3d5c60c359bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacc88eac9a7dd3c483b9380f21684a9d61b6c512edb964ece3d5c60c359bd26->enter($__internal_eacc88eac9a7dd3c483b9380f21684a9d61b6c512edb964ece3d5c60c359bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tarefas - TODO List";
        
        $__internal_eacc88eac9a7dd3c483b9380f21684a9d61b6c512edb964ece3d5c60c359bd26->leave($__internal_eacc88eac9a7dd3c483b9380f21684a9d61b6c512edb964ece3d5c60c359bd26_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_60c377f83cc615b4533a001135cc1af2169fa9fe5bfc3d162b6225d61a1ac0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c377f83cc615b4533a001135cc1af2169fa9fe5bfc3d162b6225d61a1ac0e9->enter($__internal_60c377f83cc615b4533a001135cc1af2169fa9fe5bfc3d162b6225d61a1ac0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Tarefas ";
        
        $__internal_60c377f83cc615b4533a001135cc1af2169fa9fe5bfc3d162b6225d61a1ac0e9->leave($__internal_60c377f83cc615b4533a001135cc1af2169fa9fe5bfc3d162b6225d61a1ac0e9_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_71ba7b8bc0be604a19fe794908ea785807647d89983b06c7be84744992800d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ba7b8bc0be604a19fe794908ea785807647d89983b06c7be84744992800d3a->enter($__internal_71ba7b8bc0be604a19fe794908ea785807647d89983b06c7be84744992800d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " Página Principal ";
        
        $__internal_71ba7b8bc0be604a19fe794908ea785807647d89983b06c7be84744992800d3a->leave($__internal_71ba7b8bc0be604a19fe794908ea785807647d89983b06c7be84744992800d3a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_60d9abd95c5c78e3c2c25f352507607dd350f7665e12733d6a9b990f30c623c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d9abd95c5c78e3c2c25f352507607dd350f7665e12733d6a9b990f30c623c4->enter($__internal_60d9abd95c5c78e3c2c25f352507607dd350f7665e12733d6a9b990f30c623c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Observação</th>
                        <th>Situação</th>
                        <th>Prazo de Conclusão</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "descricao", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tarefa"], "observacao", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            if ($this->getAttribute($context["tarefa"], "situacao", array())) {
                echo "Concluída";
            } else {
                echo "Pendente";
            }
            echo "</td>
                    <td>";
            // line 37
            if ($this->getAttribute($context["tarefa"], "pzconclusao", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "pzconclusao", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 38
            if ($this->getAttribute($context["tarefa"], "criadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "criadoEm", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 39
            if ($this->getAttribute($context["tarefa"], "atualizadoEm", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tarefa"], "atualizadoEm", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <a class=\"btn btn-primary\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_show", array("id" => $this->getAttribute($context["tarefa"], "id", array()))), "html", null, true);
            echo "\"><small>Mostrar</small></a>
                        <a class=\"btn btn-primary\" href=\"";
            // line 42
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
        // line 52
        echo "
    <a class=\"btn btn-success\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tarefa_new");
        echo "\">Criar nova Tarefa</a>



";
        
        $__internal_60d9abd95c5c78e3c2c25f352507607dd350f7665e12733d6a9b990f30c623c4->leave($__internal_60d9abd95c5c78e3c2c25f352507607dd350f7665e12733d6a9b990f30c623c4_prof);

    }

    public function getTemplateName()
    {
        return ":tarefa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 53,  176 => 52,  160 => 42,  156 => 41,  149 => 39,  143 => 38,  137 => 37,  129 => 36,  125 => 35,  121 => 34,  100 => 16,  91 => 12,  87 => 10,  83 => 9,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
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
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Observação</th>
                        <th>Situação</th>
                        <th>Prazo de Conclusão</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ tarefa.descricao }}</td>
                    <td>{{ tarefa.observacao }}</td>
                    <td>{% if tarefa.situacao %}Concluída{% else %}Pendente{% endif %}</td>
                    <td>{% if tarefa.pzconclusao %}{{ tarefa.pzconclusao|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if tarefa.criadoEm %}{{ tarefa.criadoEm|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{% if tarefa.atualizadoEm %}{{ tarefa.atualizadoEm|date('Y-m-d H:i:s') }}{% endif %}</td>
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
", ":tarefa:index.html.twig", "/home/desenvolvimento/Projetos/todoList/app/Resources/views/tarefa/index.html.twig");
    }
}
