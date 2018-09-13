<?php

/* sostenibles/index.html.twig */
class __TwigTemplate_4a3c31bfc1280067f836db758bee472f83271c8a2786b06a77238b116782b9a6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sostenibles/index.html.twig", 1);
        $this->blocks = array(
            'cabecera' => array($this, 'block_cabecera'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sostenibles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_cabecera($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cabecera"));

        // line 4
        echo "\t";
        $this->displayParentBlock("cabecera", $context, $blocks);
        echo "
\t
\t<div id=\"carrusel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t</ol>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/playa_accesible.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Playas accesibles</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por Prótesis Taliarte</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/playa_sucia1.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Limpieza de playas</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por Decathlon</p>
\t\t\t\t</div>        
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/taller_medio_ambiente.png"), "html", null, true);
        echo "\" alt=\"Third slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Educación medioambiental</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por El Corte Inglés</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<a class=\"carousel-control-prev\" href=\"#carrusel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#carrusel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_cuerpo($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cuerpo"));

        // line 51
        echo "
\t<div class=\"pb-2\">
\t\t<article>
\t\t\t<h1>Quiénes somos:</h1>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsa et illo natus perferendis nesciunt quisquam explicabo dicta laborum? Iusto dolor amet mollitia totam minima maxime qui molestias iste nostrum.</p>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officiis temporibus, itaque numquam recusandae inventore? Quos similique voluptatibus impedit eligendi ad iusto aspernatur nulla nisi laudantium laborum obcaecati excepturi, libero accusamus earum, nihil, fuga repellendus reprehenderit quas praesentium laboriosam voluptate recusandae suscipit. Eius, atque sint ducimus natus pariatur sit iste, nemo tenetur sapiente harum blanditiis ratione quas? Tempore, praesentium corrupti.</p>
\t\t</article>
\t</div>

\t<hr class=\"bg-dark\">

\t<article class=\"text-center\">
\t\t<h1 class=\"my-3\">Cómo puedes colaborar</h1>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-euro-sign\"></i>
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-warehouse\"></i>  
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>            
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-people-carry\"></i>
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>            
\t\t\t</div>
\t\t</div>
\t</article>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "sostenibles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 51,  119 => 50,  90 => 30,  79 => 22,  68 => 14,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block cabecera %}
\t{{ parent() }}
\t
\t<div id=\"carrusel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t<ol class=\"carousel-indicators\">
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t</ol>
\t\t<div class=\"carousel-inner\">
\t\t\t<div class=\"carousel-item active\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"{{ asset('build/img/playa_accesible.jpg') }}\" alt=\"First slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Playas accesibles</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por Prótesis Taliarte</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"{{ asset('build/img/playa_sucia1.jpg') }}\" alt=\"Second slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Limpieza de playas</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por Decathlon</p>
\t\t\t\t</div>        
\t\t\t</div>
\t\t\t<div class=\"carousel-item\">
\t\t\t\t<img class=\"d-block w-100 img-fluid\" src=\"{{ asset('build/img/taller_medio_ambiente.png') }}\" alt=\"Third slide\">
\t\t\t\t<div class=\"carousel-caption d-none d-md-block panel-transparent border rounded\">
\t\t\t\t\t<h1>Educación medioambiental</h1>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil quibusdam eius, sapiente eos esse assumenda.</p>
\t\t\t\t\t<p class=\"lead\">Apadrinado por El Corte Inglés</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<a class=\"carousel-control-prev\" href=\"#carrusel\" role=\"button\" data-slide=\"prev\">
\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Previous</span>
\t\t</a>
\t\t<a class=\"carousel-control-next\" href=\"#carrusel\" role=\"button\" data-slide=\"next\">
\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t<span class=\"sr-only\">Next</span>
\t\t</a>
    </div>

{% endblock %}

{% block cuerpo %}

\t<div class=\"pb-2\">
\t\t<article>
\t\t\t<h1>Quiénes somos:</h1>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci ipsa et illo natus perferendis nesciunt quisquam explicabo dicta laborum? Iusto dolor amet mollitia totam minima maxime qui molestias iste nostrum.</p>
\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officiis temporibus, itaque numquam recusandae inventore? Quos similique voluptatibus impedit eligendi ad iusto aspernatur nulla nisi laudantium laborum obcaecati excepturi, libero accusamus earum, nihil, fuga repellendus reprehenderit quas praesentium laboriosam voluptate recusandae suscipit. Eius, atque sint ducimus natus pariatur sit iste, nemo tenetur sapiente harum blanditiis ratione quas? Tempore, praesentium corrupti.</p>
\t\t</article>
\t</div>

\t<hr class=\"bg-dark\">

\t<article class=\"text-center\">
\t\t<h1 class=\"my-3\">Cómo puedes colaborar</h1>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-euro-sign\"></i>
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-warehouse\"></i>  
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>            
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"h1 icono\">
\t\t\t\t\t<i class=\"fas fa-people-carry\"></i>
\t\t\t\t</div>
\t\t\t\t<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fuga corporis voluptates quia quas nihil corrupti dolorum dolores dolore, vitae neque unde ullam? Vero, architecto!</p>            
\t\t\t</div>
\t\t</div>
\t</article>

{% endblock %}", "sostenibles/index.html.twig", "C:\\MiXampp\\htdocs\\mis_sites\\SOStenibles\\templates\\sostenibles\\index.html.twig");
    }
}
