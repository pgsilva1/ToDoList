<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_cda5d4d8a88689e3041b1ca946b2f503644c702d167582a084b08352064e0a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06cf008fca2859e6a47cd09fd4236b88dc4dc1518d3570d1963b546924a05a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cf008fca2859e6a47cd09fd4236b88dc4dc1518d3570d1963b546924a05a40->enter($__internal_06cf008fca2859e6a47cd09fd4236b88dc4dc1518d3570d1963b546924a05a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06cf008fca2859e6a47cd09fd4236b88dc4dc1518d3570d1963b546924a05a40->leave($__internal_06cf008fca2859e6a47cd09fd4236b88dc4dc1518d3570d1963b546924a05a40_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_2eaedd7505e4e3f188ab54a9632a58243fd5bdc2678949812547cddbce91ac58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eaedd7505e4e3f188ab54a9632a58243fd5bdc2678949812547cddbce91ac58->enter($__internal_2eaedd7505e4e3f188ab54a9632a58243fd5bdc2678949812547cddbce91ac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_2eaedd7505e4e3f188ab54a9632a58243fd5bdc2678949812547cddbce91ac58->leave($__internal_2eaedd7505e4e3f188ab54a9632a58243fd5bdc2678949812547cddbce91ac58_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_c9815d2be4a2eb19c4c3fc1d9a39dd414fa1f620b04b46329839ae35c89afca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9815d2be4a2eb19c4c3fc1d9a39dd414fa1f620b04b46329839ae35c89afca5->enter($__internal_c9815d2be4a2eb19c4c3fc1d9a39dd414fa1f620b04b46329839ae35c89afca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c9815d2be4a2eb19c4c3fc1d9a39dd414fa1f620b04b46329839ae35c89afca5->leave($__internal_c9815d2be4a2eb19c4c3fc1d9a39dd414fa1f620b04b46329839ae35c89afca5_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ec31e5246455ad6cde38c629446fd1a152936f8d0ae6a9f3ab25e913fdaecaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec31e5246455ad6cde38c629446fd1a152936f8d0ae6a9f3ab25e913fdaecaef->enter($__internal_ec31e5246455ad6cde38c629446fd1a152936f8d0ae6a9f3ab25e913fdaecaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ec31e5246455ad6cde38c629446fd1a152936f8d0ae6a9f3ab25e913fdaecaef->leave($__internal_ec31e5246455ad6cde38c629446fd1a152936f8d0ae6a9f3ab25e913fdaecaef_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_7f70d8ebe61f6633f7a130404c069bba8df1bc93cd3bc5eeb29420ade4d775ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f70d8ebe61f6633f7a130404c069bba8df1bc93cd3bc5eeb29420ade4d775ea->enter($__internal_7f70d8ebe61f6633f7a130404c069bba8df1bc93cd3bc5eeb29420ade4d775ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7f70d8ebe61f6633f7a130404c069bba8df1bc93cd3bc5eeb29420ade4d775ea->leave($__internal_7f70d8ebe61f6633f7a130404c069bba8df1bc93cd3bc5eeb29420ade4d775ea_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_c7608946e77be9f1397f79a8e24bef4a9491206aad448c6004db7ca7e8cff09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7608946e77be9f1397f79a8e24bef4a9491206aad448c6004db7ca7e8cff09d->enter($__internal_c7608946e77be9f1397f79a8e24bef4a9491206aad448c6004db7ca7e8cff09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_c7608946e77be9f1397f79a8e24bef4a9491206aad448c6004db7ca7e8cff09d->leave($__internal_c7608946e77be9f1397f79a8e24bef4a9491206aad448c6004db7ca7e8cff09d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 51,  162 => 45,  157 => 44,  154 => 43,  152 => 42,  149 => 41,  146 => 40,  140 => 39,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  99 => 26,  88 => 22,  86 => 21,  84 => 20,  81 => 19,  79 => 18,  71 => 14,  66 => 13,  64 => 12,  62 => 10,  56 => 9,  48 => 6,  46 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/home/desenvolvimento/Projetos/testeSonata2/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
