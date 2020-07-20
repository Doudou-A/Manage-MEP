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
        echo "\t<div id=\"server\" class=\"d-none\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "</div>
\t<div id=\"serverName\" class=\"d-none\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
\t<div class=\"d-flex\">
\t\t<select class=\"target\" id=\"selector\">
\t\t\t<option value=\"null\" selected=\"selected\">Choisir un projet</option>
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 13
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</select>
\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_create");
        echo "\">Créer un Projet</a>
\t</div>
\t<a id=\"div_0_add\" href=\"javascript:visibiliteAdd('div_0');\">
\t\t<p>Nouveau</p>
\t</a>
\t<a id=\"div_0_folder_add\" href=\"javascript:visibiliteFolder('div_0_folder');\" style=\"display:none;\">
\t\t<p>Ajouter un Dossier</p>
\t</a>
\t<div id=\"div_0_folder_form\" style=\"display:none;\">
\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_folder", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)])]);
        echo "
\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'row', ["label" => false]);
        echo "
\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
\t</div>
\t<div id=\"allFolders\">
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 31
            echo "\t\t\t<div class=\"col-12 d-flex p-0\">
\t\t\t\t<a id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 32), "html", null, true);
            echo "_close p-1\">
\t\t\t\t\t<div>+</div>
\t\t\t\t</a>
\t\t\t\t<a id=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 35), "html", null, true);
            echo "_open d-none p-1\">
\t\t\t\t\t<div>-</div>
\t\t\t\t</a>
\t\t\t\t<img src=\"/picture/folder_win10.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t\t\t<div>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t\t<div id=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "jsId", [], "any", false, false, false, 41), "html", null, true);
            echo "_request\" class=\"ml-3 border-left\"></div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</div>
";
        
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
        return array (  182 => 43,  174 => 41,  169 => 39,  160 => 35,  152 => 32,  149 => 31,  145 => 30,  139 => 27,  135 => 26,  131 => 25,  119 => 16,  116 => 15,  105 => 13,  101 => 12,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard
{% endblock %}

{% block body %}
\t<div id=\"server\" class=\"d-none\">{{server.id}}</div>
\t<div id=\"serverName\" class=\"d-none\">{{server.name}}</div>
\t<div class=\"d-flex\">
\t\t<select class=\"target\" id=\"selector\">
\t\t\t<option value=\"null\" selected=\"selected\">Choisir un projet</option>
\t\t\t{% for project in projects %}
\t\t\t\t<option value=\"{{project.id}}\">{{project.name}}</option>
\t\t\t{% endfor %}
\t\t</select>
\t\t<a href=\"{{ path('project_create')}}\">Créer un Projet</a>
\t</div>
\t<a id=\"div_0_add\" href=\"javascript:visibiliteAdd('div_0');\">
\t\t<p>Nouveau</p>
\t</a>
\t<a id=\"div_0_folder_add\" href=\"javascript:visibiliteFolder('div_0_folder');\" style=\"display:none;\">
\t\t<p>Ajouter un Dossier</p>
\t</a>
\t<div id=\"div_0_folder_form\" style=\"display:none;\">
\t\t{{ form_start(form, {'action' : path('add_folder', { 'id': server.id })}) }}
\t\t{{ form_row(form.name, {'label':false})}}
\t\t{{ form_end(form) }}
\t</div>
\t<div id=\"allFolders\">
\t\t{% for folder in folders %}
\t\t\t<div class=\"col-12 d-flex p-0\">
\t\t\t\t<a id=\"{{folder.jsId}}\" class=\"btn js-close {{folder.jsId}}_close p-1\">
\t\t\t\t\t<div>+</div>
\t\t\t\t</a>
\t\t\t\t<a id=\"{{folder.jsId}}\" class=\"btn js-open {{folder.jsId}}_open d-none p-1\">
\t\t\t\t\t<div>-</div>
\t\t\t\t</a>
\t\t\t\t<img src=\"/picture/folder_win10.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t\t\t<div>{{folder.name}}</div>
\t\t\t</div>
\t\t\t<div id=\"{{folder.jsId}}_request\" class=\"ml-3 border-left\"></div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "server_dashboard/index.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/server_dashboard/index.html.twig");
    }
}
