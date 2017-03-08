<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_92519be10ced105877f4257a2cd4c9ebf9b9c5d25623d0c5ccd39b8b18d5b923 extends Twig_Template
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
        $__internal_0512fa31c6c09a15f1f1b42d8d2bbe06ff2d95c92f0f447be11b3be9f57490d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0512fa31c6c09a15f1f1b42d8d2bbe06ff2d95c92f0f447be11b3be9f57490d4->enter($__internal_0512fa31c6c09a15f1f1b42d8d2bbe06ff2d95c92f0f447be11b3be9f57490d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_0512fa31c6c09a15f1f1b42d8d2bbe06ff2d95c92f0f447be11b3be9f57490d4->leave($__internal_0512fa31c6c09a15f1f1b42d8d2bbe06ff2d95c92f0f447be11b3be9f57490d4_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_06ff825d122f5fcede901a8be168acc54576bfbe8ef2b267d9378104be2830f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ff825d122f5fcede901a8be168acc54576bfbe8ef2b267d9378104be2830f2->enter($__internal_06ff825d122f5fcede901a8be168acc54576bfbe8ef2b267d9378104be2830f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_06ff825d122f5fcede901a8be168acc54576bfbe8ef2b267d9378104be2830f2->leave($__internal_06ff825d122f5fcede901a8be168acc54576bfbe8ef2b267d9378104be2830f2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_745bbf337ddca293b8a6c8facb60cadeb5bbbe802e4352ccf39d17130f1edc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745bbf337ddca293b8a6c8facb60cadeb5bbbe802e4352ccf39d17130f1edc2c->enter($__internal_745bbf337ddca293b8a6c8facb60cadeb5bbbe802e4352ccf39d17130f1edc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_745bbf337ddca293b8a6c8facb60cadeb5bbbe802e4352ccf39d17130f1edc2c->leave($__internal_745bbf337ddca293b8a6c8facb60cadeb5bbbe802e4352ccf39d17130f1edc2c_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_30574374c5982ebc7117e3064858d25f8aa21ead4346f94f5af396d747f332d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30574374c5982ebc7117e3064858d25f8aa21ead4346f94f5af396d747f332d1->enter($__internal_30574374c5982ebc7117e3064858d25f8aa21ead4346f94f5af396d747f332d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_30574374c5982ebc7117e3064858d25f8aa21ead4346f94f5af396d747f332d1->leave($__internal_30574374c5982ebc7117e3064858d25f8aa21ead4346f94f5af396d747f332d1_prof);

    }

    // line 36
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_fa514eb120bb65794305b6a227c02634fa11dd0b917ffa97095a79b8c9297332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa514eb120bb65794305b6a227c02634fa11dd0b917ffa97095a79b8c9297332->enter($__internal_fa514eb120bb65794305b6a227c02634fa11dd0b917ffa97095a79b8c9297332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_fa514eb120bb65794305b6a227c02634fa11dd0b917ffa97095a79b8c9297332->leave($__internal_fa514eb120bb65794305b6a227c02634fa11dd0b917ffa97095a79b8c9297332_prof);

    }

    // line 38
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_0dc5d5d30ac62602f289a9f5a8263c00aee18a87b02f96f0077dca270d87d955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc5d5d30ac62602f289a9f5a8263c00aee18a87b02f96f0077dca270d87d955->enter($__internal_0dc5d5d30ac62602f289a9f5a8263c00aee18a87b02f96f0077dca270d87d955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 39
        echo "                <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    To Do List
                </a>
            ";
        
        $__internal_0dc5d5d30ac62602f289a9f5a8263c00aee18a87b02f96f0077dca270d87d955->leave($__internal_0dc5d5d30ac62602f289a9f5a8263c00aee18a87b02f96f0077dca270d87d955_prof);

    }

    // line 53
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_127cc7bacded4beed95c55e63d27d5b756307b8f6dd156e20b77d3f96106e28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127cc7bacded4beed95c55e63d27d5b756307b8f6dd156e20b77d3f96106e28a->enter($__internal_127cc7bacded4beed95c55e63d27d5b756307b8f6dd156e20b77d3f96106e28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_127cc7bacded4beed95c55e63d27d5b756307b8f6dd156e20b77d3f96106e28a->leave($__internal_127cc7bacded4beed95c55e63d27d5b756307b8f6dd156e20b77d3f96106e28a_prof);

    }

    // line 70
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_d550cafcbf7453d039463cb26d94f23277e8893b0c6f9532111c30f5335a11e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d550cafcbf7453d039463cb26d94f23277e8893b0c6f9532111c30f5335a11e0->enter($__internal_d550cafcbf7453d039463cb26d94f23277e8893b0c6f9532111c30f5335a11e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_d550cafcbf7453d039463cb26d94f23277e8893b0c6f9532111c30f5335a11e0->leave($__internal_d550cafcbf7453d039463cb26d94f23277e8893b0c6f9532111c30f5335a11e0_prof);

    }

    // line 86
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_765fe858d3d62c50ea31a72620ccd89a571fa5b6fb3966d79d005d03b69c9c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765fe858d3d62c50ea31a72620ccd89a571fa5b6fb3966d79d005d03b69c9c73->enter($__internal_765fe858d3d62c50ea31a72620ccd89a571fa5b6fb3966d79d005d03b69c9c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_765fe858d3d62c50ea31a72620ccd89a571fa5b6fb3966d79d005d03b69c9c73->leave($__internal_765fe858d3d62c50ea31a72620ccd89a571fa5b6fb3966d79d005d03b69c9c73_prof);

    }

    // line 87
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_baa28b9479993256a8685b706db96ed62f34c3aaac893bc7d14ce9ba67ed057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa28b9479993256a8685b706db96ed62f34c3aaac893bc7d14ce9ba67ed057b->enter($__internal_baa28b9479993256a8685b706db96ed62f34c3aaac893bc7d14ce9ba67ed057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_baa28b9479993256a8685b706db96ed62f34c3aaac893bc7d14ce9ba67ed057b->leave($__internal_baa28b9479993256a8685b706db96ed62f34c3aaac893bc7d14ce9ba67ed057b_prof);

    }

    // line 89
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_958960d8707b3c38b465df182bcdf4e5847bb615b375edfe7840687269afddd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958960d8707b3c38b465df182bcdf4e5847bb615b375edfe7840687269afddd0->enter($__internal_958960d8707b3c38b465df182bcdf4e5847bb615b375edfe7840687269afddd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 90
        echo "                    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_958960d8707b3c38b465df182bcdf4e5847bb615b375edfe7840687269afddd0->leave($__internal_958960d8707b3c38b465df182bcdf4e5847bb615b375edfe7840687269afddd0_prof);

    }

    // line 96
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9acbdcbcda8241c9491296ca5e441a694e93d9a3ad6a0e13ab96195bb13d15bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acbdcbcda8241c9491296ca5e441a694e93d9a3ad6a0e13ab96195bb13d15bd->enter($__internal_9acbdcbcda8241c9491296ca5e441a694e93d9a3ad6a0e13ab96195bb13d15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_9acbdcbcda8241c9491296ca5e441a694e93d9a3ad6a0e13ab96195bb13d15bd->leave($__internal_9acbdcbcda8241c9491296ca5e441a694e93d9a3ad6a0e13ab96195bb13d15bd_prof);

    }

    // line 102
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_b57e00084464ef372831731b97640a37d9b661f492bc85d358ba276efda23fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57e00084464ef372831731b97640a37d9b661f492bc85d358ba276efda23fda->enter($__internal_b57e00084464ef372831731b97640a37d9b661f492bc85d358ba276efda23fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 103
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_b57e00084464ef372831731b97640a37d9b661f492bc85d358ba276efda23fda->leave($__internal_b57e00084464ef372831731b97640a37d9b661f492bc85d358ba276efda23fda_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70b7db0685d4598b72212101562652cfe0909afba2b843a5e0c9b5085010ab34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b7db0685d4598b72212101562652cfe0909afba2b843a5e0c9b5085010ab34->enter($__internal_70b7db0685d4598b72212101562652cfe0909afba2b843a5e0c9b5085010ab34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_70b7db0685d4598b72212101562652cfe0909afba2b843a5e0c9b5085010ab34->leave($__internal_70b7db0685d4598b72212101562652cfe0909afba2b843a5e0c9b5085010ab34_prof);

    }

    // line 122
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_92d4ca4494f3dfe72e81317a76f226c47b4aab2609be64bc305b599727e2ca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d4ca4494f3dfe72e81317a76f226c47b4aab2609be64bc305b599727e2ca49->enter($__internal_92d4ca4494f3dfe72e81317a76f226c47b4aab2609be64bc305b599727e2ca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_92d4ca4494f3dfe72e81317a76f226c47b4aab2609be64bc305b599727e2ca49->leave($__internal_92d4ca4494f3dfe72e81317a76f226c47b4aab2609be64bc305b599727e2ca49_prof);

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
                    To Do List
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
