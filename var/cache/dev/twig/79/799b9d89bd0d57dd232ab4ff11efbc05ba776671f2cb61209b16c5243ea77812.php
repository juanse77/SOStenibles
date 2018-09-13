<?php

/* sostenibles/ingreso.html.twig */
class __TwigTemplate_2268402919e7caae0f2c83ff94331d056c3d0fe6ac0a074a6c4af70b92af1e7f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/ingreso.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/ingreso.html.twig"));

        // line 1
        echo "<div class=\"modal fade modalFormulario\" id=\"inicio-sesion\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body modalTitulo\">
\t\t\t\t<h3 class=\"backColor\">INGRESAR</h3>

\t\t\t\t<button type=\"button\" class=\"close rounded\" data-dismiss=\"modal\">&times;</button>

\t\t\t\t<!-- INGRESO FACEBOOK -->
\t\t\t\t<div class=\"facebook\">

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Facebook</span>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t\t<!-- INGRESO GOOGLE -->
\t\t\t\t<a href=\"#\">

\t\t\t\t\t<div class=\"google\">

\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Google</span>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</a>

\t\t\t\t<!-- INGRESO DIRECTO -->

\t\t\t\t<form method=\"post\" action=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", array("id_usuario" => 1));
        echo "\">

\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"ingEmail\" name=\"ingEmail\" placeholder=\"Correo Electrónico\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"ingPassword\" name=\"ingPassword\" placeholder=\"Contraseña\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block\" value=\"Enviar\" />\t

\t\t\t\t\t<div class=\"centrado\">
\t\t\t\t\t\t<a href=\"#modalPassword\" data-dismiss=\"modal\" data-toggle=\"modal\">¿Olvidaste tu contraseña?</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-3\">          
\t\t\t\t\t\t¿No tienes una cuenta registrada? | <strong><a href=\"#registro\" data-dismiss=\"modal\" data-toggle=\"modal\">Registrarse</a></strong>
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
        return "sostenibles/ingreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 36,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal fade modalFormulario\" id=\"inicio-sesion\" tabindex=\"-1\" role=\"dialog\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content\">

\t\t\t<div class=\"modal-body modalTitulo\">
\t\t\t\t<h3 class=\"backColor\">INGRESAR</h3>

\t\t\t\t<button type=\"button\" class=\"close rounded\" data-dismiss=\"modal\">&times;</button>

\t\t\t\t<!-- INGRESO FACEBOOK -->
\t\t\t\t<div class=\"facebook\">

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Facebook</span>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t\t<!-- INGRESO GOOGLE -->
\t\t\t\t<a href=\"#\">

\t\t\t\t\t<div class=\"google\">

\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"fab fa-google\"></i>
\t\t\t\t\t\t\t<span class=\"ml-2\">Ingreso con Google</span>
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>

\t\t\t\t</a>

\t\t\t\t<!-- INGRESO DIRECTO -->

\t\t\t\t<form method=\"post\" action=\"{{ path('home', {'id_usuario': 1}) }}\">

\t\t\t\t\t<div class=\"form-group\">  
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"far fa-envelope\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"ingEmail\" name=\"ingEmail\" placeholder=\"Correo Electrónico\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<div class=\"input-group\">

\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t<span class=\"input-group-text\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-lock\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"ingPassword\" name=\"ingPassword\" placeholder=\"Contraseña\" required>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-block\" value=\"Enviar\" />\t

\t\t\t\t\t<div class=\"centrado\">
\t\t\t\t\t\t<a href=\"#modalPassword\" data-dismiss=\"modal\" data-toggle=\"modal\">¿Olvidaste tu contraseña?</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-3\">          
\t\t\t\t\t\t¿No tienes una cuenta registrada? | <strong><a href=\"#registro\" data-dismiss=\"modal\" data-toggle=\"modal\">Registrarse</a></strong>
\t\t\t\t\t</div>

\t\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "sostenibles/ingreso.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\ingreso.html.twig");
    }
}
