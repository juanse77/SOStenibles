<?php

/* sostenibles/proyectos.html.twig */
class __TwigTemplate_095c7a4730dc474e049b4443ca220aec456b233d925d9cf02fe283496cdcd906 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sostenibles/proyectos.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'criterio' => array($this, 'block_criterio'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/proyectos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/proyectos.html.twig"));

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
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/paginador.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuestros proyectos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_criterio($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criterio"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "criterio"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "q"), "method"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 13
        echo "\t<div class=\"banner rounded\">
        <h1>Comienza tu compromiso con el medioambiente</h1>
        <h2>Tenemos ";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["num_proyectos_activos"]) || array_key_exists("num_proyectos_activos", $context) ? $context["num_proyectos_activos"] : (function () { throw new Twig_Error_Runtime('Variable "num_proyectos_activos" does not exist.', 15, $this->source); })())), "html", null, true);
        echo " proyectos a la espera de ser apadrinados</h2>
\t</div>

\t<hr class=\"bg-dark\">

\t<div class=\"row\">

        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 23
            echo "
\t\t\t<article class=\"col-md-6 pr-md-4\">

\t\t\t\t<h3 class=\"text-center\"><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyecto", array("slug" => twig_get_attribute($this->env, $this->source, $context["proyecto"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyecto"], "nombre", array()), "html", null, true);
            echo "</a></h3>

\t\t\t\t<figure>
\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("build/img/" . twig_get_attribute($this->env, $this->source, $context["proyecto"], "foto", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyecto"], "nombre", array()), "html", null, true);
            echo "\">
\t\t\t\t</figure>
\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proyecto", array("slug" => twig_get_attribute($this->env, $this->source, $context["proyecto"], "slug", array()))), "html", null, true);
            echo "\" class=\"link\">Leer más...</a></p>

\t\t\t\t<h4 class=\"mb-3\"><strong>Necesidad:</strong> 10 voluntarios, 100€</h4>

\t\t\t\t<div class=\"progress\">
\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 36%;\" aria-valuemin=\"0\" aria-valuemax=\"100\">36%</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"h3\" id=\"like1\">
\t\t\t\t\t\t<a id=\"corazon";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyecto"], "id", array()), "html", null, true);
            echo "\" href=\"javascript:void(0);\" onclick=\"gustar(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyecto"], "id", array()), "html", null, true);
            echo ");\"><i class=\"far fa-heart\"></i></a> <span id=\"likes";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["proyecto"], "id", array()), "html", null, true);
            echo "\">12</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h2 textoRojo\">
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-twitter-square\"></i></a>
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-google-plus-square\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"subir\">
\t\t\t\t\t\t<button class=\"btn\">Apadrinar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<hr class=\"linea\">

\t\t\t</article>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
\t</div>

\t<div class=\"paginador\">
        ";
        // line 62
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 62, $this->source); })()));
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t
\t<!--Javascript personal-->
\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/js/script.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/proyectos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 71,  226 => 68,  217 => 67,  203 => 62,  197 => 58,  170 => 41,  157 => 31,  150 => 29,  142 => 26,  137 => 23,  133 => 22,  123 => 15,  119 => 13,  110 => 12,  92 => 10,  74 => 8,  62 => 5,  57 => 4,  48 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" href=\"{{ asset('build/css/paginador.css') }}\">
{% endblock %}

{% block title %}Nuestros proyectos{% endblock %}

{% block criterio %}{{ app.request.query.get('q') }}{% endblock %}

{% block cuerpo %}
\t<div class=\"banner rounded\">
        <h1>Comienza tu compromiso con el medioambiente</h1>
        <h2>Tenemos {{ num_proyectos_activos|number_format }} proyectos a la espera de ser apadrinados</h2>
\t</div>

\t<hr class=\"bg-dark\">

\t<div class=\"row\">

        {% for proyecto in pagination %}

\t\t\t<article class=\"col-md-6 pr-md-4\">

\t\t\t\t<h3 class=\"text-center\"><a href=\"{{ path('proyecto', {'slug': proyecto.slug }) }}\">{{ proyecto.nombre }}</a></h3>

\t\t\t\t<figure>
\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"{{ asset('build/img/'~proyecto.foto) }}\" alt=\"{{ proyecto.nombre }}\">
\t\t\t\t</figure>
\t\t\t\t<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex cum nulla quibusdam saepe repudiandae vitae facilis nobis dolores quasi, quis quidem non nihil suscipit? Tempora repellat explicabo nisi <a href=\"{{ path('proyecto', {'slug' : proyecto.slug}) }}\" class=\"link\">Leer más...</a></p>

\t\t\t\t<h4 class=\"mb-3\"><strong>Necesidad:</strong> 10 voluntarios, 100€</h4>

\t\t\t\t<div class=\"progress\">
\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 36%;\" aria-valuemin=\"0\" aria-valuemax=\"100\">36%</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t<div class=\"h3\" id=\"like1\">
\t\t\t\t\t\t<a id=\"corazon{{ proyecto.id }}\" href=\"javascript:void(0);\" onclick=\"gustar({{ proyecto.id }});\"><i class=\"far fa-heart\"></i></a> <span id=\"likes{{ proyecto.id }}\">12</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"h2 textoRojo\">
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-facebook-square\"></i></a>
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-twitter-square\"></i></a>
\t\t\t\t\t\t<a class=\"like\" href=\"#\"><i class=\"fab fa-google-plus-square\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"subir\">
\t\t\t\t\t\t<button class=\"btn\">Apadrinar</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<hr class=\"linea\">

\t\t\t</article>

\t\t{% endfor %}

\t</div>

\t<div class=\"paginador\">
        {{ knp_pagination_render(pagination) }}
\t</div>

{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t
\t<!--Javascript personal-->
\t<script src=\"{{ asset('build/js/script.js') }}\"></script>

{% endblock %}", "sostenibles/proyectos.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\proyectos.html.twig");
    }
}
