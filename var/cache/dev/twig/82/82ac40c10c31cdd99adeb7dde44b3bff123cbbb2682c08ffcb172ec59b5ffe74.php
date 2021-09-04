<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_93a4719728c36b2659256272a43424c23836accf747eb6edda27542d013f33dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()));
        echo "
<div class=\"container\">
        <div class=\"row\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()), "results", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["movies"]) {
            // line 14
            echo "        ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["movies"], "poster_path", [], "any", false, false, false, 14), null))) {
                // line 15
                echo "                <div class=\"col-3\">
                    <div class=\"col\">
                    </div>
                \t<div class=\"card shadow-lg h-100 m-2\">
                    <div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card-body\">
                              <img src=\"https://image.tmdb.org/t/p/w185";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "poster_path", [], "any", false, false, false, 21), "html", null, true);
                echo "\" /> 
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "title", [], "any", false, false, false, 22), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Film : <span class=\"badge bg-secondary\">";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Date de sortir : <span class=\"badge bg-secondary\">";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "release_date", [], "any", false, false, false, 24), "html", null, true);
                echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Note : <span class=\"badge bg-secondary\">";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "vote_average", [], "any", false, false, false, 25), "html", null, true);
                echo "</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Nombres de votes : <span class=\"badge bg-secondary\">";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movies"], "vote_count", [], "any", false, false, false, 26), "html", null, true);
                echo "</span></p>
                                <button class=\"btn btn-secondary\"  >Voir détail</button>
\t\t\t\t\t\t\t\t";
                // line 29
                echo "\t\t\t\t\t\t\t</div>
                        </div>
                    </div>

                            <p></p>
                </div>
        ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  149 => 36,  140 => 29,  135 => 26,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  107 => 15,  104 => 14,  100 => 13,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    {{dump(data)}}
<div class=\"container\">
        <div class=\"row\">
        {% for movies in data.results %}
        {% if movies.poster_path != null %}
                <div class=\"col-3\">
                    <div class=\"col\">
                    </div>
                \t<div class=\"card shadow-lg h-100 m-2\">
                    <div class=\"col\">
\t\t\t\t\t\t\t<div class=\"card-body\">
                              <img src=\"https://image.tmdb.org/t/p/w185{{movies.poster_path}}\" /> 
\t\t\t\t\t\t\t\t<h5 class=\"card-title\">{{movies.title}}</h5>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Film : <span class=\"badge bg-secondary\">{{movies.id}}</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Date de sortir : <span class=\"badge bg-secondary\">{{movies.release_date}}</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Note : <span class=\"badge bg-secondary\">{{movies.vote_average}}</span></p>
\t\t\t\t\t\t\t\t<p class=\"card-text\">Nombres de votes : <span class=\"badge bg-secondary\">{{movies.vote_count}}</span></p>
                                <button class=\"btn btn-secondary\"  >Voir détail</button>
\t\t\t\t\t\t\t\t{# <a href=\"{{ path('detail', {'id': movies.id }) }}\" class=\"btn btn-secondary\" role=\"button\" aria-pressed=\"true\">Plus de chiffres</a> #}
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>

                            <p></p>
                </div>
        {% endif %}
        {% endfor %}
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "/shared/httpd/Projet-Final/templates/home/index.html.twig");
    }
}
