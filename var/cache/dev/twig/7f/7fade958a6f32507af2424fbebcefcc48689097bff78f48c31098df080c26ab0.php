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

/* server_dashboard/index.html.twig */
class __TwigTemplate_1962187858409a42e773421fc212bab5946b57e7e68e1b2c5e1eecda781a60d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "server_dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "server_dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "server_dashboard/index.html.twig", 1);
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

        echo "Dashboard
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<a id=\"div_add0\" href=\"javascript:visibilite('div_form0');\">
\t\t<p>Ajouter un Dossier</p>
\t</a>
\t<div id=\"div_form0\" style=\"display:none;\">
\t\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_folder", ["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 11, $this->source); })())])]);
        echo "
\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), 'row', ["label" => false]);
        echo "
\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
\t</div>
\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 16
            echo "\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
\t\t\t<a id=\"div_add";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 19), "html", null, true);
            echo "\" href=\"javascript:visibilite('div_form";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 19), "html", null, true);
            echo "');\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</a>
\t\t\t<div id=\"div_form";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 22), "html", null, true);
            echo "\" style=\"display:none;\">
\t\t\t\t<form action=\"http://localhost:8000/";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "/add/sub_folder/folder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 29), "html", null, true);
            echo "\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<a id=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 44), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 44), "html", null, true);
            echo "_close\">
\t\t\t\t<div>+</div>
\t\t\t</a>
\t\t\t<a id=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 47), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 47), "html", null, true);
            echo "_open d-none\">
\t\t\t\t<div>-</div>
\t\t\t</a>
\t\t\t<div id=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 50), "html", null, true);
            echo "_request\"></div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "server_dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 50,  167 => 47,  159 => 44,  141 => 29,  132 => 23,  128 => 22,  120 => 19,  116 => 18,  112 => 16,  108 => 15,  103 => 13,  99 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard
{% endblock %}

{% block body %}
\t<a id=\"div_add0\" href=\"javascript:visibilite('div_form0');\">
\t\t<p>Ajouter un Dossier</p>
\t</a>
\t<div id=\"div_form0\" style=\"display:none;\">
\t\t{{ form_start(form, {'action' : path('add_folder', { 'server': server })}) }}
\t\t{{ form_row(form.name, {'label':false})}}
\t\t{{ form_end(form) }}
\t</div>
\t{% for folder in folders %}
\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>{{folder.name}}</div>
\t\t\t<a id=\"div_add{{folder.jsId}}\" href=\"javascript:visibilite('div_form{{folder.jsId}}');\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</a>
\t\t\t<div id=\"div_form{{folder.jsId}}\" style=\"display:none;\">
\t\t\t\t<form action=\"http://localhost:8000/{{server}}/add/sub_folder/folder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{folder.jsId}}\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<a id=\"{{folder.jsId}}\" class=\"btn js-close {{folder.jsId}}_close\">
\t\t\t\t<div>+</div>
\t\t\t</a>
\t\t\t<a id=\"{{folder.jsId}}\" class=\"btn js-open {{folder.jsId}}_open d-none\">
\t\t\t\t<div>-</div>
\t\t\t</a>
\t\t\t<div id=\"{{folder.jsId}}_request\"></div>
\t\t</div>
\t{% endfor %}
{% endblock %}
", "server_dashboard/index.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/server_dashboard/index.html.twig");
    }
}
