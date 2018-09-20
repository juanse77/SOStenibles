<?php

/* sostenibles/proyecto.html.twig */
class __TwigTemplate_539504bf71b8620ddb01b8e5113efa500aa132fe40669ff317b7e475596bf11e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sostenibles/proyecto.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'item2' => array($this, 'block_item2'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/proyecto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/proyecto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 3, $this->source); })()), "nombre", array()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_item2($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item2"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 8
        echo "
\t<h3>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 9, $this->source); })()), "nombre", array()), "html", null, true);
        echo "</h3>
\t<figure>
\t\t<img class=\"img-fluid rounded imgIzq\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 11, $this->source); })()), "foto", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 11, $this->source); })()), "nombre", array()), "html", null, true);
        echo "\">
\t</figure>

\t";
        // line 14
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 14, $this->source); })()), "descripcion", array()), "html", null, true));
        echo "

\t<h4 class=\"mb-3\"><strong>Necesidad:</strong> 10 voluntarios, 100€</h4>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"progress\">
\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 36%;\" aria-valuemin=\"0\" aria-valuemax=\"100\">36%</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"d-flex justify-content-between subir\">
\t\t\t\t<div class=\"h3\" id=\"like1\">
\t\t\t\t\t<a id=\"corazon";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 28, $this->source); })()), "id", array()), "html", null, true);
        echo "\" href=\"javascript:void(0);\" onclick=\"gustar(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 28, $this->source); })()), "id", array()), "html", null, true);
        echo ");\"><i class=\"far fa-heart\"></i></a> <span id=\"likes";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["proyecto"]) || array_key_exists("proyecto", $context) ? $context["proyecto"] : (function () { throw new Twig_Error_Runtime('Variable "proyecto" does not exist.', 28, $this->source); })()), "id", array()), "html", null, true);
        echo "\">12</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"h2 textoRojo\">
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-twitter-square\"></i></a>
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-google-plus-square\"></i></a>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<button class=\"btn\">Apadrinar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<!--Javascript personal-->
\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/proyecto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 50,  165 => 47,  156 => 46,  125 => 28,  108 => 14,  100 => 11,  95 => 9,  92 => 8,  83 => 7,  65 => 5,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ proyecto.nombre }}{% endblock %}

{% block item2 %}active{% endblock %}

{% block cuerpo %}

\t<h3>{{ proyecto.nombre }}</h3>
\t<figure>
\t\t<img class=\"img-fluid rounded imgIzq\" src=\"{{ asset('build/img/'~proyecto.foto) }}\" alt=\"{{ proyecto.nombre }}\">
\t</figure>

\t{{ proyecto.descripcion|nl2br }}

\t<h4 class=\"mb-3\"><strong>Necesidad:</strong> 10 voluntarios, 100€</h4>

\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"progress\">
\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 36%;\" aria-valuemin=\"0\" aria-valuemax=\"100\">36%</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"d-flex justify-content-between subir\">
\t\t\t\t<div class=\"h3\" id=\"like1\">
\t\t\t\t\t<a id=\"corazon{{ proyecto.id }}\" href=\"javascript:void(0);\" onclick=\"gustar({{ proyecto.id }});\"><i class=\"far fa-heart\"></i></a> <span id=\"likes{{ proyecto.id }}\">12</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"h2 textoRojo\">
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-twitter-square\"></i></a>
\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-google-plus-square\"></i></a>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<button class=\"btn\">Apadrinar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t
\t<!--Javascript personal-->
\t<script src=\"{{ asset('build/js/script.js') }}\"></script>

{% endblock %}", "sostenibles/proyecto.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\proyecto.html.twig");
    }
}
