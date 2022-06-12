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

/* base.html.twig */
class __TwigTemplate_a17058b0539539a489edb78f385f1c3d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'contenido' => [$this, 'block_contenido'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\thref=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imagenes/logo.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t\t";
        // line 12
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t</head>
\t<body>
\t\t";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "\t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "\t</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Impresiòna
\t\t\t";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
\t\t";
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "\t\t\t<!-- Boton hacia arriba -->
\t\t\t<span class=\"ir-arriba icon-arrow-up2\">";
        // line 19
        echo " <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"25\" fill=\"currentColor\" class=\"bi bi-arrow-up-circle-fill\" viewBox=\"0 0 16 16\">
\t\t\t<path d=\"M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z\"/>
\t\t\t</svg></span>
\t\t";
        // line 22
        $this->displayBlock('contenido', $context, $blocks);
        // line 23
        echo "\t\t";
    }

    // line 22
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  113 => 22,  109 => 23,  107 => 22,  102 => 19,  99 => 18,  95 => 17,  88 => 13,  84 => 12,  76 => 6,  71 => 25,  68 => 24,  66 => 17,  62 => 15,  59 => 12,  55 => 10,  51 => 8,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\base.html.twig");
    }
}
