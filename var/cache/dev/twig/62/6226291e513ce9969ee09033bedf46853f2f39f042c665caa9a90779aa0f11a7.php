<?php

/* security/login.html.twig */
class __TwigTemplate_554c6558a597c9ebc24ed977f3696b26d456fa6dea270b5fa8751ef0d42600c3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        echo "
    <div class=\"p-3 row justify-content-center\">

        <div class=\"marco col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5\">

            <div class=\"titulo\">
                <h3 class=\"backColor\">INGRESAR</h3>

                <!-- INGRESO FACEBOOK -->
                <div class=\"facebook\">

                    <p>
                        <i class=\"fab fa-facebook-f\"></i>
                        <span class=\"ml-2\">Ingreso con Facebook</span>
                    </p>

                </div>

                <!-- INGRESO GOOGLE -->
                <a href=\"#\">

                    <div class=\"google\">

                        <p>
                            <i class=\"fab fa-google\"></i>
                            <span class=\"ml-2\">Ingreso con Google</span>
                        </p>

                    </div>

                </a>

                ";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "                    <div class=\"error alert alert-danger\">
                        ";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 45, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 48
        echo "
                <!-- INGRESO DIRECTO -->
                ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "_username", array()), 'row');
        echo "
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "_password", array()), 'row');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "entrar", array()), 'row', array("attr" => array("value" => "Enviar", "class" => "btn boton btn-block")));
        echo "

                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "

                <div class=\"centrado\">
                    <a href=\"#\">¿Olvidaste tu contraseña?</a>
                </div>

                <div class=\"text-center mb-3\">
                    ¿No tienes una cuenta registrada? | <strong><a href=\"#\">Registrarse</a></strong>
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
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  145 => 54,  141 => 53,  137 => 52,  132 => 50,  128 => 48,  122 => 45,  119 => 44,  117 => 43,  83 => 11,  74 => 10,  61 => 6,  57 => 5,  54 => 4,  45 => 3,  15 => 1,);
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
                <h3 class=\"backColor\">INGRESAR</h3>

                <!-- INGRESO FACEBOOK -->
                <div class=\"facebook\">

                    <p>
                        <i class=\"fab fa-facebook-f\"></i>
                        <span class=\"ml-2\">Ingreso con Facebook</span>
                    </p>

                </div>

                <!-- INGRESO GOOGLE -->
                <a href=\"#\">

                    <div class=\"google\">

                        <p>
                            <i class=\"fab fa-google\"></i>
                            <span class=\"ml-2\">Ingreso con Google</span>
                        </p>

                    </div>

                </a>

                {% if error %}
                    <div class=\"error alert alert-danger\">
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </div>
                {% endif %}

                <!-- INGRESO DIRECTO -->
                {{ form_start(form, {'attr' : {'novalidate' : 'novalidate'}}) }}

                    {{ form_row(form._username) }}
                    {{ form_row(form._password) }}
                    {{ form_row(form.entrar, {'attr' : {'value' : 'Enviar', 'class' : 'btn boton btn-block'}}) }}

                {{ form_end(form) }}

                <div class=\"centrado\">
                    <a href=\"#\">¿Olvidaste tu contraseña?</a>
                </div>

                <div class=\"text-center mb-3\">
                    ¿No tienes una cuenta registrada? | <strong><a href=\"#\">Registrarse</a></strong>
                </div>

            </div>

        </div>

    </div>

{% endblock %}", "security/login.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\security\\login.html.twig");
    }
}
