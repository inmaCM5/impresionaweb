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

/* adminPedidos.html.twig */
class __TwigTemplate_374f31338582f8d774b2956e29fbd3b2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminPedidos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminPedidos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "adminPedidos.html.twig", 1);
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
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/LineIcons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
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
        echo "
    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"navigation\">
        <header class=\"navbar-style-7 position-relative\">
            <div class=\"container\">
                <!-- navbar mobile Start -->
                <div class=\"navbar-mobile d-lg-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-toggle icon-text-btn\">
                                <a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
                                    <i class=\"mdi mdi-menu\"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class=\"col-6\">
                            <!-- desktop logo Start -->
                            <div class=\"mobile-logo text-center\">
                                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                    <span class=\"icon-text text-style-1\">";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "</span>
                                </a>

                                <div class=\"navbar-cart-dropdown\">
                                    <div class=\"checkout-style-2\">
                                        <div class=\"checkout-header d-flex justify-content-between\">
                                            <h6 class=\"title\">Cesta compra</h6>
                                        </div>

                                        <div class=\"checkout-table\">
                                            <table class=\"table\">
                                                <tbody>
                                                        
                                                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 74
            echo "                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 79), "getNombre", [], "method", false, false, false, 79), "html", null, true);
            echo "</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><a class=\"delete\" href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 82), "getId", [], "method", false, false, false, 82)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <form id=\"form_seleccion\" action=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 89), "getId", [], "method", false, false, false, 89)]), "html", null, true);
            echo "\" method=\"post\">
                                                                        <input type=\"number\" name=\"unidades\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 90), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 90), "getUnidades", [], "method", false, false, false, 90), "html", null, true);
            echo "\">
                                                                        <input type='hidden' name='codProduc' value= \"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 91), "getCodigo", [], "method", false, false, false, 91), "html", null, true);
            echo "\" />
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 96), "getPvp", [], "method", false, false, false, 96), "html", null, true);
            echo "???</p>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                                                </tbody>
                                            </table>
                                        </div>

                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Precio total:</p>
                                                <p class=\"price\">";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "???</p>
                                            </div>
                                            <div class=\"checkout-btn\">
                                                <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
        echo "\" class=\"main-btn primary-btn\">Resumen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class=\"navbar-container navbar-sidebar-7\">
                <!-- navbar close  Ends -->
                <div class=\"navbar-close d-lg-none\">
                    <a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\"><i class=\"mdi mdi-close\"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class=\"navbar-top-wrapper\">
                    <div class=\"container-lg\">
                        <div class=\"navbar-top d-lg-flex justify-content-between\">
                            <!-- navbar top left Start -->
                            <div class=\"navbar-top-left\">
                                <ul class=\"navbar-top-link\">
                                    <li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacto");
        echo "\">Contacto</a></li>
                                    <li>
                                        <a href=\"javascript:void(0)\">
                                            <i class=\"mdi mdi-phone-in-talk\"></i>
                                            +34 684 00 10 65
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class=\"navbar-top-right\">
                                <ul class=\"navbar-top-link\">
                                    ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesi??n
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "username", [], "any", false, false, false, 153), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "                                        <li>
                                            <a href=\"";
            // line 157
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesi??n</a>
                                        </li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class=\"navbar-wrapper\">
                    <div class=\"container-lg\">
                        <nav class=\"main-navbar d-lg-flex justify-content-between align-items-center\">
                            <!-- desktop logo Start -->
                            <div class=\"desktop-logo d-none d-lg-block\">
                                <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categor??as</a>
                                        <!-- sub mega dropdown Start -->
                                        <ul class=\"sub-mega-dropdown\">
                                            <li>
                                                <div class=\"mega-dropdown-menu\">
                                                    <ul class=\"container mega-dropdown d-flex flex-wrap\">
                                                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new RuntimeError('Variable "categorias" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 188
            echo "                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lista"], 0, [], "array", false, false, false, 189), "nombre", [], "any", false, false, false, 189), "html", null, true);
            echo "
                                                            </h6>
                                                            <ul>
                                                            ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lista"], 1, [], "array", false, false, false, 192));
            foreach ($context['_seq'] as $context["_key"] => $context["categoriaSecu"]) {
                // line 193
                echo "                                                                <li>
                                                                    <a href=\"";
                // line 194
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productosCat", ["categoria" => twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "getId", [], "method", false, false, false, 194)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriaSecu"], "nombre", [], "any", false, false, false, 194), "html", null, true);
                echo "</a>
                                                                </li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriaSecu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                                            </ul>
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("productos");
        echo "\">Productos</a></li>
                                    ";
        // line 207
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 208
            echo "                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"";
            // line 211
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Categor??as</a></li>
                                                <li><a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Productos</a></li>
                                                <li><a href=\"";
            // line 213
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Usuarios</a></li>
                                                <li><a href=\"";
            // line 214
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPedidos");
            echo "\">Pedidos</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 217
        echo "                                    
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar cart start -->
                                <div class=\"navbar-cart\">
                                    <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                        <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                        <span class=\"icon-text text-style-1\">";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "</span>
                                    </a>

                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Cesta Compra</h6>
                                            </div>

                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                            
                                                        ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 240
            echo "                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 245), "getNombre", [], "method", false, false, false, 245), "html", null, true);
            echo "</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li><a class=\"delete\" href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 248), "getId", [], "method", false, false, false, 248)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 255), "getId", [], "method", false, false, false, 255)]), "html", null, true);
            echo "\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 256), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 256), "getUnidades", [], "method", false, false, false, 256), "html", null, true);
            echo "\">
                                                                            <input type='hidden' name='codProduc' value= \"";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 257), "getCodigo", [], "method", false, false, false, 257), "html", null, true);
            echo "\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 262), "getPvp", [], "method", false, false, false, 262), "html", null, true);
            echo "???</p>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Total precio:</p>
                                                    <p class=\"price\">";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 273, $this->source); })()), "html", null, true);
        echo "???</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("resumenCesta");
        echo "\" class=\"main-btn primary-btn\">Resumen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navbar cart Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class=\"overlay-7\"></div>
        </header>
    </div>

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 301
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Administrar pedidos</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Administrar pedidos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container pt-50\">
        <table class=\"table table-striped contact-style-2\">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Direcci??n</th>
                    <th>Fecha</th>
                    <th>Coste</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 327
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 327, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 328
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["pedido"], "completado", [], "any", false, false, false, 328) == 0)) {
                // line 329
                echo "                        <tr>
                            <td>";
                // line 330
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pedido"], "usuario", [], "any", false, false, false, 330), "usuario", [], "any", false, false, false, 330), "html", null, true);
                echo "</td>
                            <td>";
                // line 331
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pedido"], "usuario", [], "any", false, false, false, 331), "direccion", [], "any", false, false, false, 331), "html", null, true);
                echo "</td>
                            <td>";
                // line 332
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fecha", [], "any", false, false, false, 332), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 333
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "coste", [], "any", false, false, false, 333), "html", null, true);
                echo "</td>
                            <td>
                                <form id=\"form_seleccion\" class=\"d-inline\" action=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedidosProductos", ["idPedido" => twig_get_attribute($this->env, $this->source, $context["pedido"], "getId", [], "method", false, false, false, 335)]), "html", null, true);
                echo "\" method=\"post\">    
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ver pedido\"/>                        
                                </form>
                                <form id=\"form_seleccion\" class=\"d-inline\" action=\"";
                // line 338
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("completarPedido", ["idPedido" => twig_get_attribute($this->env, $this->source, $context["pedido"], "getId", [], "method", false, false, false, 338)]), "html", null, true);
                echo "\" method=\"post\">
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Completar\"/>
                                </form>
                            </td>
                        </tr>
                    ";
            }
            // line 344
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "            </tbody>
        </table>
    </section>
    
\t<section class=\"footer-style-3 pt-100 pb-100\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t\t<a href=\"";
        // line 355
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
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
                                    <p>Impresi??n</p>
                                </li>
                                <li>
                                    <p>Libros</p>
                                </li>
                                <li>
                                    <p>Copister??a</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">ATENCI??N AL CLIENTE</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Pol??tica de privacidad</p>
                                </li>
                                <li>
                                    <p>Aviso legal</p>
                                </li>
                                <li>
                                    <p>Condiciones de venta</p>
                                </li>
                                <li>
                                    <p>Pol??tica de Cookies</p>
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

    // line 421
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 422
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "adminPedidos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 433,  783 => 432,  779 => 431,  775 => 430,  771 => 429,  767 => 428,  763 => 427,  759 => 426,  755 => 425,  751 => 424,  747 => 423,  742 => 422,  732 => 421,  658 => 356,  654 => 355,  642 => 345,  636 => 344,  627 => 338,  621 => 335,  616 => 333,  612 => 332,  608 => 331,  604 => 330,  601 => 329,  598 => 328,  594 => 327,  565 => 301,  537 => 276,  531 => 273,  522 => 266,  512 => 262,  504 => 257,  498 => 256,  494 => 255,  484 => 248,  478 => 245,  471 => 240,  467 => 239,  451 => 226,  440 => 217,  433 => 214,  429 => 213,  425 => 212,  421 => 211,  416 => 208,  414 => 207,  410 => 206,  402 => 200,  394 => 197,  383 => 194,  380 => 193,  376 => 192,  370 => 189,  367 => 188,  363 => 187,  345 => 174,  329 => 160,  323 => 157,  320 => 156,  314 => 153,  310 => 152,  307 => 151,  305 => 150,  289 => 137,  259 => 110,  253 => 107,  244 => 100,  234 => 96,  226 => 91,  220 => 90,  216 => 89,  206 => 82,  200 => 79,  193 => 74,  189 => 73,  173 => 60,  159 => 51,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/LineIcons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/materialdesignicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/default.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
{% endblock %}    

{% block contenido %}

    <div class=\"preloader\">
        <div class=\"loader\">
            <div class=\"ytp-spinner\">
                <div class=\"ytp-spinner-container\">
                    <div class=\"ytp-spinner-rotator\">
                        <div class=\"ytp-spinner-left\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                        <div class=\"ytp-spinner-right\">
                            <div class=\"ytp-spinner-circle\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"navigation\">
        <header class=\"navbar-style-7 position-relative\">
            <div class=\"container\">
                <!-- navbar mobile Start -->
                <div class=\"navbar-mobile d-lg-none\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-toggle icon-text-btn\">
                                <a class=\"icon-btn primary-icon-text mobile-menu-open-7\" href=\"javascript:void(0)\">
                                    <i class=\"mdi mdi-menu\"></i>
                                </a>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                        <div class=\"col-6\">
                            <!-- desktop logo Start -->
                            <div class=\"mobile-logo text-center\">
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.png') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                    <span class=\"icon-text text-style-1\">{{ unidades }}</span>
                                </a>

                                <div class=\"navbar-cart-dropdown\">
                                    <div class=\"checkout-style-2\">
                                        <div class=\"checkout-header d-flex justify-content-between\">
                                            <h6 class=\"title\">Cesta compra</h6>
                                        </div>

                                        <div class=\"checkout-table\">
                                            <table class=\"table\">
                                                <tbody>
                                                        
                                                    {% for produCesta in cesta %}
                                                        <tr>
                                                            <td class=\"checkout-product\">
                                                                <div class=\"product-cart d-flex\">
                                                                    <div class=\"product-content media-body\">
                                                                        <h5 class=\"title\">
                                                                            <a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
                                                                        </h5>
                                                                        <ul>
                                                                            <li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-quantity\">
                                                                <div class=\"product-quantity d-inline-flex\">
                                                                    <form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
                                                                        <input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\">
                                                                        <input type='hidden' name='codProduc' value= \"{{ produCesta.producto.getCodigo() }}\" />
                                                                    </form>
                                                                </div>
                                                            </td>
                                                            <td class=\"checkout-price\">
                                                                <p class=\"price\">{{ produCesta.producto.getPvp() }}???</p>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Precio total:</p>
                                                <p class=\"price\">{{ precioCesta }}???</p>
                                            </div>
                                            <div class=\"checkout-btn\">
                                                <a href=\"{{ path('resumenCesta') }}\" class=\"main-btn primary-btn\">Resumen</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- navbar cart Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar mobile Start -->
            </div>
    
            <div class=\"navbar-container navbar-sidebar-7\">
                <!-- navbar close  Ends -->
                <div class=\"navbar-close d-lg-none\">
                    <a class=\"close-mobile-menu-7\" href=\"javascript:void(0)\"><i class=\"mdi mdi-close\"></i></a>
                </div>
                <!-- navbar close  Ends -->
    
                <!-- navbar top Start -->
                <div class=\"navbar-top-wrapper\">
                    <div class=\"container-lg\">
                        <div class=\"navbar-top d-lg-flex justify-content-between\">
                            <!-- navbar top left Start -->
                            <div class=\"navbar-top-left\">
                                <ul class=\"navbar-top-link\">
                                    <li><a href=\"{{ path('contacto') }}\">Contacto</a></li>
                                    <li>
                                        <a href=\"javascript:void(0)\">
                                            <i class=\"mdi mdi-phone-in-talk\"></i>
                                            +34 684 00 10 65
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar top left Ends -->
                            <!-- navbar top right Start -->
                            <div class=\"navbar-top-right\">
                                <ul class=\"navbar-top-link\">
                                    {% if app.user %}
\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"{{ path('logout') }}\"><i class=\"mdi mdi-account\"></i>Cerrar sesi??n
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
                                        <li>
                                            <a href=\"{{ path('login') }}\"><i class=\"mdi mdi-account\"></i>Iniciar sesi??n</a>
                                        </li>
\t\t\t\t\t\t\t\t\t{% endif %}
                                </ul>
                            </div>
                            <!-- navbar top right Ends -->
                        </div>
                    </div>
                </div>
                <!-- navbar top Ends -->
    
                <!-- main navbar Start -->
                <div class=\"navbar-wrapper\">
                    <div class=\"container-lg\">
                        <nav class=\"main-navbar d-lg-flex justify-content-between align-items-center\">
                            <!-- desktop logo Start -->
                            <div class=\"desktop-logo d-none d-lg-block\">
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.png') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categor??as</a>
                                        <!-- sub mega dropdown Start -->
                                        <ul class=\"sub-mega-dropdown\">
                                            <li>
                                                <div class=\"mega-dropdown-menu\">
                                                    <ul class=\"container mega-dropdown d-flex flex-wrap\">
                                                    {% for lista in categorias %}
                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">{{ lista[0].nombre}}
                                                            </h6>
                                                            <ul>
                                                            {% for categoriaSecu in lista[1] %}
                                                                <li>
                                                                    <a href=\"{{ path('productosCat', {'categoria': categoriaSecu.getId()}) }}\">{{ categoriaSecu.nombre }}</a>
                                                                </li>
                                                            {% endfor %}
                                                            </ul>
                                                        </li>
                                                    {% endfor %}
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <!-- sub mega dropdown Ends -->
                                    </li>
                                    <li><a href=\"{{ path('productos') }}\">Productos</a></li>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li class=\"menu-item-has-children\">
                                            <a href=\"#\">Administrar...</a>
                                            <ul class=\"sub-menu\">
                                                <li><a href=\"{{ path('admin') }}\">Categor??as</a></li>
                                                <li><a href=\"{{ path('admin') }}\">Productos</a></li>
                                                <li><a href=\"{{ path('admin') }}\">Usuarios</a></li>
                                                <li><a href=\"{{ path('adminPedidos') }}\">Pedidos</a></li>
                                            </ul>
                                        </li>
                                    {% endif %}                                    
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar cart start -->
                                <div class=\"navbar-cart\">
                                    <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                        <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                        <span class=\"icon-text text-style-1\">{{ unidades }}</span>
                                    </a>

                                    <div class=\"navbar-cart-dropdown\">
                                        <div class=\"checkout-style-2\">
                                            <div class=\"checkout-header d-flex justify-content-between\">
                                                <h6 class=\"title\">Cesta Compra</h6>
                                            </div>

                                            <div class=\"checkout-table\">
                                                <table class=\"table\">
                                                    <tbody>
                                                            
                                                        {% for produCesta in cesta %}
                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">{{ produCesta.producto.getNombre() }}</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li><a class=\"delete\" href=\"{{ path('eliminarProductosCesta', {'idProducto': produCesta.producto.getId()}) }}\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"{{ path('cambiarUnidades', {'idProducto': produCesta.producto.getId()}) }}\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"{{ produCesta.unidades }}\" size=\"3\" min=\"1\" max=\"{{ produCesta.producto.getUnidades() }}\">
                                                                            <input type='hidden' name='codProduc' value= \"{{ produCesta.producto.getCodigo() }}\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">{{ produCesta.producto.getPvp() }}???</p>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Total precio:</p>
                                                    <p class=\"price\">{{ precioCesta }}???</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"{{ path('resumenCesta') }}\" class=\"main-btn primary-btn\">Resumen</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- navbar cart Ends -->
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- main navbar Ends -->
            </div>
            <div class=\"overlay-7\"></div>
        </header>
    </div>

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"{{ path('index') }}\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Administrar pedidos</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Administrar pedidos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"container pt-50\">
        <table class=\"table table-striped contact-style-2\">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Direcci??n</th>
                    <th>Fecha</th>
                    <th>Coste</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {% for pedido in pedidos %}
                    {% if pedido.completado == 0 %}
                        <tr>
                            <td>{{ pedido.usuario.usuario }}</td>
                            <td>{{ pedido.usuario.direccion }}</td>
                            <td>{{ pedido.fecha | date(\"d/m/Y\") }}</td>
                            <td>{{ pedido.coste }}</td>
                            <td>
                                <form id=\"form_seleccion\" class=\"d-inline\" action=\"{{ path('pedidosProductos', {'idPedido': pedido.getId()}) }}\" method=\"post\">    
                                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ver pedido\"/>                        
                                </form>
                                <form id=\"form_seleccion\" class=\"d-inline\" action=\"{{ path('completarPedido', {'idPedido': pedido.getId()}) }}\" method=\"post\">
                                    <input type=\"submit\" class=\"btn btn-success\" value=\"Completar\"/>
                                </form>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </tbody>
        </table>
    </section>
    
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
\t\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Follow Us</h5>
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
                                    <p>Impresi??n</p>
                                </li>
                                <li>
                                    <p>Libros</p>
                                </li>
                                <li>
                                    <p>Copister??a</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6 col-sm-12\">
                        <div class=\"footer-widget\">
                            <h5 class=\"footer-title\">ATENCI??N AL CLIENTE</h5>

                            <ul class=\"footer-link\">
                                <li>
                                    <p>Pol??tica de privacidad</p>
                                </li>
                                <li>
                                    <p>Aviso legal</p>
                                </li>
                                <li>
                                    <p>Condiciones de venta</p>
                                </li>
                                <li>
                                    <p>Pol??tica de Cookies</p>
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
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/vendor/jquery-3.5.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/vendor/modernizr-3.7.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/slick.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-vj-accordion-steps.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-ui.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.form-validator.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.formatter.min.js') }}\"></script>
    <script src=\"{{ asset('js/count-up.min.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}", "adminPedidos.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\adminPedidos.html.twig");
    }
}
