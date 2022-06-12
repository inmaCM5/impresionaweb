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

/* pedidosProductos.html.twig */
class __TwigTemplate_00c3c1f83196037ecc9ff75bbe381cbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidosProductos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedidosProductos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedidosProductos.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
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
            echo "€</p>
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
        echo "€</p>
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
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
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
            echo "\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categorías</a>
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
            echo "\">Categorías y productos</a></li>
                                                <li><a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPedidos");
            echo "\">Pedidos</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 215
        echo "                                    
                                </ul>
                            </div>
                            <!-- navbar menu Ends -->
                            <div class=\"navbar-search-cart d-none d-lg-flex\">
                                <!-- navbar cart start -->
                                <div class=\"navbar-cart\">
                                    <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-svg/cart-1.svg"), "html", null, true);
        echo "\" alt=\"Icon\">
                                        <span class=\"icon-text text-style-1\">";
        // line 224
        echo twig_escape_filter($this->env, (isset($context["unidades"]) || array_key_exists("unidades", $context) ? $context["unidades"] : (function () { throw new RuntimeError('Variable "unidades" does not exist.', 224, $this->source); })()), "html", null, true);
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
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 237, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 238
            echo "                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 243), "getNombre", [], "method", false, false, false, 243), "html", null, true);
            echo "</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li><a class=\"delete\" href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 246), "getId", [], "method", false, false, false, 246)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 253), "getId", [], "method", false, false, false, 253)]), "html", null, true);
            echo "\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 254), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 254), "getUnidades", [], "method", false, false, false, 254), "html", null, true);
            echo "\">
                                                                            <input type='hidden' name='codProduc' value= \"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 255), "getCodigo", [], "method", false, false, false, 255), "html", null, true);
            echo "\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 260), "getPvp", [], "method", false, false, false, 260), "html", null, true);
            echo "€</p>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Total precio:</p>
                                                    <p class=\"price\">";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["precioCesta"]) || array_key_exists("precioCesta", $context) ? $context["precioCesta"] : (function () { throw new RuntimeError('Variable "precioCesta" does not exist.', 271, $this->source); })()), "html", null, true);
        echo "€</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"";
        // line 274
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
        // line 299
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Productos de pedido</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Productos de pedido</h5>
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
                    <th>Código pedido</th>
                    <th>Código producto</th>
                    <th>Unidades</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidosProductos"]) || array_key_exists("pedidosProductos", $context) ? $context["pedidosProductos"] : (function () { throw new RuntimeError('Variable "pedidosProductos" does not exist.', 323, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pedidoProducto"]) {
            // line 324
            echo "                    <tr>
                        <td>";
            // line 325
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pedidoProducto"], "codPedido", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325), "html", null, true);
            echo "</td>
                        <td>";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pedidoProducto"], "codProducto", [], "any", false, false, false, 326), "nombre", [], "any", false, false, false, 326), "html", null, true);
            echo "</td>
                        <td>";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedidoProducto"], "unidades", [], "any", false, false, false, 327), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedidoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 330
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
        // line 340
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 464
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 465
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pedidosProductos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  817 => 476,  813 => 475,  809 => 474,  805 => 473,  801 => 472,  797 => 471,  793 => 470,  789 => 469,  785 => 468,  781 => 467,  777 => 466,  772 => 465,  762 => 464,  630 => 341,  626 => 340,  614 => 330,  605 => 327,  601 => 326,  597 => 325,  594 => 324,  590 => 323,  563 => 299,  535 => 274,  529 => 271,  520 => 264,  510 => 260,  502 => 255,  496 => 254,  492 => 253,  482 => 246,  476 => 243,  469 => 238,  465 => 237,  449 => 224,  445 => 223,  435 => 215,  428 => 212,  424 => 211,  419 => 208,  417 => 207,  413 => 206,  405 => 200,  397 => 197,  386 => 194,  383 => 193,  379 => 192,  373 => 189,  370 => 188,  366 => 187,  348 => 174,  332 => 160,  326 => 157,  323 => 156,  317 => 153,  313 => 152,  310 => 151,  308 => 150,  292 => 137,  262 => 110,  256 => 107,  247 => 100,  237 => 96,  229 => 91,  223 => 90,  219 => 89,  209 => 82,  203 => 79,  196 => 74,  192 => 73,  176 => 60,  172 => 59,  159 => 51,  121 => 15,  111 => 14,  99 => 11,  95 => 10,  91 => 9,  87 => 8,  83 => 7,  79 => 6,  75 => 5,  70 => 4,  60 => 3,  37 => 1,);
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
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                        </div>
                        <div class=\"col-3\">
                            <!-- navbar cart start -->
                            <div class=\"navbar-cart\">
                                <a class=\"icon-btn primary-icon-text icon-text-btn\" href=\"javascript:void(0)\">
                                    <img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
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
                                                                <p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class=\"checkout-footer\">
                                            <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                <p class=\"value\">Precio total:</p>
                                                <p class=\"price\">{{ precioCesta }}€</p>
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
                                            <a href=\"{{ path('logout') }}\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t{{ app.user.username }}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% else %}
                                        <li>
                                            <a href=\"{{ path('login') }}\"><i class=\"mdi mdi-account\"></i>Iniciar sesión</a>
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
                                <a href=\"{{ path('index') }}\"><img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"Logo\" style=\"width: 150px;\"></a>
                            </div>
                            <!-- desktop logo Ends -->
                            <!-- navbar menu Start -->
                            <div class=\"navbar-menu\">
                                <ul class=\"main-menu\">
                                    <li class=\"position-static menu-item-has-children\">
                                        <a href=\"#\">Categorías</a>
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
                                                <li><a href=\"{{ path('admin') }}\">Categorías y productos</a></li>
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
                                        <img src=\"{{ asset('images/icon-svg/cart-1.svg') }}\" alt=\"Icon\">
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
                                                                    <p class=\"price\">{{ produCesta.producto.getPvp() }}€</p>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Total precio:</p>
                                                    <p class=\"price\">{{ precioCesta }}€</p>
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
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Productos de pedido</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Productos de pedido</h5>
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
                    <th>Código pedido</th>
                    <th>Código producto</th>
                    <th>Unidades</th>
                </tr>
            </thead>
            <tbody>
                {% for pedidoProducto in pedidosProductos %}
                    <tr>
                        <td>{{ pedidoProducto.codPedido.id }}</td>
                        <td>{{ pedidoProducto.codProducto.nombre }}</td>
                        <td>{{ pedidoProducto.unidades }}</td>
                    </tr>
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
\t\t\t\t\t\t\t\t<img src=\"{{ asset('imagenes/logo-nombre.jpg') }}\" alt=\"\">
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
{% endblock %}", "pedidosProductos.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\pedidosProductos.html.twig");
    }
}
