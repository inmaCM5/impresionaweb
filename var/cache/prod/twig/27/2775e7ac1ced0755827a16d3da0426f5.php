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
class __TwigTemplate_e8fc4f24661d9a5db94e33afe470d6fb extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "productos.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["unidades"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        if ((twig_length_filter($this->env, ($context["cesta"] ?? null)) == 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["cesta"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["precioCesta"] ?? null), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 180)) {
            // line 181
            echo "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 184), "username", [], "any", false, false, false, 184), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 221
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"mega-dropdown-list menu-item-has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = $context["lista"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "nombre", [], "any", false, false, false, 222), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["lista"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null));
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
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 247
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategorias");
            echo "\">Administrar categorías</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 250
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 252
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPedidos");
            echo "\">Administrar pedidos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 256
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- navbar menu Ends -->
\t\t\t\t\t\t\t<div class=\"navbar-search-cart d-none d-lg-flex\">
\t\t\t\t\t\t\t\t<!-- navbar cart start -->
\t\t\t\t\t\t\t\t<div class=\"navbar-cart\">
\t\t\t\t\t\t\t\t\t<a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon-text text-style-1\">";
        // line 264
        echo twig_escape_filter($this->env, ($context["unidades"] ?? null), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"navbar-cart-dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-style-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-header d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">Cesta compra</h6>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t";
        // line 273
        if ((twig_length_filter($this->env, ($context["cesta"] ?? null)) == 0)) {
            // line 274
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
            // line 292
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["cesta"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
                // line 297
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-cart d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content media-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 302
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 302), "getId", [], "method", false, false, false, 302)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 302), "getNombre", [], "method", false, false, false, 302), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"delete\" href=\"";
                // line 305
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 305), "getId", [], "method", false, false, false, 305)]), "html", null, true);
                echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-quantity d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
                // line 312
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 312), "getId", [], "method", false, false, false, 312)]), "html", null, true);
                echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"unidades\" min=\"1\" max=\"";
                // line 313
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 313), "getUnidades", [], "method", false, false, false, 313), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 313), "html", null, true);
                echo "\" size=\"3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
                // line 314
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 314), "getCodigo", [], "method", false, false, false, 314), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"checkout-price\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
                // line 319
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 319), "getPvp", [], "method", false, false, false, 319), "html", null, true);
                echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-sub-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"value\">Total precio:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\">";
            // line 330
            echo twig_escape_filter($this->env, ($context["precioCesta"] ?? null), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkout-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 334
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
            echo "\" class=\"main-btn primary-btn\">Resumen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 338
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
        // line 360
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
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 385
            echo "\t\t\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-header\" id=\"";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = $context["lista"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "nombre", [], "any", false, false, false, 386), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-block text-left\" type=\"button\" data-toggle=\"collapse\" data-target=\".";
            // line 388
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = $context["lista"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "nombre", [], "any", false, false, false, 388), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 389
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = $context["lista"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "nombre", [], "any", false, false, false, 389), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_5 = $context["lista"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 395
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = $context["lista"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "nombre", [], "any", false, false, false, 395), "html", null, true);
                echo "\" class=\"collapse show\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = $context["lista"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null), "nombre", [], "any", false, false, false, 395), "html", null, true);
                echo "\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"link-dark\" href=\"";
                // line 397
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 397)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 397), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 403
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
        // line 429
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 430
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-7 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 480px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 240px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"100\" height=\"150\" src=\"";
            // line 437
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "displayImagen", [], "method", false, false, false, 437), "html", null, true);
            echo "\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 445
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 445)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getNombre", [], "method", false, false, false, 445), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price\">";
            // line 447
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getPvp", [], "method", false, false, false, 447), "html", null, true);
            echo "€</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 448
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir", ["idProducto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 448)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 450
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "getUnidades", [], "method", false, false, false, 450) == 0)) {
                // line 451
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 453
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-7.svg"), "html", null, true);
                echo "\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 455
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getCodigo", [], "method", false, false, false, 455), "html", null, true);
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
        // line 461
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 466
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-style-1 mt-30\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-active slick-initialized slick-slider\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-list draggable\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"slick-track\" style=\"opacity: 1; width: 828px; transform: translate3d(0px, 0px, 0px);\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-item active slick-slide slick-current slick-active\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"0\" style=\"width: 414px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img width=\"200\" height=\"300\" src=\"";
            // line 473
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "displayImagen", [], "method", false, false, false, 473), "html", null, true);
            echo "\" alt=\"product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-content text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 481
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detalles", ["producto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 481)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getNombre", [], "method", false, false, false, 481), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 483
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getPvp", [], "method", false, false, false, 483), "html", null, true);
            echo "€</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<form id=\"form_seleccion\" action=\"";
            // line 484
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadir", ["idProducto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 484)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='unidades' value='1' size='3'/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 486
            if ((twig_get_attribute($this->env, $this->source, $context["producto"], "getUnidades", [], "method", false, false, false, 486) == 0)) {
                // line 487
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-warning mt-2\">Sin stock</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 489
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"main-btn secondary-1-btn\" type=\"image\" name='anadir' src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-7.svg"), "html", null, true);
                echo "\" width=\"55px\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 491
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='hidden' name='codProduc' value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "getCodigo", [], "method", false, false, false, 491), "html", null, true);
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
        // line 497
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
        // line 514
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
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
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
    }

    // line 638
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 639
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  1058 => 650,  1054 => 649,  1050 => 648,  1046 => 647,  1042 => 646,  1038 => 645,  1034 => 644,  1030 => 643,  1026 => 642,  1022 => 641,  1018 => 640,  1013 => 639,  1009 => 638,  883 => 515,  879 => 514,  860 => 497,  847 => 491,  841 => 489,  837 => 487,  835 => 486,  830 => 484,  826 => 483,  819 => 481,  808 => 473,  799 => 466,  795 => 465,  789 => 461,  776 => 455,  770 => 453,  766 => 451,  764 => 450,  759 => 448,  755 => 447,  748 => 445,  737 => 437,  728 => 430,  724 => 429,  696 => 403,  689 => 401,  677 => 397,  669 => 395,  665 => 394,  657 => 389,  653 => 388,  648 => 386,  645 => 385,  641 => 384,  614 => 360,  590 => 338,  582 => 334,  576 => 330,  567 => 323,  557 => 319,  549 => 314,  543 => 313,  539 => 312,  529 => 305,  521 => 302,  514 => 297,  510 => 296,  504 => 292,  484 => 274,  482 => 273,  470 => 264,  466 => 263,  457 => 256,  450 => 252,  445 => 250,  439 => 247,  433 => 243,  431 => 242,  426 => 240,  417 => 233,  409 => 230,  398 => 227,  395 => 226,  391 => 225,  385 => 222,  382 => 221,  378 => 220,  360 => 207,  343 => 192,  336 => 188,  333 => 187,  327 => 184,  322 => 182,  319 => 181,  317 => 180,  300 => 166,  269 => 137,  261 => 133,  255 => 129,  246 => 122,  236 => 118,  228 => 113,  222 => 112,  218 => 111,  208 => 104,  199 => 101,  192 => 95,  188 => 94,  182 => 90,  162 => 72,  160 => 71,  149 => 63,  145 => 62,  131 => 53,  91 => 15,  87 => 14,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "productos.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\productos.html.twig");
    }
}
