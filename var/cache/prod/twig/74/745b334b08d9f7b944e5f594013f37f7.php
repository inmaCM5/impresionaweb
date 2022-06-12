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
class __TwigTemplate_d63d762ecbbd0006ae9dff71ac69abc2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registroAntiguo(NO-BORRAR).html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
\t<link href=\"css/slick.css\" rel=\"stylesheet\">
\t<link href=\"css/slick-theme.css\" rel=\"stylesheet\">
\t<link href=\"css/styleLogin.css\" rel=\"stylesheet\">
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<div class=\"overlay\">
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "usuario", [], "any", false, false, false, 25), 'row');
        echo "
                ";
        // line 27
        echo "                <br>

                <span class=\"input-item\">
                    <i class=\"fa fa-key\"></i>
                </span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 32), 'row', ["label" => "Password"]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
        echo "
</div>
\t";
    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        echo "\t<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t<script src=\"js/easing.min.js\"></script>
\t<script src=\"js/slick.min.js\"></script>
\t<script src=\"js/main.js\"></script>
    <script src=\"js/scriptLogin.js\"></script>
";
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
        return array (  130 => 67,  126 => 66,  119 => 51,  111 => 46,  99 => 36,  96 => 34,  94 => 32,  87 => 27,  83 => 25,  69 => 14,  66 => 13,  62 => 12,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registroAntiguo(NO-BORRAR).html.twig", "C:\\xampp\\htdocs\\tienda\\tiendaPapel\\templates\\registroAntiguo(NO-BORRAR).html.twig");
    }
}
