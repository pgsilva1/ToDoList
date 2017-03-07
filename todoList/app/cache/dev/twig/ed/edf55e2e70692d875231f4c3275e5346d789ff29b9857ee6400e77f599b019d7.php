<?php

/* AvanzuAdminThemeBundle:Default:form.html.twig */
class __TwigTemplate_38f57be90574e3341a431c8273dbb7b76d1c06b423cedda81f416a57036de458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "AvanzuAdminThemeBundle:Default:form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11840e31736abc0ed7915790ffc34324b212956466f870953890d7720d164ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11840e31736abc0ed7915790ffc34324b212956466f870953890d7720d164ad2->enter($__internal_11840e31736abc0ed7915790ffc34324b212956466f870953890d7720d164ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Default:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11840e31736abc0ed7915790ffc34324b212956466f870953890d7720d164ad2->leave($__internal_11840e31736abc0ed7915790ffc34324b212956466f870953890d7720d164ad2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b7e5afacb2d0daed0dff45accc05e0a481571e2daa7221bab091485f83e5b7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e5afacb2d0daed0dff45accc05e0a481571e2daa7221bab091485f83e5b7ac->enter($__internal_b7e5afacb2d0daed0dff45accc05e0a481571e2daa7221bab091485f83e5b7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["macro"] ?? $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_b7e5afacb2d0daed0dff45accc05e0a481571e2daa7221bab091485f83e5b7ac->leave($__internal_b7e5afacb2d0daed0dff45accc05e0a481571e2daa7221bab091485f83e5b7ac_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_23fcd47e11c97a8ec3ff2c036e5947c1eb2c18cf02b3336a769437e107ea5de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fcd47e11c97a8ec3ff2c036e5947c1eb2c18cf02b3336a769437e107ea5de3->enter($__internal_23fcd47e11c97a8ec3ff2c036e5947c1eb2c18cf02b3336a769437e107ea5de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_23fcd47e11c97a8ec3ff2c036e5947c1eb2c18cf02b3336a769437e107ea5de3->leave($__internal_23fcd47e11c97a8ec3ff2c036e5947c1eb2c18cf02b3336a769437e107ea5de3_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_b07b6f6177337fa907c86a2d1f3daf78cccf0bb0c99f0224b5f6f4c49ac190b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07b6f6177337fa907c86a2d1f3daf78cccf0bb0c99f0224b5f6f4c49ac190b4->enter($__internal_b07b6f6177337fa907c86a2d1f3daf78cccf0bb0c99f0224b5f6f4c49ac190b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_b07b6f6177337fa907c86a2d1f3daf78cccf0bb0c99f0224b5f6f4c49ac190b4->leave($__internal_b07b6f6177337fa907c86a2d1f3daf78cccf0bb0c99f0224b5f6f4c49ac190b4_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 52,  100 => 51,  83 => 40,  66 => 26,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "AvanzuAdminThemeBundle:Default:form.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/avanzu/admin-theme-bundle/Resources/views/Default/form.html.twig");
    }
}
