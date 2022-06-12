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

/* correo.html.twig */
class __TwigTemplate_594cc0a7b94032f32bf66d087488e268 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h1>Confirmación de compra</h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, ($context["usuario"] ?? null), "html", null, true);
        echo " su número de pedido es ";
        echo twig_escape_filter($this->env, ($context["numPedido"] ?? null), "html", null, true);
        echo "</h3>

<h3>Resumen de su compra:</h3>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Unidades</th>
        <th>Precio</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cesta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 13
            echo "        <tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 14), "getCodigo", [], "method", false, false, false, 14), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 15), "getNombre", [], "method", false, false, false, 15), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["producto"], "unidades", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["producto"], "producto", [], "any", false, false, false, 17), "getPvp", [], "method", false, false, false, 17), "html", null, true);
            echo "€</td>
        <tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "correo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  59 => 13,  55 => 12,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "correo.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\correo.html.twig");
    }
}
