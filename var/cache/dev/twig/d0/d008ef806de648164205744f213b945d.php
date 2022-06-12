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

/* productos.html.twig */
class __TwigTemplate_040f3ebb96796052782dfcdf6a156a48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "productos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 15
        echo "\t<div class=\"preloader\">
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

\t<div class=\"navigation\">
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        if ((twig_length_filter($this->env, (isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 71, $this->source); })())) == 0)) {
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCesta vacía
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 94, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 101), "getId", [], "method", false, false, false, 101)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 101), "getNombre", [], "method", false, false, false, 101), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 104), "getId", [], "method", false, false, false, 104)]), "html", null, true);
                echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 111), "getId", [], "method", false, false, false, 111)]), "html", null, true);
                echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 112), "getUnidades", [], "method", false, false, false, 112), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 112), "html", null, true);
                echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 113), "getCodigo", [], "method", false, false, false, 113), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
                // line 118
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 118), "getPvp", [], "method", false, false, false, 118), "html", null, true);
                echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Total precio:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 129, $this->source); })()), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
            echo "\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
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
        // line 166
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
        // line 180
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180)) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "user", [], "any", false, false, false, 184), "username", [], "any", false, false, false, 184), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 187
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 188
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar top Ends -->

\t\t\t\t<!-- main navbar Start -->
\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 207
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 222), "nombre", [], "any", false, false, false, 222), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 225));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 226
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 227)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 227), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 230
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        // line 242
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 243
            echo "\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 246
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Categorías</a></li>
                                                <li><a href=\"";
            // line 247
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Productos</a></li>
                                                <li><a href=\"";
            // line 248
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Usuarios</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 249
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPedidos");
            echo "\">Pedidos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 253
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div class=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 261
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 261, $this->source); })()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 270
        if ((twig_length_filter($this->env, (isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 270, $this->source); })())) == 0)) {
            // line 271
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCesta vacía
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 289
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 293, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
                // line 294
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 299
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 299), "getId", [], "method", false, false, false, 299)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 299), "getNombre", [], "method", false, false, false, 299), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
                // line 302
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 302), "getId", [], "method", false, false, false, 302)]), "html", null, true);
                echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
                // line 309
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 309), "getId", [], "method", false, false, false, 309)]), "html", null, true);
                echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 310), "getUnidades", [], "method", false, false, false, 310), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 310), "html", null, true);
                echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 311), "getCodigo", [], "method", false, false, false, 311), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
                // line 316
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 316), "getPvp", [], "method", false, false, false, 316), "html", null, true);
                echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Total precio:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 327
            echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 327, $this->source); })()), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 331
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
            echo "\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 335
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- main navbar Ends -->
\t\t\t</div>
\t\t\t<div class=\"overlay-7\"></div>
\t\t</header>
\t</div>

\t<section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<div class=\"breadcrumb-left\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 357
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Productos</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t\t<h5 class=\"heading-5 font-weight-500\">Productos</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"category-wrapper pt-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"filter-style-1 mt-0\">
\t\t\t\t\t\t<div class=\"filter-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Categorías</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"filter-type\">
\t\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t\t\t";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 381, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 382
            echo "\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 383), "nombre", [], "any", false, false, false, 383), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\".";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 385), "nombre", [], "any", false, false, false, 385), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 386), "nombre", [], "any", false, false, false, 386), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 391));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 392
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 392), "nombre", [], "any", false, false, false, 392), "html", null, true);
                echo "\" class=\"collapse show\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 392), "nombre", [], "any", false, false, false, 392), "html", null, true);
                echo "\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"";
                // line 394
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 394)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 394), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 398
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumb-list-grid nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t<a id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-grid\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
        // line 426
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 426, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 427
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-7 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 480px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"100\" height=\"150\" src=\"imagenes/productos/";
            // line 434
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getFoto", [], "method", false, false, false, 434), "html", null, true);
            echo "\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 442
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 442)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getNombre", [], "method", false, false, false, 442), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 444
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getPvp", [], "method", false, false, false, 444), "html", null, true);
            echo "€</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 445
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir", ["idProducto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 445)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 447
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "getUnidades", [], "method", false, false, false, 447) == 0)) {
                // line 448
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 450
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-7.svg"), "html", null, true);
                echo "\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 452
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getCodigo", [], "method", false, false, false, 452), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 458
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
        // line 462
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) || array_key_exists("productos", $context) ? $context["productos"] : (function () { throw new RuntimeError('Variable "productos" does not exist.', 462, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 463
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-1 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 828px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 414px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"200\" height=\"300\" src=\"";
            // line 470
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/productos/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getFoto", [], "method", false, false, false, 470), "html", null, true);
            echo "\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 478
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 478)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getNombre", [], "method", false, false, false, 478), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 480
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getPvp", [], "method", false, false, false, 480), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 481
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir", ["idProducto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 481)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 483
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "getUnidades", [], "method", false, false, false, 483) == 0)) {
                // line 484
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 486
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-7.svg"), "html", null, true);
                echo "\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 488
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getCodigo", [], "method", false, false, false, 488), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t

\t<section class=\"footer-style-3 pt-100 pb-100\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t\t<a href=\"";
        // line 511
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Síguenos</h5>
\t\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCTOS</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Impresión</p>
                                </li>
                                <li>
                                    <p>Libros</p>
                                </li>
                                <li>
                                    <p>Copistería</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">ATENCIÓN AL CLIENTE</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Política de privacidad</p>
                                </li>
                                <li>
                                    <p>Aviso legal</p>
                                </li>
                                <li>
                                    <p>Condiciones de venta</p>
                                </li>
                                <li>
                                    <p>Política de Cookies</p>
                                </li>
                            </ul>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 577
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 578
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "productos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1043 => 589,  1039 => 588,  1035 => 587,  1031 => 586,  1027 => 585,  1023 => 584,  1019 => 583,  1015 => 582,  1011 => 581,  1007 => 580,  1003 => 579,  998 => 578,  988 => 577,  914 => 512,  910 => 511,  891 => 494,  878 => 488,  872 => 486,  868 => 484,  866 => 483,  861 => 481,  857 => 480,  850 => 478,  838 => 470,  829 => 463,  825 => 462,  819 => 458,  806 => 452,  800 => 450,  796 => 448,  794 => 447,  789 => 445,  785 => 444,  778 => 442,  767 => 434,  758 => 427,  754 => 426,  726 => 400,  719 => 398,  707 => 394,  699 => 392,  695 => 391,  687 => 386,  683 => 385,  678 => 383,  675 => 382,  671 => 381,  644 => 357,  620 => 335,  612 => 331,  606 => 327,  597 => 320,  587 => 316,  579 => 311,  573 => 310,  569 => 309,  559 => 302,  551 => 299,  544 => 294,  540 => 293,  534 => 289,  514 => 271,  512 => 270,  500 => 261,  496 => 260,  487 => 253,  480 => 249,  476 => 248,  472 => 247,  468 => 246,  463 => 243,  461 => 242,  456 => 240,  447 => 233,  439 => 230,  428 => 227,  425 => 226,  421 => 225,  415 => 222,  412 => 221,  408 => 220,  390 => 207,  373 => 192,  366 => 188,  363 => 187,  357 => 184,  352 => 182,  349 => 181,  347 => 180,  330 => 166,  299 => 137,  291 => 133,  285 => 129,  276 => 122,  266 => 118,  258 => 113,  252 => 112,  248 => 111,  238 => 104,  229 => 101,  222 => 95,  218 => 94,  212 => 90,  192 => 72,  190 => 71,  179 => 63,  175 => 62,  161 => 53,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/LineIcons.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/materialdesignicons.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}

{% block contenido %}
\t<div class=\"preloader\">
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

\t<div class=\"navigation\">
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
\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.png') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"col-3\">
\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% if cesta | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCesta vacía
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# {{ path('detalles/produCesta.producto.getId()') }} #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('detalles', { 'producto': produCesta.producto.getId() }) }}\">{{produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\" value=\"{{ produCesta.unidades }}\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ produCesta.producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Total precio:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('productos') }}\" class=\"main-btn primary-btn-border\">Actualizar</a> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resumenCesta') }}\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar cart Ends -->
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
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('contacto') }}\">Contacto</a>
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
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('logout') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('login') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar top right Ends -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- navbar top Ends -->

\t\t\t\t<!-- main navbar Start -->
\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t<div class=\"container-lg\">
\t\t\t\t\t\t<nav
\t\t\t\t\t\t\tclass=\"main-navbar d-lg-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t<!-- desktop logo Start -->
\t\t\t\t\t\t\t<div class=\"desktop-logo d-none d-lg-block\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.png') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- desktop logo Ends -->
\t\t\t\t\t\t\t<!-- navbar menu Start -->
\t\t\t\t\t\t\t<div class=\"navbar-menu\">
\t\t\t\t\t\t\t\t<ul class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<li class=\"position-static menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Categorías</a>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Start -->
\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-mega-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mega-dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"container mega-dropdown d-flex flex-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for lista in categorias %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">{{ lista[0].nombre}}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for categoriaSecu in lista[1] %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<!-- sub mega dropdown Ends -->
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('productos') }}\">Productos</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t<li class=\"menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Administrar...</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('admin') }}\">Categorías</a></li>
                                                <li><a href=\"{{ path('admin') }}\">Productos</a></li>
                                                <li><a href=\"{{ path('admin') }}\">Usuarios</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('adminPedidos') }}\">Pedidos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div class=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">{{ unidades }}</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t{% if cesta | length == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tCesta vacía
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for produCesta in cesta %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path('detalles', { 'producto': produCesta.producto.getId() }) }}\">{{produCesta.producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\" value=\"{{ produCesta.unidades }}\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ produCesta.producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Total precio:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">{{ precioCesta }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{ path('productos') }}\" class=\"main-btn primary-btn-border\">Actualizar</a> #}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('resumenCesta') }}\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- navbar cart Ends -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- main navbar Ends -->
\t\t\t</div>
\t\t\t<div class=\"overlay-7\"></div>
\t\t</header>
\t</div>

\t<section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t\t<div class=\"breadcrumb-left\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\">Home</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Productos</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t\t<h5 class=\"heading-5 font-weight-500\">Productos</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section class=\"category-wrapper pt-50\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"filter-style-1 mt-0\">
\t\t\t\t\t\t<div class=\"filter-title\">
\t\t\t\t\t\t\t<h4 class=\"title\">Categorías</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"filter-type\">
\t\t\t\t\t\t\t<div class=\"accordion\" id=\"accordionExample\">
\t\t\t\t\t\t\t\t{% for lista in categorias %}
\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"{{ lista[0].nombre }}\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\".{{ lista[0].nombre }}\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ lista[0].nombre}}
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% for categoriaSecu in lista[1] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"{{ lista[0].nombre }}\" class=\"collapse show\" aria-labelledby=\"{{ lista[0].nombre }}\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"breadcrumb-right\">
\t\t\t\t\t\t\t\t\t<ul class=\"breadcrumb-list-grid nav nav-tabs border-0\" id=\"myTab\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t<a id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-view-grid\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t{% for producto in productos %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-7 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 480px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"100\" height=\"150\" src=\"imagenes/productos/{{ producto.getFoto() }}\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('detalles', {'producto': producto.getId()}) }}\">{{ producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">{{ producto.getPvp() }}€</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('anadir', {'idProducto': producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if producto.getUnidades() == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"{{ asset('images/icon-svg/cart-7.svg') }}\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t{% for producto in productos %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-1 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 828px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 414px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"200\" height=\"300\" src=\"{{ asset('imagenes/productos/') }}{{ producto.getFoto() }}\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('detalles', {'producto': producto.getId()}) }}\">{{ producto.getNombre() }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>{{ producto.getPvp() }}€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"{{ path('anadir', {'idProducto': producto.getId()}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if producto.getUnidades() == 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"{{ asset('images/icon-svg/cart-7.svg') }}\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"{{ producto.getCodigo() }}\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>\t

\t<section class=\"footer-style-3 pt-100 pb-100\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t\t<a href=\"{{ path('index') }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('imagenes/logo-nombre.png') }}\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Síguenos</h5>
\t\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">PRODUCTOS</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Impresión</p>
                                </li>
                                <li>
                                    <p>Libros</p>
                                </li>
                                <li>
                                    <p>Copistería</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">ATENCIÓN AL CLIENTE</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Política de privacidad</p>
                                </li>
                                <li>
                                    <p>Aviso legal</p>
                                </li>
                                <li>
                                    <p>Condiciones de venta</p>
                                </li>
                                <li>
                                    <p>Política de Cookies</p>
                                </li>
                            </ul>
                        </div>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{ asset('js/popper.min.js') }}\"></script>
\t<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('js/vendor/jquery-3.5.1.min.js') }}\"></script>
\t<script src=\"{{ asset('js/vendor/modernizr-3.7.1.min.js') }}\"></script>
\t<script src=\"{{ asset('js/slick.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery-vj-accordion-steps.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.form-validator.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
\t<script src=\"{{ asset('js/jquery.formatter.min.js') }}\"></script>
\t<script src=\"{{ asset('js/count-up.min.js') }}\"></script>
\t<script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
", "productos.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\productos.html.twig");
    }
}
