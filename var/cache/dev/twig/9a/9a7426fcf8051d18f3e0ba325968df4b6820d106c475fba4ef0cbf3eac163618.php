<?php

/* sostenibles/home.html.twig */
class __TwigTemplate_4dab37d45369fe800c02fe7de4f765e3e1f4eba55a3f803ec20aebc40aa4639c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sostenibles/home.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'item4' => array($this, 'block_item4'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/home.html.twig"));

        // line 3
        ob_start();
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 4, $this->source); })()), "persona", array()), "nombre", array())) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 5, $this->source); })()), "persona", array()), "nombre", array()), "html", null, true);
            echo "
    ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
(isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 6, $this->source); })()), "empresa", array()), "nombre", array())) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new Twig_Error_Runtime('Variable "usuario" does not exist.', 7, $this->source); })()), "empresa", array()), "nombre", array()), "html", null, true);
            echo "
    ";
        }
        $context["nombreUsuario"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t
\t<style>
\t
\t\tfieldset .contenido{
\t\t\theight: 300px;
\t\t\toverflow-y: auto;
\t\t\toverflow-x: hidden;
\t\t}
\t\t
\t</style>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Área de usuario";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_item4($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item4"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item4"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 31
        echo "
\t<h1 class=\"banner rounded text-center\">
\t\tHome: ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["nombreUsuario"]) || array_key_exists("nombreUsuario", $context) ? $context["nombreUsuario"] : (function () { throw new Twig_Error_Runtime('Variable "nombreUsuario" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "
\t</h1>

\t<div class=\"row\">
\t\t<div class=\"col-4 col-md-2\">
\t\t\t<img class=\"img-fluid\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/user2.png"), "html", null, true);
        echo "\" alt=\"Foto usuario\">
\t\t</div>
\t\t<div class=\"col-8 col-md-10\">
\t\t\t<div class=\"mb-2\">
\t\t\t\t<strong>Usuario: </strong>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["nombreUsuario"]) || array_key_exists("nombreUsuario", $context) ? $context["nombreUsuario"] : (function () { throw new Twig_Error_Runtime('Variable "nombreUsuario" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a class=\"link\" href=\"#\">Editar perfil</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<fieldset class=\"my-4\">
\t\t\t\t<legend>Notificaciones</legend>

\t\t\t\t<div class=\"contenido\">
\t\t\t\t\t<div class=\"pr-1\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-md-10\">
\t\t\t\t\t\t\t\t<strong>Proyecto Educación Ambiental</strong> <span class=\"text-muted\">(Ref: 18-012)</span>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tCruz Roja ha aceptado tu petición de apadrinamiento.                        
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ban\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-md-10\">
\t\t\t\t\t\t\t\t<strong>Proyecto Playas Accesibles</strong> <span class=\"text-muted\">(Ref: 18-015)</span>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tCruz Roja ha rechazado su petición de apadrinamiento.                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<fieldset class=\"my-4\">
\t\t\t\t<legend>Mis proyectos</legend>

\t\t\t\t<div class=\"contenido\">
\t\t\t\t\t<div class=\"pr-1\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/playa_sucia2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Limpieza de playas</strong><br>
\t\t\t\t\t\t\t\tEn curso
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<a class=\"link\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logo", array("id" => 1));
        echo "\" data-toggle=\"tooltip\" title=\"Acceso a su logo\"><i class=\"far fa-calendar-check\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/senderimos-accesible2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Senderismo accesible</strong><br>
\t\t\t\t\t\t\t\tSolicitud pendiente
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-question\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/playa_sucia2.jpg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Limpieza de playas</strong><br>
\t\t\t\t\t\t\t\tFinalizado el 6/10/2017
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 122,  238 => 107,  227 => 99,  217 => 92,  164 => 42,  157 => 38,  149 => 33,  145 => 31,  136 => 30,  118 => 28,  100 => 26,  76 => 12,  67 => 11,  57 => 1,  50 => 7,  48 => 6,  43 => 5,  40 => 4,  38 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% set nombreUsuario %}
    {% if usuario.persona.nombre %}
        {{ usuario.persona.nombre }}
    {% elseif usuario.empresa.nombre %}
        {{ usuario.empresa.nombre }}
    {% endif %}
{% endset %}

{% block stylesheets %}
\t{{ parent() }}
\t
\t<style>
\t
\t\tfieldset .contenido{
\t\t\theight: 300px;
\t\t\toverflow-y: auto;
\t\t\toverflow-x: hidden;
\t\t}
\t\t
\t</style>
\t
{% endblock %}

{% block title %}Área de usuario{% endblock %}

{% block item4 %}active{% endblock %}

{% block cuerpo %}

\t<h1 class=\"banner rounded text-center\">
\t\tHome: {{ nombreUsuario }}
\t</h1>

\t<div class=\"row\">
\t\t<div class=\"col-4 col-md-2\">
\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/user2.png') }}\" alt=\"Foto usuario\">
\t\t</div>
\t\t<div class=\"col-8 col-md-10\">
\t\t\t<div class=\"mb-2\">
\t\t\t\t<strong>Usuario: </strong>{{ nombreUsuario }}
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a class=\"link\" href=\"#\">Editar perfil</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<fieldset class=\"my-4\">
\t\t\t\t<legend>Notificaciones</legend>

\t\t\t\t<div class=\"contenido\">
\t\t\t\t\t<div class=\"pr-1\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-md-10\">
\t\t\t\t\t\t\t\t<strong>Proyecto Educación Ambiental</strong> <span class=\"text-muted\">(Ref: 18-012)</span>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tCruz Roja ha aceptado tu petición de apadrinamiento.                        
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-ban\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-md-10\">
\t\t\t\t\t\t\t\t<strong>Proyecto Playas Accesibles</strong> <span class=\"text-muted\">(Ref: 18-015)</span>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\tCruz Roja ha rechazado su petición de apadrinamiento.                            
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<fieldset class=\"my-4\">
\t\t\t\t<legend>Mis proyectos</legend>

\t\t\t\t<div class=\"contenido\">
\t\t\t\t\t<div class=\"pr-1\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/playa_sucia2.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Limpieza de playas</strong><br>
\t\t\t\t\t\t\t\tEn curso
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<a class=\"link\" href=\"{{ path('logo', {'id': 1}) }}\" data-toggle=\"tooltip\" title=\"Acceso a su logo\"><i class=\"far fa-calendar-check\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/senderimos-accesible2.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Senderismo accesible</strong><br>
\t\t\t\t\t\t\t\tSolicitud pendiente
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-question\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<hr>

\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-md-3\">
\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('build/img/playa_sucia2.jpg') }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-8 col-sm-4 col-md-7\">
\t\t\t\t\t\t\t\t<strong>Limpieza de playas</strong><br>
\t\t\t\t\t\t\t\tFinalizado el 6/10/2017
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-4 col-md-2 icono h1 text-center\">
\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-times\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>

{% endblock %}
", "sostenibles/home.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\home.html.twig");
    }
}
