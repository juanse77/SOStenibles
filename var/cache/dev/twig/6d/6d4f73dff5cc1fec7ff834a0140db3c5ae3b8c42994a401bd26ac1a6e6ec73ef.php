<?php

/* @KnpPaginator/Pagination/sliding_personalizado.html.twig */
class __TwigTemplate_5acb7862da52de0af2534042b14e51ab3346679ff5479209a3e114ec0d26caa7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding_personalizado.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding_personalizado.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new Twig_Error_Runtime('Variable "pageCount" does not exist.', 3, $this->source); })()) > 1)) {
            // line 4
            echo "<div class=\"btn-toolbar mb-3 d-flex justify-content-center\" role=\"toolbar\" aria-label=\"Paginador\">

    ";
            // line 6
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 7
                echo "        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Atrás\">
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 8, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 8, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 8, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new Twig_Error_Runtime('Variable "previous" does not exist.', 8, $this->source); })())))), "html", null, true);
                echo "\" class=\"btn boton\"><i class=\"fas fa-chevron-left\"></i></a>
        </div>
    ";
            }
            // line 11
            echo "
    ";
            // line 12
            if (((isset($context["first"]) || array_key_exists("first", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 12, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 12, $this->source); })())))) {
                // line 13
                echo "        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Primera página\">
            <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 14, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 14, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 14, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 14, $this->source); })())))), "html", null, true);
                echo "\" class=\"btn boton\">";
                echo twig_escape_filter($this->env, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new Twig_Error_Runtime('Variable "first" does not exist.', 14, $this->source); })()), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 17
            echo "
    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Páginas centrales\">

        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new Twig_Error_Runtime('Variable "pagesInRange" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "
            ";
                // line 22
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 23, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 23, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 23, $this->source); })()) => $context["page"]))), "html", null, true);
                    echo "\" class=\"btn boton\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 25
                    echo "                <div class=\"btn boton activo\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</div>
            ";
                }
                // line 27
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
    </div>

    ";
            // line 32
            if (((isset($context["last"]) || array_key_exists("last", $context)) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new Twig_Error_Runtime('Variable "current" does not exist.', 32, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 32, $this->source); })())))) {
                // line 33
                echo "        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Última página\">
            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 34, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 34, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 34, $this->source); })())))), "html", null, true);
                echo "\" class=\"btn boton\">";
                echo twig_escape_filter($this->env, (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new Twig_Error_Runtime('Variable "last" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "</a>
        </div>
    ";
            }
            // line 37
            echo "
    ";
            // line 38
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 39
                echo "        <div class=\"btn-group\" role=\"group\" aria-label=\"Adelante\">
            <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 40, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 40, $this->source); })()), array((isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new Twig_Error_Runtime('Variable "pageParameterName" does not exist.', 40, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new Twig_Error_Runtime('Variable "next" does not exist.', 40, $this->source); })())))), "html", null, true);
                echo "\" class=\"btn boton\"><i class=\"fas fa-chevron-right\"></i></a>
        </div>
    ";
            }
            // line 43
            echo "
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sliding_personalizado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 43,  126 => 40,  123 => 39,  121 => 38,  118 => 37,  110 => 34,  107 => 33,  105 => 32,  100 => 29,  93 => 27,  87 => 25,  79 => 23,  77 => 22,  74 => 21,  70 => 20,  65 => 17,  57 => 14,  54 => 13,  52 => 12,  49 => 11,  43 => 8,  40 => 7,  38 => 6,  34 => 4,  32 => 3,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# default Sliding pagination control implementation #}

{% if pageCount > 1 %}
<div class=\"btn-toolbar mb-3 d-flex justify-content-center\" role=\"toolbar\" aria-label=\"Paginador\">

    {% if previous is defined %}
        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Atrás\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"btn boton\"><i class=\"fas fa-chevron-left\"></i></a>
        </div>
    {% endif %}

    {% if first is defined and current != first %}
        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Primera página\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" class=\"btn boton\">{{ first }}</a>
        </div>
    {% endif %}

    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Páginas centrales\">

        {% for page in pagesInRange %}

            {% if page != current %}
                <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"btn boton\">{{ page }}</a>
            {% else %}
                <div class=\"btn boton activo\">{{ page }}</div>
            {% endif %}

        {% endfor %}

    </div>

    {% if last is defined and current != last %}
        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Última página\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" class=\"btn boton\">{{ last }}</a>
        </div>
    {% endif %}

    {% if next is defined %}
        <div class=\"btn-group\" role=\"group\" aria-label=\"Adelante\">
            <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"btn boton\"><i class=\"fas fa-chevron-right\"></i></a>
        </div>
    {% endif %}

</div>
{% endif %}
", "@KnpPaginator/Pagination/sliding_personalizado.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\sliding_personalizado.html.twig");
    }
}
