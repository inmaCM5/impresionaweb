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

/* adminProductos.html.twig */
class __TwigTemplate_b969ede9e31f71ad004c85f4606589ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "adminProductos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 14
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                                    <img src=\"images/icon-svg/cart-1.svg\" alt=\"Icon\">
                                    <span class=\"icon-text text-style-1\">";
        // line 60
        echo twig_escape_filter($this->env, ($context["unidades"] ?? null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["cesta"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["precioCesta"] ?? null), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 150)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t\t\t<li>
                                            <a href=\"";
            // line 152
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"mdi mdi-account\"></i>Cerrar sesión
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 153), "username", [], "any", false, false, false, 153), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 188
            echo "                                                        <li class=\"mega-dropdown-list menu-item-has-children\">  
                                                            <h6 class=\"heading-6 font-weight-500 mega-title\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = $context["lista"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "nombre", [], "any", false, false, false, 189), "html", null, true);
            echo "
                                                            </h6>
                                                            <ul>
                                                            ";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = $context["lista"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null));
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategorias");
            echo "\">Administrar categorías</a></li>
                                                <li><a href=\"";
            // line 212
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProductos");
            echo "\">Administrar productos</a></li>
                                                <li><a href=\"";
            // line 213
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPedidos");
            echo "\">Administrar pedidos</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 216
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
        // line 225
        echo twig_escape_filter($this->env, ($context["unidades"] ?? null), "html", null, true);
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
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cesta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produCesta"]) {
            // line 239
            echo "                                                            <tr>
                                                                <td class=\"checkout-product\">
                                                                    <div class=\"product-cart d-flex\">
                                                                        <div class=\"product-content media-body\">
                                                                            <h5 class=\"title\">
                                                                                <a href=\"product-details-page.html\">";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 244), "getNombre", [], "method", false, false, false, 244), "html", null, true);
            echo "</a>
                                                                            </h5>
                                                                            <ul>
                                                                                <li><a class=\"delete\" href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductosCesta", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 247), "getId", [], "method", false, false, false, 247)]), "html", null, true);
            echo "\"><i class=\"mdi mdi-delete\"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-quantity\">
                                                                    <div class=\"product-quantity d-inline-flex\">
                                                                        <form id=\"form_seleccion\" action=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cambiarUnidades", ["idProducto" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 254), "getId", [], "method", false, false, false, 254)]), "html", null, true);
            echo "\" method=\"post\">
                                                                            <input type=\"number\" name=\"unidades\" value=\"";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produCesta"], "unidades", [], "any", false, false, false, 255), "html", null, true);
            echo "\" size=\"3\" min=\"1\" max=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 255), "getUnidades", [], "method", false, false, false, 255), "html", null, true);
            echo "\">
                                                                            <input type='hidden' name='codProduc' value= \"";
            // line 256
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 256), "getCodigo", [], "method", false, false, false, 256), "html", null, true);
            echo "\" />
                                                                        </form>
                                                                    </div>
                                                                </td>
                                                                <td class=\"checkout-price\">
                                                                    <p class=\"price\">";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produCesta"], "producto", [], "any", false, false, false, 261), "getPvp", [], "method", false, false, false, 261), "html", null, true);
            echo "€</p>
                                                                </td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produCesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class=\"checkout-footer\">
                                                <div class=\"checkout-sub-total d-flex justify-content-between\">
                                                    <p class=\"value\">Total precio:</p>
                                                    <p class=\"price\">";
        // line 272
        echo twig_escape_filter($this->env, ($context["precioCesta"] ?? null), "html", null, true);
        echo "€</p>
                                                </div>
                                                <div class=\"checkout-btn\">
                                                    <a href=\"";
        // line 275
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
        // line 300
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Administrar productos</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Administrar productos</h5>
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
                    <a href=\"";
        // line 318
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("anadirProducto");
        echo "\" class=\"btn btn-primary float-right mb-4\">Añadir producto</a>
                </tr>
                <tr>
                    <th>Producto</th>
                    <th>Código</th>
                    <th>Unidades</th>
                    <th>Proveedor</th>
                    <th>Precio proveedor</th>
                    <th>PVP</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 332
            echo "                    <tr>
                        <td>
                            <span>
                                <img class=\"rounded\" width=\"60px\" height=\"60px\" src=\"";
            // line 335
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "displayImagen", [], "method", false, false, false, 335), "html", null, true);
            echo "\">
                            </span>
                            ";
            // line 337
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "nombre", [], "any", false, false, false, 337), "html", null, true);
            echo "                       
                        </td>
                        <td>";
            // line 339
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "codigo", [], "any", false, false, false, 339), "html", null, true);
            echo "</td>
                        <td>";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "unidades", [], "any", false, false, false, 340), "html", null, true);
            echo "</td>
                        <td>";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "proveedor", [], "any", false, false, false, 341), "html", null, true);
            echo "</td>
                        <td>";
            // line 342
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "pp", [], "any", false, false, false, 342), "html", null, true);
            echo "€</td>
                        <td>";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "pvp", [], "any", false, false, false, 343), "html", null, true);
            echo "€</td>
                        <td>                            
                            <button type=\"button\" class=\"btn btn-success\">Editar</button>
                            <form id=\"form_seleccion\" class=\"d-inline\" action=\"";
            // line 346
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminarProductos", ["idProducto" => twig_get_attribute($this->env, $this->source, $context["producto"], "getId", [], "method", false, false, false, 346)]), "html", null, true);
            echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Eliminar\"/>
                            </form>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
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
        // line 362
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 363
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
    }

    // line 486
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 487
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 489
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "adminProductos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 498,  808 => 497,  804 => 496,  800 => 495,  796 => 494,  792 => 493,  788 => 492,  784 => 491,  780 => 490,  776 => 489,  772 => 488,  767 => 487,  763 => 486,  637 => 363,  633 => 362,  621 => 352,  609 => 346,  603 => 343,  599 => 342,  595 => 341,  591 => 340,  587 => 339,  582 => 337,  577 => 335,  572 => 332,  568 => 331,  552 => 318,  531 => 300,  503 => 275,  497 => 272,  488 => 265,  478 => 261,  470 => 256,  464 => 255,  460 => 254,  450 => 247,  444 => 244,  437 => 239,  433 => 238,  417 => 225,  406 => 216,  399 => 213,  395 => 212,  391 => 211,  386 => 208,  384 => 207,  380 => 206,  372 => 200,  364 => 197,  353 => 194,  350 => 193,  346 => 192,  340 => 189,  337 => 188,  333 => 187,  315 => 174,  299 => 160,  293 => 157,  290 => 156,  284 => 153,  280 => 152,  277 => 151,  275 => 150,  259 => 137,  229 => 110,  223 => 107,  214 => 100,  204 => 96,  196 => 91,  190 => 90,  186 => 89,  176 => 82,  170 => 79,  163 => 74,  159 => 73,  143 => 60,  129 => 51,  91 => 15,  87 => 14,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adminProductos.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\adminProductos.html.twig");
    }
}
