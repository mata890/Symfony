<?php

/* base1.html.twig */
class __TwigTemplate_9e01430b1299d558f3c972728743aaaf43dc3035872c291bc60bf2004617ba46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset=\"utf-8\">
    <title>Free HTML5 Bootstrap Admin Template</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.\">
    <meta name=\"author\" content=\"Muhammad Usman\">

    <!-- The styles -->
    <link id=\"bs-css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/css/bootstrap-cerulean.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/css/charisma-app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href='";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/fullcalendar/dist/fullcalendar.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptionbower_components/fullcalendar/dist/fullcalendar.print.css"), "html", null, true);
        echo "' rel='stylesheet' media='print'>
    <link href='";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptionbower_components/chosen/chosen.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptionbower_components/colorbox/example3/colorbox.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptionbower_components/responsive-tables/responsive-tables.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptionbower_components/bootstrap-tour/build/css/bootstrap-tour.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/jquery.noty.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/noty_theme_default.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/elfinder.min.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/elfinder.theme.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/jquery.iphone.toggle.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/uploadify.css"), "html", null, true);
        echo "' rel='stylesheet'>
    <link href='";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sminscriptioncss/animate.min.css"), "html", null, true);
        echo "' rel='stylesheet'>

    <!-- jQuery -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/parsley.min.js"), "html", null, true);
        echo "\"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/http://html5shim.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/img/favicon.ico"), "html", null, true);
        echo "\">

</head>

<body>
";
        // line 57
        $this->displayBlock('container', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "

<!-- external javascript -->

<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- library for cookie management -->
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.cookie.js"), "html", null, true);
        echo "'\"></script>
<!-- calender plugin -->
<script src='";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "'></script>
<script src='";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "'></script>
<!-- data table plugin -->
<script src='";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.dataTables.min.js"), "html", null, true);
        echo "'></script>

<!-- select or dropdown enhancer -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- plugin for gallery image view -->
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/colorbox/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
<!-- notification plugin -->
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.noty.js"), "html", null, true);
        echo "\"></script>
<!-- library for making tables responsive -->
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/responsive-tables/responsive-tables.js"), "html", null, true);
        echo "\"></script>
<!-- tour plugin -->
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"), "html", null, true);
        echo "\"></script>
<!-- star rating plugin -->
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<!-- for iOS style toggle switch -->
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.iphone.toggle.js"), "html", null, true);
        echo "\"></script>
<!-- autogrowing textarea plugin -->
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.autogrow-textarea.js"), "html", null, true);
        echo "\"></script>
<!-- multiple file upload plugin -->
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.uploadify-3.1.min.js"), "html", null, true);
        echo "\"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/jquery.history.js"), "html", null, true);
        echo "\"></script>
<!-- application script for Charisma demo -->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/schoolmanager/js/charisma.js"), "html", null, true);
        echo "\"></script>


</body>
</html>
";
    }

    // line 57
    public function block_container($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "
        </footer>
    ";
    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 61,  240 => 60,  235 => 57,  225 => 99,  220 => 97,  215 => 95,  210 => 93,  205 => 91,  200 => 89,  195 => 87,  190 => 85,  185 => 83,  180 => 81,  175 => 79,  169 => 76,  164 => 74,  160 => 73,  155 => 71,  149 => 68,  143 => 64,  141 => 60,  138 => 59,  136 => 57,  128 => 52,  121 => 48,  114 => 44,  110 => 43,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  72 => 32,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  47 => 25,  21 => 1,);
    }
}
