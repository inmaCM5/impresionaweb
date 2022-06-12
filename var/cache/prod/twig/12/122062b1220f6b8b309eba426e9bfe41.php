<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pedido.html.twig */
class __TwigTemplate_31ee91a76ea1eec3757665ad29e43b6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'contenido' => [$this, 'block_contenido'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "pedido.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/LineIcons.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"preloader\">
\t\t<div class=\"loader\">
\t\t\t<div class=\"ytp-spinner\">
\t\t\t\t<div class=\"ytp-spinner-container\">
\t\t\t\t\t<div class=\"ytp-spinner-rotator\">
\t\t\t\t\t\t<div class=\"ytp-spinner-left\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ytp-spinner-right\">
\t\t\t\t\t\t\t<div class=\"ytp-spinner-circle\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    <div class=\"navigation\">
\t\t<header class=\"navbar-style-7 position-relative\">
\t\t\t<div
\t\t\t\tclass=\"container\">
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t\t<div class=\"navbar-mobile d-lg-none\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-toggle icon-text-btn\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-menu\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-6\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"mobile-logo text-center\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar mobile Start -->
\t\t\t</div>

\t\t\t<div
\t\t\t\tclass=\"navbar-container navbar-sidebar-7\">
\t\t\t\t<!-- navbar close  Ends -->
\t\t\t\t<div class=\"navbar-close d-lg-none\">
\t\t\t\t\t<a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\">
\t\t\t\t\t\t<i class=\"mdi mdi-close\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<!-- navbar close  Ends -->

\t\t\t\t<!-- navbar top Start -->
\t\t\t\t<div class=\"navbar-top-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"navbar-top d-lg-flex justify-content-between\">
\t\t\t\t\t\t\t<!-- navbar top left Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-left\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-phone-in-talk\"></i>
\t\t\t\t\t\t\t\t\t\t\t+34 684 00 10 65
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top left Ends -->
\t\t\t\t\t\t\t<!-- navbar top right Start -->
\t\t\t\t\t\t\t<div class=\"navbar-top-right\">
\t\t\t\t\t\t\t\t<ul class=\"navbar-top-link\">
\t\t\t\t\t\t\t\t\t";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 95)) {
            // line 96
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 99), "username", [], "any", false, false, false, 99), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar top Ends -->
\t\t\t</div>
\t\t\t<div class=\"overlay-7\"></div>
\t\t</header>
\t</div>

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<div class=\"breadcrumb-left\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Confirmación pedido</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t\t<h5 class=\"heading-5 font-weight-500\">Confirmación pedido</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

    ";
        // line 141
        if (($context["comprobar"] ?? null)) {
            // line 142
            echo "        <div class=\"text-center mt-2\">
            <h2 style=\"color:red\">Su pedido no se realizó correctamente</h2>
        </div>
    ";
        } else {
            // line 146
            echo "        <div class=\"text-center mt-2\">
            <h1>Confirmación de compra</h1>
            <h3>";
            // line 148
            echo twig_escape_filter($this->env, ($context["usuario"] ?? null), "html", null, true);
            echo " su número de pedido es ";
            echo twig_escape_filter($this->env, ($context["numPedido"] ?? null), "html", null, true);
            echo "</h3>
        </div>
    ";
        }
    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "pedido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 165,  313 => 164,  309 => 163,  305 => 162,  301 => 161,  297 => 160,  293 => 159,  289 => 158,  285 => 157,  281 => 156,  277 => 155,  272 => 154,  268 => 153,  258 => 148,  254 => 146,  248 => 142,  246 => 141,  229 => 127,  207 => 107,  200 => 103,  197 => 102,  191 => 99,  186 => 97,  183 => 96,  181 => 95,  164 => 81,  131 => 53,  91 => 15,  87 => 14,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pedido.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\pedido.html.twig");
    }
}
