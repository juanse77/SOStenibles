<?php

/* sostenibles/contacto.html.twig */
class __TwigTemplate_d98c6d4c947f239510439eed4814746fe7d815818270772271d1708cc8474fb6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sostenibles/contacto.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/contacto.html.twig"));

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
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

\t<style>

\t\t#map {
\t\t\theight: 380px;
\t\t\twidth: 100%;
\t\t}

\t\ttextarea{
\t\t\theight: 265px;
\t\t}

\t</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto SOStenibles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 24
        echo "
\t<div class=\"text-center banner rounded\"><h1>Contacto</h1></div>

\t<hr>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<address>
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Dirección:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\tCalle León y Castillo 231, Las Palmas de Gran Canaria. CP 35005.
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<hr class=\"linea\">

\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Teléfono:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t928 29 00 00
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr class=\"linea\">
\t\t\t\t
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\tinfo@sostenibles.org
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</address>
\t\t\t<div class=\"my-4\" id=\"map\"></div>
\t\t</div>

\t\t<hr class=\"linea\">

\t\t<div class=\"col-lg-6\">

\t\t\t<form>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Formulario de contacto</legend>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"usuario\" class=\"col-xl-2 col-form-label\"><strong>Usuario:</strong></label>
\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"usuario\" value=\"Nombre usuario\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"asunto\" class=\"col-xl-2 col-form-label\"><strong>Asunto:</strong></label>
\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"asunto\" placeholder=\"Asunto\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"mensaje\" class=\"col-form-label\"><strong>Mensaje:</strong></label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"mensaje\" placeholder=\"Escriba aquí su mensaje...\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<button class=\"btn ml-auto\" type=\"reset\">Limpiar</button>
\t\t\t\t\t\t<button class=\"btn ml-2\" type=\"submit\">Enviar</button>
\t\t\t\t\t</div>    
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

\t<!-- Google Maps -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCel3wtMYqoCUbVdjzW4zgJdDJ9XrfcRjk&callback=initMap\" async defer></script>\t

\t<script>
\t\tvar map;
\t\tvar cruzRoja = [\"Cruz Roja SOStenibles\", 28.12325, -15.428128, \"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/LogoCR_ico.JPG"), "html", null, true);
        echo "\"];

\t\tfunction initMap() {
\t\t\tmap = new google.maps.Map(document.getElementById('map'), {
\t\t\t\tcenter: {lat: cruzRoja[1], lng: cruzRoja[2]},
\t\t\t\tzoom: 14
\t\t\t});

\t\t\tmarker = new google.maps.Marker({
\t\t\t\tposition: new google.maps.LatLng(cruzRoja[1], cruzRoja[2]),
\t\t\t\tmap: map,
\t\t\t\ticon: cruzRoja[3],
\t\t\t\ttitle: cruzRoja[0]
\t\t\t});
\t\t}

\t</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 110,  205 => 103,  196 => 102,  110 => 24,  101 => 23,  83 => 21,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t{{ parent() }}

\t<style>

\t\t#map {
\t\t\theight: 380px;
\t\t\twidth: 100%;
\t\t}

\t\ttextarea{
\t\t\theight: 265px;
\t\t}

\t</style>

{% endblock %}

{% block title %}Contacto SOStenibles{% endblock %}

{% block cuerpo %}

\t<div class=\"text-center banner rounded\"><h1>Contacto</h1></div>

\t<hr>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<address>
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Dirección:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\tCalle León y Castillo 231, Las Palmas de Gran Canaria. CP 35005.
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<hr class=\"linea\">

\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Teléfono:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t928 29 00 00
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr class=\"linea\">
\t\t\t\t
\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\tinfo@sostenibles.org
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</address>
\t\t\t<div class=\"my-4\" id=\"map\"></div>
\t\t</div>

\t\t<hr class=\"linea\">

\t\t<div class=\"col-lg-6\">

\t\t\t<form>
\t\t\t\t<fieldset>
\t\t\t\t\t<legend>Formulario de contacto</legend>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"usuario\" class=\"col-xl-2 col-form-label\"><strong>Usuario:</strong></label>
\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"usuario\" value=\"Nombre usuario\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group row\">
\t\t\t\t\t\t<label for=\"asunto\" class=\"col-xl-2 col-form-label\"><strong>Asunto:</strong></label>
\t\t\t\t\t\t<div class=\"col-xl-10\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"asunto\" placeholder=\"Asunto\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"mensaje\" class=\"col-form-label\"><strong>Mensaje:</strong></label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"mensaje\" placeholder=\"Escriba aquí su mensaje...\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<button class=\"btn ml-auto\" type=\"reset\">Limpiar</button>
\t\t\t\t\t\t<button class=\"btn ml-2\" type=\"submit\">Enviar</button>
\t\t\t\t\t</div>    
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>

{% endblock %}

{% block javascripts %}
\t{{ parent() }}

\t<!-- Google Maps -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCel3wtMYqoCUbVdjzW4zgJdDJ9XrfcRjk&callback=initMap\" async defer></script>\t

\t<script>
\t\tvar map;
\t\tvar cruzRoja = [\"Cruz Roja SOStenibles\", 28.12325, -15.428128, \"{{ asset('build/img/LogoCR_ico.JPG') }}\"];

\t\tfunction initMap() {
\t\t\tmap = new google.maps.Map(document.getElementById('map'), {
\t\t\t\tcenter: {lat: cruzRoja[1], lng: cruzRoja[2]},
\t\t\t\tzoom: 14
\t\t\t});

\t\t\tmarker = new google.maps.Marker({
\t\t\t\tposition: new google.maps.LatLng(cruzRoja[1], cruzRoja[2]),
\t\t\t\tmap: map,
\t\t\t\ticon: cruzRoja[3],
\t\t\t\ttitle: cruzRoja[0]
\t\t\t});
\t\t}

\t</script>

{% endblock %}", "sostenibles/contacto.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\contacto.html.twig");
    }
}
