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

/* registroAntiguo(NO-BORRAR).html.twig */
class __TwigTemplate_af1f0a495c30aa81b5ce5a0f0a076bf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registroAntiguo(NO-BORRAR).html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registroAntiguo(NO-BORRAR).html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registroAntiguo(NO-BORRAR).html.twig", 1);
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
        echo "\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
\t<link href=\"css/slick.css\" rel=\"stylesheet\">
\t<link href=\"css/slick-theme.css\" rel=\"stylesheet\">
\t<link href=\"css/styleLogin.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "<div class=\"overlay\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), 'form_start');
        echo "\t        \t    
        <div class=\"con\">
            <header class=\"head-form\">
                <h2>Registrarse</h2>
                <p>login here using your username and password</p>
            </header>
            <br>
            <div class=\"field-set\">
                <span class=\"input-item\">
                    <i class=\"fa fa-user-circle\"></i>
                </span>
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "usuario", [], "any", false, false, false, 25), 'row');
        echo "
                ";
        // line 27
        echo "                <br>

                <span class=\"input-item\">
                    <i class=\"fa fa-key\"></i>
                </span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "plainPassword", [], "any", false, false, false, 32), 'row', ["label" => "Password"]);
        // line 34
        echo "
                ";
        // line 36
        echo "
                <span>
                    <i class=\"fa fa-eye\" aria-hidden=\"true\" type=\"button\" id=\"eye\"></i>
                </span>
            </div>
            <div class=\"other\">
                <button class=\"btn sign-up\" type=\"submit\">Register                    
                    <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                </button>
                <br>
                <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    <i class=\"bi bi-arrow-left\"></i>
                    Volver al menú</a>
            </div>
        </div>
    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t<script src=\"js/easing.min.js\"></script>
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/main.js\"></script>
    <script src=\"js/scriptLogin.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registroAntiguo(NO-BORRAR).html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 67,  162 => 66,  149 => 51,  141 => 46,  129 => 36,  126 => 34,  124 => 32,  117 => 27,  113 => 25,  99 => 14,  96 => 13,  86 => 12,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
\t<link href=\"css/slick.css\" rel=\"stylesheet\">
\t<link href=\"css/slick-theme.css\" rel=\"stylesheet\">
\t<link href=\"css/styleLogin.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"overlay\">
    {{ form_start(registrationForm) }}\t        \t    
        <div class=\"con\">
            <header class=\"head-form\">
                <h2>Registrarse</h2>
                <p>login here using your username and password</p>
            </header>
            <br>
            <div class=\"field-set\">
                <span class=\"input-item\">
                    <i class=\"fa fa-user-circle\"></i>
                </span>
                {{ form_row(registrationForm.usuario) }}
                {# <input class=\"form-input\" id=\"username\" type=\"text\" placeholder=\"Usuario\" name=\"_username\" required> #}
                <br>

                <span class=\"input-item\">
                    <i class=\"fa fa-key\"></i>
                </span>
                {{ form_row(registrationForm.plainPassword, {
\t                label: 'Password'
\t            }) }}
                {# <input class=\"form-input\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\" required> #}

                <span>
                    <i class=\"fa fa-eye\" aria-hidden=\"true\" type=\"button\" id=\"eye\"></i>
                </span>
            </div>
            <div class=\"other\">
                <button class=\"btn sign-up\" type=\"submit\">Register                    
                    <i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>
                </button>
                <br>
                <a href=\"{{ path('index') }}\">
                    <i class=\"bi bi-arrow-left\"></i>
                    Volver al menú</a>
            </div>
        </div>
    {{ form_end(registrationForm) }}
</div>
\t{# <h1>Registro</h1>
\t
\t    {{ form_start(registrationForm) }}
\t        {{ form_row(registrationForm.usuario) }}
\t        {{ form_row(registrationForm.plainPassword, {
\t            label: 'Password'
\t        }) }}
\t        {{ form_row(registrationForm.agreeTerms) }}
\t
\t        <button type=\"submit\" class=\"btn\">Register</button>
\t    {{ form_end(registrationForm) }} #}
{% endblock %}

{% block javascripts %}
\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t<script src=\"js/easing.min.js\"></script>
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/main.js\"></script>
    <script src=\"js/scriptLogin.js\"></script>
{% endblock %}", "registroAntiguo(NO-BORRAR).html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\registroAntiguo(NO-BORRAR).html.twig");
    }
}
