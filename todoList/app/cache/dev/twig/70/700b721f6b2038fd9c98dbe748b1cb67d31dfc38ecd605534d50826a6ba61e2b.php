<?php

/* AvanzuAdminThemeBundle:layout:form-theme.html.twig */
class __TwigTemplate_303d6ebd678de2d31cb482b9dd48b59d0ad96464ee4401d4a053d0c42adf33b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", 1);
        $this->blocks = array(
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_984122545fa29e63304c6537944a70161703a6b349aeb8f7e8e067de7a79a78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984122545fa29e63304c6537944a70161703a6b349aeb8f7e8e067de7a79a78a->enter($__internal_984122545fa29e63304c6537944a70161703a6b349aeb8f7e8e067de7a79a78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:form-theme.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984122545fa29e63304c6537944a70161703a6b349aeb8f7e8e067de7a79a78a->leave($__internal_984122545fa29e63304c6537944a70161703a6b349aeb8f7e8e067de7a79a78a_prof);

    }

    // line 3
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_38bc363d42bdec57a6e76eeffc9d00bf58505052aa6737631c6712059ee67e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bc363d42bdec57a6e76eeffc9d00bf58505052aa6737631c6712059ee67e44->enter($__internal_38bc363d42bdec57a6e76eeffc9d00bf58505052aa6737631c6712059ee67e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 4
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 5
        echo "
    ";
        // line 6
        if (twig_in_filter("checkbox", ($context["types"] ?? $this->getContext($context, "types")))) {
            // line 7
            echo "        ";
            $context["_class"] = " checkbox";
            // line 8
            echo "    ";
        } elseif (twig_in_filter("radio", ($context["types"] ?? $this->getContext($context, "types")))) {
            // line 9
            echo "        ";
            $context["_class"] = " radio";
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        ";
            $context["_class"] = " form-control";
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . ($context["_class"] ?? $this->getContext($context, "_class")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["class"] = ($context["_class"] ?? $this->getContext($context, "_class"));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class"))));
        // line 20
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_38bc363d42bdec57a6e76eeffc9d00bf58505052aa6737631c6712059ee67e44->leave($__internal_38bc363d42bdec57a6e76eeffc9d00bf58505052aa6737631c6712059ee67e44_prof);

    }

    // line 23
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8b7a0f0e671cee259c24ee75b043a8b72dbc53c0435206e03f23094bcca9340e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7a0f0e671cee259c24ee75b043a8b72dbc53c0435206e03f23094bcca9340e->enter($__internal_8b7a0f0e671cee259c24ee75b043a8b72dbc53c0435206e03f23094bcca9340e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 27
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8b7a0f0e671cee259c24ee75b043a8b72dbc53c0435206e03f23094bcca9340e->leave($__internal_8b7a0f0e671cee259c24ee75b043a8b72dbc53c0435206e03f23094bcca9340e_prof);

    }

    // line 33
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_04b94737cde9bf2efff22864c241baf25ed49311bba4a99598ec00430477c54c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b94737cde9bf2efff22864c241baf25ed49311bba4a99598ec00430477c54c->enter($__internal_04b94737cde9bf2efff22864c241baf25ed49311bba4a99598ec00430477c54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 34
        echo "    ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => "form-control"));
        // line 35
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_04b94737cde9bf2efff22864c241baf25ed49311bba4a99598ec00430477c54c->leave($__internal_04b94737cde9bf2efff22864c241baf25ed49311bba4a99598ec00430477c54c_prof);

    }

    // line 38
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_443b85770cce277d4b0a198930ab5703e85d41da32719fff445090369a365a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443b85770cce277d4b0a198930ab5703e85d41da32719fff445090369a365a64->enter($__internal_443b85770cce277d4b0a198930ab5703e85d41da32719fff445090369a365a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 39
        echo "    <div class=\"checkbox\">
        ";
        // line 40
        ob_start();
        // line 41
        echo "            ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 42
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            // line 43
            echo "            ";
        }
        // line 44
        echo "            ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 45
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 46
            echo "            ";
        }
        // line 47
        echo "            ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 48
            echo "                ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 49
            echo "            ";
        }
        // line 50
        echo "
            <label";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"checkbox\" ";
        // line 52
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 53
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 54
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 56
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 58
        echo "    </div>
";
        
        $__internal_443b85770cce277d4b0a198930ab5703e85d41da32719fff445090369a365a64->leave($__internal_443b85770cce277d4b0a198930ab5703e85d41da32719fff445090369a365a64_prof);

    }

    // line 61
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_91f56a87653dae4b5b40407fe1e3a5066b36685a5b67cba64a09f60e29e0e882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f56a87653dae4b5b40407fe1e3a5066b36685a5b67cba64a09f60e29e0e882->enter($__internal_91f56a87653dae4b5b40407fe1e3a5066b36685a5b67cba64a09f60e29e0e882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 62
        echo "    <div class=\"radio\">
        ";
        // line 63
        ob_start();
        // line 64
        echo "            ";
        if ( !($context["compound"] ?? $this->getContext($context, "compound"))) {
            // line 65
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
            // line 66
            echo "            ";
        }
        // line 67
        echo "            ";
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 68
            echo "                ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 69
            echo "            ";
        }
        // line 70
        echo "            ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 71
            echo "                ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 72
            echo "            ";
        }
        // line 73
        echo "            <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            <input type=\"radio\" ";
        // line 74
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
            ";
        // line 75
        if ( !(($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 76
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            ";
        }
        // line 78
        echo "            </label>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 80
        echo "    </div>
";
        
        $__internal_91f56a87653dae4b5b40407fe1e3a5066b36685a5b67cba64a09f60e29e0e882->leave($__internal_91f56a87653dae4b5b40407fe1e3a5066b36685a5b67cba64a09f60e29e0e882_prof);

    }

    // line 83
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f6ca447d729f66b4a827c120c2754cbfbb1534a7377f7c136b0bc096659805f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ca447d729f66b4a827c120c2754cbfbb1534a7377f7c136b0bc096659805f9->enter($__internal_f6ca447d729f66b4a827c120c2754cbfbb1534a7377f7c136b0bc096659805f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 84
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            echo "        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            ";
            // line 90
            if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                // line 91
                echo "                ";
                $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 92
                echo "            ";
            } else {
                // line 93
                echo "                ";
                $context["class"] = " timepicker";
                // line 94
                echo "            ";
            }
            // line 95
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class")), "data-datepicker" => "on"));
            // line 96
            echo "
            ";
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 100
            echo "        ";
            $context["date_pattern"] = (("<div class=\"row\">" . ($context["date_pattern"] ?? $this->getContext($context, "date_pattern"))) . "</div>");
            // line 101
            echo "        ";
            echo twig_replace_filter(twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => "<div class=\"col-xs-4\">{{ year }}</div>", "{{ month }}" => "<div class=\"col-xs-4\">{{ month }}</div>", "{{ day }}" => "<div class=\"col-xs-4\">{{ day }}</div>")), array("{{ year }}" =>             // line 106
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 107
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 108
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 109
            echo "

    ";
        }
        
        $__internal_f6ca447d729f66b4a827c120c2754cbfbb1534a7377f7c136b0bc096659805f9->leave($__internal_f6ca447d729f66b4a827c120c2754cbfbb1534a7377f7c136b0bc096659805f9_prof);

    }

    // line 114
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b9cf6ef01599c664ca2640c331b532ced0c6f8c8805e39cf6fbd82f76e43b1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cf6ef01599c664ca2640c331b532ced0c6f8c8805e39cf6fbd82f76e43b1ca->enter($__internal_b9cf6ef01599c664ca2640c331b532ced0c6f8c8805e39cf6fbd82f76e43b1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 115
        echo "    ";
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 116
            echo "        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                ";
            // line 118
            if ($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) {
                // line 119
                echo "                    ";
                $context["class"] = ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "class", array()) . " timepicker");
                // line 120
                echo "                ";
            } else {
                // line 121
                echo "                    ";
                $context["class"] = " timepicker";
                // line 122
                echo "                ";
            }
            // line 123
            echo "                ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => ($context["class"] ?? $this->getContext($context, "class")), "data-timepicker" => "on"));
            // line 124
            echo "                ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 131
            echo "        ";
            $this->displayParentBlock("time_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_b9cf6ef01599c664ca2640c331b532ced0c6f8c8805e39cf6fbd82f76e43b1ca->leave($__internal_b9cf6ef01599c664ca2640c331b532ced0c6f8c8805e39cf6fbd82f76e43b1ca_prof);

    }

    // line 135
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f01daf2f7fa24792ea39c6f6fac3be12c473b695b50ca6cfa2443cf8bb5c030f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01daf2f7fa24792ea39c6f6fac3be12c473b695b50ca6cfa2443cf8bb5c030f->enter($__internal_f01daf2f7fa24792ea39c6f6fac3be12c473b695b50ca6cfa2443cf8bb5c030f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 136
        echo "    ";
        $context["types"] = $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "block_prefixes", array());
        // line 137
        echo "    ";
        if ((twig_in_filter("checkbox", ($context["types"] ?? $this->getContext($context, "types"))) || twig_in_filter("radio", ($context["types"] ?? $this->getContext($context, "types"))))) {
            // line 138
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 139
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        } else {
            // line 143
            echo "        <div class=\"form-group ";
            echo (((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) ? ("has-error has-feedback") : (""));
            echo "\">
            ";
            // line 144
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            echo "
            ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
            ";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        
        $__internal_f01daf2f7fa24792ea39c6f6fac3be12c473b695b50ca6cfa2443cf8bb5c030f->leave($__internal_f01daf2f7fa24792ea39c6f6fac3be12c473b695b50ca6cfa2443cf8bb5c030f_prof);

    }

    // line 151
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7a68032a2848a4d21a16ca5f6ec094a843703953fed2687ed5b43c69e774355e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a68032a2848a4d21a16ca5f6ec094a843703953fed2687ed5b43c69e774355e->enter($__internal_7a68032a2848a4d21a16ca5f6ec094a843703953fed2687ed5b43c69e774355e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 152
        echo "
    ";
        // line 153
        if (array_key_exists("help", $context)) {
            // line 154
            echo "        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\"><i class=\"fa fa-question-circle\"></i></a>
    ";
        }
        // line 156
        echo "
    ";
        // line 157
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
    ";
        // line 158
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 159
            echo "        <span class=\"required\" title=\"Dies ist ein Pflichtfeld\">*</span>
    ";
        }
        // line 161
        echo "
";
        
        $__internal_7a68032a2848a4d21a16ca5f6ec094a843703953fed2687ed5b43c69e774355e->leave($__internal_7a68032a2848a4d21a16ca5f6ec094a843703953fed2687ed5b43c69e774355e_prof);

    }

    // line 164
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d89279e6e86b39e2a18152863bd74c0e1c354997c482174e7db6d598a89f1b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89279e6e86b39e2a18152863bd74c0e1c354997c482174e7db6d598a89f1b90->enter($__internal_d89279e6e86b39e2a18152863bd74c0e1c354997c482174e7db6d598a89f1b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 165
        echo "    ";
        ob_start();
        // line 166
        echo "        ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 167
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 169
                echo "                    <li class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "            </ul>
        ";
        }
        // line 173
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d89279e6e86b39e2a18152863bd74c0e1c354997c482174e7db6d598a89f1b90->leave($__internal_d89279e6e86b39e2a18152863bd74c0e1c354997c482174e7db6d598a89f1b90_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:form-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 173,  564 => 171,  555 => 169,  551 => 168,  548 => 167,  545 => 166,  542 => 165,  536 => 164,  528 => 161,  524 => 159,  522 => 158,  518 => 157,  515 => 156,  509 => 154,  507 => 153,  504 => 152,  498 => 151,  487 => 146,  483 => 145,  479 => 144,  474 => 143,  468 => 140,  464 => 139,  459 => 138,  456 => 137,  453 => 136,  447 => 135,  436 => 131,  425 => 124,  422 => 123,  419 => 122,  416 => 121,  413 => 120,  410 => 119,  408 => 118,  404 => 116,  401 => 115,  395 => 114,  385 => 109,  383 => 108,  382 => 107,  381 => 106,  379 => 101,  376 => 100,  370 => 97,  367 => 96,  364 => 95,  361 => 94,  358 => 93,  355 => 92,  352 => 91,  350 => 90,  343 => 85,  340 => 84,  334 => 83,  326 => 80,  322 => 78,  316 => 76,  314 => 75,  302 => 74,  286 => 73,  283 => 72,  280 => 71,  277 => 70,  274 => 69,  271 => 68,  268 => 67,  265 => 66,  262 => 65,  259 => 64,  257 => 63,  254 => 62,  248 => 61,  240 => 58,  236 => 56,  230 => 54,  228 => 53,  216 => 52,  201 => 51,  198 => 50,  195 => 49,  192 => 48,  189 => 47,  186 => 46,  183 => 45,  180 => 44,  177 => 43,  174 => 42,  171 => 41,  169 => 40,  166 => 39,  160 => 38,  150 => 35,  147 => 34,  141 => 33,  132 => 29,  123 => 27,  119 => 26,  114 => 25,  111 => 24,  105 => 23,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'form_div_layout.html.twig' %}

{% block widget_attributes %}
    {% set types = form.vars.block_prefixes %}

    {% if 'checkbox' in types %}
        {% set _class = ' checkbox' %}
    {% elseif 'radio' in types%}
        {% set _class = ' radio' %}
    {% else %}
        {% set _class = ' form-control' %}
    {% endif %}

    {% if attr.class is defined %}
        {% set class = attr.class ~ _class %}
    {% else %}
        {% set class = _class %}
    {% endif %}
    {% set attr = attr|merge({'class' : class}) %}
    {{ parent () }}
{% endblock widget_attributes %}

{% block choice_widget_expanded %}
    {% spaceless %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child) }}
            {% endfor %}
        </div>
    {% endspaceless %}
{% endblock choice_widget_expanded %}

{% block choice_widget_collapsed %}
    {% set attr = attr|merge({'class' : 'form-control'}) %}
    {{ parent() }}
{% endblock %}

{% block checkbox_widget %}
    <div class=\"checkbox\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}

            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock checkbox_widget %}

{% block radio_widget %}
    <div class=\"radio\">
        {% spaceless %}
            {% if not compound %}
                {% set label_attr = label_attr|merge({'for': id}) %}
            {% endif %}
            {% if required %}
                {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
            {% endif %}
            {% if label is empty %}
                {% set label = name|humanize %}
            {% endif %}
            <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
            {% if label is not same as(false) %}
                {{ label|trans({}, translation_domain) }}
            {% endif %}
            </label>
        {% endspaceless %}
    </div>
{% endblock radio_widget %}

{% block date_widget %}
    {% if widget == 'single_text' %}
        <div class=\"input-group\">
            <div class=\"input-group-addon\">
                <i class=\"fa fa-calendar\"></i>
            </div>

            {% if attr.class is defined %}
                {% set class = attr.class ~ ' timepicker' %}
            {% else %}
                {% set class = ' timepicker' %}
            {% endif %}
            {% set attr = attr|merge({'class' : class, 'data-datepicker':'on'}) %}

            {{ block('form_widget_simple') }}
        </div>
    {% else %}
        {% set date_pattern = '<div class=\"row\">' ~ date_pattern ~ '</div>'|raw %}
        {{ date_pattern|replace({
        '{{ year }}' : '<div class=\"col-xs-4\">{{ year }}</div>',
        '{{ month }}' : '<div class=\"col-xs-4\">{{ month }}</div>',
        '{{ day }}' : '<div class=\"col-xs-4\">{{ day }}</div>',
        })|raw|replace({
        '{{ year }}':  form_widget(form.year),
        '{{ month }}': form_widget(form.month),
        '{{ day }}':   form_widget(form.day),
        })|raw }}

    {% endif %}
{% endblock %}

{% block time_widget %}
    {% if widget == 'single_text' %}
        <div class=\"bootstrap-timepicker\">
            <div class=\"input-group\">
                {% if attr.class is defined %}
                    {% set class = attr.class ~ ' timepicker' %}
                {% else %}
                    {% set class = ' timepicker' %}
                {% endif %}
                {% set attr = attr|merge({'class' : class, 'data-timepicker':'on'}) %}
                {{ block('form_widget_simple') }}
                <div class=\"input-group-addon add-on\">
                    <i class=\"fa fa-clock-o\"></i>
                </div>
            </div>
        </div>
    {% else %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block form_row %}
    {% set types = form.vars.block_prefixes %}
    {% if 'checkbox' in types or 'radio' in types %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% else %}
        <div class=\"form-group {{ errors|length > 0 ? 'has-error has-feedback'  : '' }}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    {% endif %}
{% endblock %}

{% block form_label %}

    {% if help is defined %}
        &nbsp; <a href=\"#\" data-toggle=\"tooltip\" data-original-title=\"{{ help }}\"><i class=\"fa fa-question-circle\"></i></a>
    {% endif %}

    {{ parent() }}
    {% if required %}
        <span class=\"required\" title=\"Dies ist ein Pflichtfeld\">*</span>
    {% endif %}

{% endblock form_label %}

{% block form_errors %}
    {% spaceless %}
        {% if errors|length > 0 %}
            <ul class=\"list-unstyled\">
                {% for error in errors %}
                    <li class=\"text-danger\">{{ error.message }}</li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endspaceless %}
{% endblock form_errors %}

{# % block form_widget_simple %}
    {{ parent() }}

    {% if help is defined %}
        <p class=\"help-block\">{{ help }}</p>
    {% endif %}
{% endblock % #}
", "AvanzuAdminThemeBundle:layout:form-theme.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/avanzu/admin-theme-bundle/Resources/views/layout/form-theme.html.twig");
    }
}
