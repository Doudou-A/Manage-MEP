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
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 8
            echo "\t\t<div class=\"col-12 d-flex flex-row\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" class=\"mx-auto\" width=\"15\"/>
\t\t\t<div class=\"col-9\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</div>
\t\t</div>
\t\t\t";
            // line 12
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("server_add_subFolder", ["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 12, $this->source); })())])]);
            echo "
\t\t\t";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row', ["label" => false]);
            echo "
\t\t\t";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 14, $this->source); })()), "Folder", [], "any", false, false, false, 14), 'row', ["value" => "folder.name"]);
            echo "
\t\t\t";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 15, $this->source); })()), "subFolder_1", [], "any", false, false, false, 15), 'row', ["value" => "null"]);
            echo "
\t\t\t";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 16, $this->source); })()), "level", [], "any", false, false, false, 16), 'row', ["value" => "1"]);
            echo "
\t\t\t";
            // line 17
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_subFolder"]) || array_key_exists("form_subFolder", $context) ? $context["form_subFolder"] : (function () { throw new RuntimeError('Variable "form_subFolder" does not exist.', 17, $this->source); })()), 'form_end');
            echo "
\t\t\t<form action=\"path('server_add_subFolder', { 'server': server })\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo "\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Prénom :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"firstName\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Mot de Passe :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" id=\"pass\" type=\"password\" name=\"password\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Confirmer le Mot de Passe :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" id=\"pass\" type=\"password\" name=\"passwordConfirm\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\" class=\"text-danger\" id=\"errorPassword\">
\t\t\t\t\t\t* Les mots de passe sont différents !
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"submitFormRegistration\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
            // line 51
            echo "
\t\t\t\t<div id=\"example-1\">
\t\t\t\t\t<button v-on:click=\"counter += 1\">Add 1</button>
\t\t\t\t\t<p>Le bouton ci-dessus a été cliqué
\t\t\t\t\t\t{{ counter }}
\t\t\t\t\t\tfois.</p>
\t\t\t\t</div>
\t\t\t";
            echo "
\t\t\t";
            // line 52
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("server_add_folder", ["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 52, $this->source); })())])]);
            echo "
\t\t\t";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row', ["label" => false]);
            echo "
\t\t\t";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t";
        
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
        return array (  183 => 56,  175 => 54,  171 => 53,  167 => 52,  156 => 51,  130 => 21,  123 => 17,  119 => 16,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  98 => 10,  94 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard
{% endblock %}

{% block body %}
\t{% for folder in folders %}
\t\t<div class=\"col-12 d-flex flex-row\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" class=\"mx-auto\" width=\"15\"/>
\t\t\t<div class=\"col-9\">{{folder.name}}</div>
\t\t</div>
\t\t\t{{ form_start(form_subFolder, {'action' : path('server_add_subFolder', { 'server': server })}) }}
\t\t\t{{ form_row(form_subFolder.name, {'label':false})}}
\t\t\t{{ form_row(form_subFolder.Folder, {'value': \"folder.name\" })}}
\t\t\t{{ form_row(form_subFolder.subFolder_1, {'value': \"null\"})}}
\t\t\t{{ form_row(form_subFolder.level, {'value':'1'})}}
\t\t\t{{ form_end(form_subFolder) }}
\t\t\t<form action=\"path('server_add_subFolder', { 'server': server })\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{folder.name}}\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Prénom :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"firstName\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Mot de Passe :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" id=\"pass\" type=\"password\" name=\"password\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<label class=\"col-lg-12 mt-4 animated fadeInRight\">Confirmer le Mot de Passe :
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" id=\"pass\" type=\"password\" name=\"passwordConfirm\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\" class=\"text-danger\" id=\"errorPassword\">
\t\t\t\t\t\t* Les mots de passe sont différents !
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"submitFormRegistration\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t{% verbatim %}
\t\t\t\t<div id=\"example-1\">
\t\t\t\t\t<button v-on:click=\"counter += 1\">Add 1</button>
\t\t\t\t\t<p>Le bouton ci-dessus a été cliqué
\t\t\t\t\t\t{{ counter }}
\t\t\t\t\t\tfois.</p>
\t\t\t\t</div>
\t\t\t{% endverbatim %}
\t\t\t{{ form_start(form, {'action' : path('server_add_folder', { 'server': server })}) }}
\t\t\t{{ form_row(form.name, {'label':false})}}
\t\t\t{{ form_end(form) }}
\t\t{% endfor %}
\t{% endblock %}
", "server_dashboard/index.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/server_dashboard/index.html.twig");
    }
}
