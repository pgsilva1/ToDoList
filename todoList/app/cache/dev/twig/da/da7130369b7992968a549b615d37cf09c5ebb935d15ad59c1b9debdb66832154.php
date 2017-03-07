<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_202402da8955262bb6b40d1f3cf77e37b0762b3ba81cec57fe4ba951dfb255f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4df998473505635f5bb6a6b280991ac938c2c54b0363d3399f459468edbf1c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df998473505635f5bb6a6b280991ac938c2c54b0363d3399f459468edbf1c76->enter($__internal_4df998473505635f5bb6a6b280991ac938c2c54b0363d3399f459468edbf1c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    <div class=\"wrapper\">

    ";
        // line 36
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 65
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 70
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 77
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 86
        $this->displayBlock('page_title', $context, $blocks);
        // line 87
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 89
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 92
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 96
        $this->displayBlock('page_content', $context, $blocks);
        // line 97
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 102
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 110
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 124
        echo "</body>
</html>
";
        
        $__internal_4df998473505635f5bb6a6b280991ac938c2c54b0363d3399f459468edbf1c76->leave($__internal_4df998473505635f5bb6a6b280991ac938c2c54b0363d3399f459468edbf1c76_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_43097a157860dc2a96335a82963470f49a0b1c2e058c943c87342c269f85fbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43097a157860dc2a96335a82963470f49a0b1c2e058c943c87342c269f85fbbe->enter($__internal_43097a157860dc2a96335a82963470f49a0b1c2e058c943c87342c269f85fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_43097a157860dc2a96335a82963470f49a0b1c2e058c943c87342c269f85fbbe->leave($__internal_43097a157860dc2a96335a82963470f49a0b1c2e058c943c87342c269f85fbbe_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a73fefbb4b5f4bf1e2464784eacafff68d548e5ed6eee61a215f442a379bd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a73fefbb4b5f4bf1e2464784eacafff68d548e5ed6eee61a215f442a379bd98->enter($__internal_6a73fefbb4b5f4bf1e2464784eacafff68d548e5ed6eee61a215f442a379bd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_6a73fefbb4b5f4bf1e2464784eacafff68d548e5ed6eee61a215f442a379bd98->leave($__internal_6a73fefbb4b5f4bf1e2464784eacafff68d548e5ed6eee61a215f442a379bd98_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_daec694496932e83a819a77d8145f1b14316d2eea5bdaee3e03e8a2da2d74398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daec694496932e83a819a77d8145f1b14316d2eea5bdaee3e03e8a2da2d74398->enter($__internal_daec694496932e83a819a77d8145f1b14316d2eea5bdaee3e03e8a2da2d74398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_daec694496932e83a819a77d8145f1b14316d2eea5bdaee3e03e8a2da2d74398->leave($__internal_daec694496932e83a819a77d8145f1b14316d2eea5bdaee3e03e8a2da2d74398_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_65c7cdfc595544669b585bdb3eb96a4319548a004261e0cd6cd22ae62c22ca52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c7cdfc595544669b585bdb3eb96a4319548a004261e0cd6cd22ae62c22ca52->enter($__internal_65c7cdfc595544669b585bdb3eb96a4319548a004261e0cd6cd22ae62c22ca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 37
        echo "        <header class=\"main-header\">
            ";
        // line 38
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 44
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 50
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 51
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 53
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 59
            echo "                        </ul>
                    </div>
                ";
        }
        // line 62
        echo "            </nav>
        </header>
    ";
        
        $__internal_65c7cdfc595544669b585bdb3eb96a4319548a004261e0cd6cd22ae62c22ca52->leave($__internal_65c7cdfc595544669b585bdb3eb96a4319548a004261e0cd6cd22ae62c22ca52_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_eb5ec59b8a49571d52c71389c97fbb7204a2a193ce981b77c9df9f1c51ebe932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb5ec59b8a49571d52c71389c97fbb7204a2a193ce981b77c9df9f1c51ebe932->enter($__internal_eb5ec59b8a49571d52c71389c97fbb7204a2a193ce981b77c9df9f1c51ebe932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    TO DO List
                </a>
            ";
        
        $__internal_eb5ec59b8a49571d52c71389c97fbb7204a2a193ce981b77c9df9f1c51ebe932->leave($__internal_eb5ec59b8a49571d52c71389c97fbb7204a2a193ce981b77c9df9f1c51ebe932_prof);

    }

    // line 53
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_e4a36b6031f7afdadf3e8ca1395ebb9e8bec28730c93d77f9e259fc20eb29078 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a36b6031f7afdadf3e8ca1395ebb9e8bec28730c93d77f9e259fc20eb29078->enter($__internal_e4a36b6031f7afdadf3e8ca1395ebb9e8bec28730c93d77f9e259fc20eb29078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 54
        echo "                                ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_e4a36b6031f7afdadf3e8ca1395ebb9e8bec28730c93d77f9e259fc20eb29078->leave($__internal_e4a36b6031f7afdadf3e8ca1395ebb9e8bec28730c93d77f9e259fc20eb29078_prof);

    }

    // line 70
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_e1c020d99d0a019204611f72dccf0a6d7ec7212e02d0b4583aabe27d55f386f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c020d99d0a019204611f72dccf0a6d7ec7212e02d0b4583aabe27d55f386f8->enter($__internal_e1c020d99d0a019204611f72dccf0a6d7ec7212e02d0b4583aabe27d55f386f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 71
        echo "                    ";
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 72
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        ";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                    ";
        }
        // line 75
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_e1c020d99d0a019204611f72dccf0a6d7ec7212e02d0b4583aabe27d55f386f8->leave($__internal_e1c020d99d0a019204611f72dccf0a6d7ec7212e02d0b4583aabe27d55f386f8_prof);

    }

    // line 86
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ced23ccb6d9b96201da62fa3d829da17239a82c829be5c3d798ba47459b535c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced23ccb6d9b96201da62fa3d829da17239a82c829be5c3d798ba47459b535c5->enter($__internal_ced23ccb6d9b96201da62fa3d829da17239a82c829be5c3d798ba47459b535c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_ced23ccb6d9b96201da62fa3d829da17239a82c829be5c3d798ba47459b535c5->leave($__internal_ced23ccb6d9b96201da62fa3d829da17239a82c829be5c3d798ba47459b535c5_prof);

    }

    // line 87
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1830e478b81e721a79a1e131861fa47991f83dcf76d2c5f4057be78dabe3f1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1830e478b81e721a79a1e131861fa47991f83dcf76d2c5f4057be78dabe3f1d3->enter($__internal_1830e478b81e721a79a1e131861fa47991f83dcf76d2c5f4057be78dabe3f1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_1830e478b81e721a79a1e131861fa47991f83dcf76d2c5f4057be78dabe3f1d3->leave($__internal_1830e478b81e721a79a1e131861fa47991f83dcf76d2c5f4057be78dabe3f1d3_prof);

    }

    // line 89
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_a3945a4362922a7bdd8e26112cec8a085db327245622afed1d322c6c9c0abff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3945a4362922a7bdd8e26112cec8a085db327245622afed1d322c6c9c0abff9->enter($__internal_a3945a4362922a7bdd8e26112cec8a085db327245622afed1d322c6c9c0abff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 90
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_a3945a4362922a7bdd8e26112cec8a085db327245622afed1d322c6c9c0abff9->leave($__internal_a3945a4362922a7bdd8e26112cec8a085db327245622afed1d322c6c9c0abff9_prof);

    }

    // line 96
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e4be9919178ded6b8e639d0e27c0499ec4ff55229202bf1e3787f9b76b2feafe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4be9919178ded6b8e639d0e27c0499ec4ff55229202bf1e3787f9b76b2feafe->enter($__internal_e4be9919178ded6b8e639d0e27c0499ec4ff55229202bf1e3787f9b76b2feafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_e4be9919178ded6b8e639d0e27c0499ec4ff55229202bf1e3787f9b76b2feafe->leave($__internal_e4be9919178ded6b8e639d0e27c0499ec4ff55229202bf1e3787f9b76b2feafe_prof);

    }

    // line 102
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_2c78bf705004efe8c98fd6024aa3201305bdab760f1a19aaa01586d249b9d27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c78bf705004efe8c98fd6024aa3201305bdab760f1a19aaa01586d249b9d27f->enter($__internal_2c78bf705004efe8c98fd6024aa3201305bdab760f1a19aaa01586d249b9d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 103
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_2c78bf705004efe8c98fd6024aa3201305bdab760f1a19aaa01586d249b9d27f->leave($__internal_2c78bf705004efe8c98fd6024aa3201305bdab760f1a19aaa01586d249b9d27f_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e1dd89ebd2a2984a6e742cd5f859f877fc67ab6e35118969548fab4930b571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1dd89ebd2a2984a6e742cd5f859f877fc67ab6e35118969548fab4930b571e->enter($__internal_7e1dd89ebd2a2984a6e742cd5f859f877fc67ab6e35118969548fab4930b571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_7e1dd89ebd2a2984a6e742cd5f859f877fc67ab6e35118969548fab4930b571e->leave($__internal_7e1dd89ebd2a2984a6e742cd5f859f877fc67ab6e35118969548fab4930b571e_prof);

    }

    // line 122
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_4b15ad5a61c406207caac6893a6874aee6cf6028b528f5e26f48432c96c18c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b15ad5a61c406207caac6893a6874aee6cf6028b528f5e26f48432c96c18c34->enter($__internal_4b15ad5a61c406207caac6893a6874aee6cf6028b528f5e26f48432c96c18c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_4b15ad5a61c406207caac6893a6874aee6cf6028b528f5e26f48432c96c18c34->leave($__internal_4b15ad5a61c406207caac6893a6874aee6cf6028b528f5e26f48432c96c18c34_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 122,  396 => 117,  393 => 116,  387 => 115,  374 => 103,  368 => 102,  357 => 96,  347 => 90,  341 => 89,  329 => 87,  317 => 86,  307 => 75,  302 => 73,  297 => 72,  294 => 71,  288 => 70,  279 => 57,  275 => 56,  271 => 55,  266 => 54,  260 => 53,  247 => 39,  241 => 38,  232 => 62,  227 => 59,  225 => 53,  221 => 51,  219 => 50,  211 => 44,  209 => 38,  206 => 37,  200 => 36,  186 => 25,  180 => 24,  170 => 17,  164 => 16,  152 => 13,  143 => 124,  141 => 122,  138 => 120,  136 => 115,  130 => 110,  128 => 102,  121 => 97,  119 => 96,  113 => 92,  111 => 89,  105 => 87,  103 => 86,  92 => 77,  90 => 70,  83 => 65,  81 => 36,  75 => 33,  71 => 31,  68 => 24,  63 => 21,  59 => 19,  56 => 16,  51 => 13,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
    <div class=\"wrapper\">

    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"{{ path('index') }}\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    TO DO List
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
        </header>
    {% endblock %}

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                {% block avanzu_sidebar %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                    {% endif %}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                {% endblock %}
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    {% block page_title %}Blank page{% endblock %}
                    <small>{% block page_subtitle %}Control panel{% endblock %}</small>
                </h1>
                {% block avanzu_breadcrumb %}
                    {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                {% endblock %}
            </section>

            <!-- Main content -->
            <section class=\"content\">
                {% block page_content %}{% endblock %}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    {% endblock %}

    </div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/desenvolvimento/Projetos/todoList/vendor/avanzu/admin-theme-bundle/Resources/views/layout/base-layout.html.twig");
    }
}
