<?php

/* security/register.html.twig */
class __TwigTemplate_dc9947e17355e2c571834f074785d3c0f44f06a8bca985acd32abd7c9f83b6ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/login-register.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 11
        echo "    <div class=\"p-3 row justify-content-center\">

        <div class=\"marco col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5\">

            <div class=\"titulo\">

                <h3>REGISTRARSE</h3>

                <!-- REGISTRO FACEBOOK -->
                <div class=\"facebook\">

                    <p>
                        <i class=\"fab fa-facebook-f\"></i>
                        <span class=\"ml-2\">Ingreso con Facebook</span>
                    </p>

                </div>

                <!-- REGISTRO GOOGLE -->
                <a href=\"#\">

                    <div class=\"google\">

                        <p>
                            <i class=\"fab fa-google\"></i>
                            <span class=\"ml-2\">Ingreso con Google</span>
                        </p>

                    </div>

                </a>

                <!-- REGISTRO DIRECTO -->
                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "email", array()), 'row');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "plain_password", array()), 'row');
        echo "

                    <input type=\"submit\" name=\"registro\" id=\"registro\" value=\"Enviar\" class=\"btn boton btn-block\">

                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "

                <div class=\"centrado text-center mb-3\">

                    ¿Ya tienes una cuenta registrada? | <strong><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\">Ingresar</a></strong>

                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 55,  134 => 51,  127 => 47,  123 => 46,  118 => 44,  83 => 11,  74 => 10,  61 => 6,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}

    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('build/css/login-register.css') }}\">

{% endblock %}

{% block cuerpo %}
    <div class=\"p-3 row justify-content-center\">

        <div class=\"marco col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5\">

            <div class=\"titulo\">

                <h3>REGISTRARSE</h3>

                <!-- REGISTRO FACEBOOK -->
                <div class=\"facebook\">

                    <p>
                        <i class=\"fab fa-facebook-f\"></i>
                        <span class=\"ml-2\">Ingreso con Facebook</span>
                    </p>

                </div>

                <!-- REGISTRO GOOGLE -->
                <a href=\"#\">

                    <div class=\"google\">

                        <p>
                            <i class=\"fab fa-google\"></i>
                            <span class=\"ml-2\">Ingreso con Google</span>
                        </p>

                    </div>

                </a>

                <!-- REGISTRO DIRECTO -->
                {{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}}) }}

                    {{ form_row(form.email) }}
                    {{ form_row(form.plain_password) }}

                    <input type=\"submit\" name=\"registro\" id=\"registro\" value=\"Enviar\" class=\"btn boton btn-block\">

                {{ form_end(form) }}

                <div class=\"centrado text-center mb-3\">

                    ¿Ya tienes una cuenta registrada? | <strong><a href=\"{{ path('security_login') }}\">Ingresar</a></strong>

                </div>
            </div>

        </div>

    </div>

{% endblock %}", "security/register.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\security\\register.html.twig");
    }
}
