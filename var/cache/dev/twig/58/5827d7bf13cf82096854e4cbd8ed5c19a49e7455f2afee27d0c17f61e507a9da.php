<?php

/* sostenibles/registro.html.twig */
class __TwigTemplate_1f019fabdeeafed6af4a0014496b38d28a389af3e527dcf6bf1c989ca5f95ec1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/registro.html.twig"));

        // line 1
        echo "
<div class=\"modal fade modalFormulario\" id=\"registro\" role=\"dialog\">

\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body modalTitulo\">

\t\t\t\t<h3>REGISTRARSE</h3>

\t\t\t\t<button type=\"button\" class=\"close rounded\" data-dismiss=\"modal\">&times;</button>

\t\t\t\t<!-- REGISTRO FACEBOOK -->
\t\t\t\t<div class=\"facebook\">

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Facebook</span>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t\t<!-- REGISTRO GOOGLE -->
\t\t\t\t<a href=\"#\">

\t\t\t\t\t<div class=\"google\">

\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Google</span>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</a>

\t\t\t\t<!-- REGISTRO DIRECTO -->  
\t\t\t\t<form method=\"post\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-uppercase\" id=\"regUsuario\" name=\"regUsuario\" placeholder=\"Nombre Completo\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"regEmail\" name=\"regEmail\" placeholder=\"Correo Electrónico\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">             
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">  
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"regPassword\" name=\"regPassword\" placeholder=\"Contraseña\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"checkBox\">  
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input id=\"regPoliticas\" type=\"checkbox\">

\t\t\t\t\t\t\t<small>    
\t\t\t\t\t\t\t\tAl registrarse, usted acepta nuestras condiciones de uso y políticas de privacidad.

\t\t\t\t\t\t\t\t<a class=\"link\" href=\"#\" title=\"condiciones de uso y políticas de privacidad\">Leer más</a>
\t\t\t\t\t\t\t</small>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block\" value=\"Enviar\">\t

\t\t\t\t\t<div class=\"centrado text-center mb-3\">

\t\t\t\t\t\t¿Ya tienes una cuenta registrada? | <strong><a href=\"#inicio-sesion\" data-dismiss=\"modal\" data-toggle=\"modal\">Ingresar</a></strong>

\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>

\t\t</div>

\t</div>

</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/registro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"modal fade modalFormulario\" id=\"registro\" role=\"dialog\">

\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body modalTitulo\">

\t\t\t\t<h3>REGISTRARSE</h3>

\t\t\t\t<button type=\"button\" class=\"close rounded\" data-dismiss=\"modal\">&times;</button>

\t\t\t\t<!-- REGISTRO FACEBOOK -->
\t\t\t\t<div class=\"facebook\">

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Facebook</span>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t\t<!-- REGISTRO GOOGLE -->
\t\t\t\t<a href=\"#\">

\t\t\t\t\t<div class=\"google\">

\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Google</span>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</a>

\t\t\t\t<!-- REGISTRO DIRECTO -->  
\t\t\t\t<form method=\"post\">

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control text-uppercase\" id=\"regUsuario\" name=\"regUsuario\" placeholder=\"Nombre Completo\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"regEmail\" name=\"regEmail\" placeholder=\"Correo Electrónico\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">             
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">  
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"regPassword\" name=\"regPassword\" placeholder=\"Contraseña\" required>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"checkBox\">  
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input id=\"regPoliticas\" type=\"checkbox\">

\t\t\t\t\t\t\t<small>    
\t\t\t\t\t\t\t\tAl registrarse, usted acepta nuestras condiciones de uso y políticas de privacidad.

\t\t\t\t\t\t\t\t<a class=\"link\" href=\"#\" title=\"condiciones de uso y políticas de privacidad\">Leer más</a>
\t\t\t\t\t\t\t</small>

\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block\" value=\"Enviar\">\t

\t\t\t\t\t<div class=\"centrado text-center mb-3\">

\t\t\t\t\t\t¿Ya tienes una cuenta registrada? | <strong><a href=\"#inicio-sesion\" data-dismiss=\"modal\" data-toggle=\"modal\">Ingresar</a></strong>

\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t</div>

\t\t</div>

\t</div>

</div>
", "sostenibles/registro.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\registro.html.twig");
    }
}
