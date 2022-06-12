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
class __TwigTemplate_9a92c16804efa4de465c036ba0d8e548 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "correo.html.twig"));

        // line 1
        echo "<h1>Confirmación de compra</h1>
<h3>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 2, $this->source); })()), "html", null, true);
        echo " su número de pedido es ";
        echo twig_escape_filter($this->env, (isset($context["numPedido"]) || array_key_exists("numPedido", $context) ? $context["numPedido"] : (function () { throw new RuntimeError('Variable "numPedido" does not exist.', 2, $this->source); })()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["cesta"]) || array_key_exists("cesta", $context) ? $context["cesta"] : (function () { throw new RuntimeError('Variable "cesta" does not exist.', 12, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  89 => 20,  80 => 17,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  61 => 12,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Confirmación de compra</h1>
<h3>{{ usuario }} su número de pedido es {{ numPedido }}</h3>

<h3>Resumen de su compra:</h3>
<table>
    <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Unidades</th>
        <th>Precio</th>
    </tr>
    {% for producto in cesta %}
        <tr>
            <td>{{ producto.producto.getCodigo() }}</td>
            <td>{{ producto.producto.getNombre() }}</td>
            <td>{{ producto.unidades}}</td>
            <td>{{ producto.producto.getPvp() }}€</td>
        <tr>
    {% endfor %}
</table>", "correo.html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\correo.html.twig");
    }
}
