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

/* registro.html.twig */
class __TwigTemplate_199a333bd0af87882187838c694182aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registro.html.twig", 1);
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
        echo "    <div class=\"preloader\">
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
    <!--====== Preloader Part Ends ======-->

    <section class=\"breadcrumbs-wrapper pt-50 pb-50 bg-primary-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"breadcrumbs-style breadcrumbs-style-1 d-md-flex justify-content-between align-items-center\">
                        <div class=\"breadcrumb-left\">
                            <ol class=\"breadcrumb\">
                                <li class=\"breadcrumb-item\">
                                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Home</a>
                                </li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Registro</li>
                            </ol>
                        </div>
                        <div class=\"breadcrumb-right\">
                            <h5 class=\"heading-5 font-weight-500\">Registro</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"login-registration-wrapper pt-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 mx-auto\">
                    <div class=\"login-registration-style-2 mt-50\">
                        <h1 class=\"heading-4 font-weight-500 title\">Registrarse</h1>
                        <div class=\"login-registration-form pt-10\">
                            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        echo "\t
                                <div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "usuario", [], "any", false, false, false, 65), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 70), 'row', ["label" => "Password"]);
        // line 72
        echo "
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "nombre", [], "any", false, false, false, 77), 'row');
        echo "
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "apellidos", [], "any", false, false, false, 82), 'row');
        echo "
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 87), 'row');
        echo "
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "direccion", [], "any", false, false, false, 92), 'row');
        echo "
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"single-form form-default form-border\">
                                    <div class=\"form-input\">
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "telefono", [], "any", false, false, false, 97), 'row');
        echo "
                                    </div>
                                </div>
                                <div class=\"single-form\">
                                    <button class=\"btn primary-btn sign-up\" type=\"submit\">Registrarse                  
                                        <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                                    </button>
                                </div>
                            ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== Footer Style 3 Part Start ======-->
<section class=\"footer-style-3 pt-100 pb-100\">
\t<div class=\"container\">
\t\t<div class=\"footer-top\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-5 col-md-7 col-sm-10\">
\t\t\t\t\t<div class=\"footer-logo text-center\">
\t\t\t\t\t\t<a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo-nombre.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<h5 class=\"heading-5 text-center mt-30\">Síguenos</h5>
\t\t\t\t\t<ul class=\"footer-follow text-center\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-facebook-filled\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/impresionacopisteria/\">
\t\t\t\t\t\t\t\t<i class=\"lni lni-instagram-original\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-widget-wrapper text-center pt-20\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Quest</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Rift S</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Gear VR</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Apps and Games</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Oculus for Business</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">DEVELOPERS</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Docs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Downloads</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Tools</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Developer Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Blog</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Careers</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Brand Centre</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Connect</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6\">
\t\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t\t<h5 class=\"footer-title\">PRODUCT</h5>

\t\t\t\t\t\t<ul class=\"footer-link\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">VR for Good</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Launch Pad</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Creators Lab</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Forums</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">Support</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"footer-copyright text-center\">
\t\t\t<p>Developed by
\t\t\t\t<a href=\"https://graygrids.com/\" rel=\"nofollow\" target=\"_blank\">GrayGrids</a>. Basesd on
\t\t\t\t<a href=\"https://ecommercehtml.com/\" rel=\"nofollow\" target=\"_blank\">eCommerceHTML</a>
\t\t\t</p>
\t\t</div>
\t</div>
</section>

";
    }

    // line 253
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 254
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.5.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-vj-accordion-steps.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form-validator.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.formatter.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/count-up.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 265,  411 => 264,  407 => 263,  403 => 262,  399 => 261,  395 => 260,  391 => 259,  387 => 258,  383 => 257,  379 => 256,  375 => 255,  370 => 254,  366 => 253,  232 => 122,  228 => 121,  209 => 105,  198 => 97,  190 => 92,  182 => 87,  174 => 82,  166 => 77,  159 => 72,  157 => 70,  149 => 65,  143 => 62,  119 => 41,  91 => 15,  87 => 14,  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registro.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\registro.html.twig");
    }
}
