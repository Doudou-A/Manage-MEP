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
        // line 14
        echo "
\t\t<div id=\"AddFolder\">
\t\t\t<button id=\"app\" v-on:click=\"seen = !seen\" class=\"control\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</button>

\t\t\t<div v-if=\"!seen\" id=\"hide\">
\t\t\t";
        echo "
\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("server_add_folder", ["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 15, $this->source); })())])]);
        echo "
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row', ["label" => false]);
        echo "
\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
\t\t\t";
        // line 21
        echo "
\t\t\t</div>
\t\t</div>
\t";
        echo "
\t<div id=\"name\">
\t\t<mon-composant :name=\"'";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "'\" inline-template>
\t\t\t<div>
\t\t\t\t";
        // line 27
        echo "
\t\t\t\t\thello {{ name }}
\t\t\t\t";
        echo "
\t\t\t</div>
\t\t</mon-composant>
\t</div>
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 32
            echo "\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</div>
\t\t\t";
            // line 40
            echo "
\t\t\t\t<div id=\"message\">
\t\t\t\t\t<MonComposant :name=\"'{{folder.name}}'\" inline-template>
\t\t\t\t\t\t<div>{{ name }}</div>
\t\t\t\t\t\t<div id=\"{{ name }} \">
\t\t\t\t\t\t";
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button id=\"top\" v-on:click=\"seen = !seen\" class=\"control\">
\t\t\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t\t\t</button>
\t\t\t\t\t<div v-if=\"!seen\" id=\"hide\">
\t\t\t\t\t\t<form action=\"http://localhost:8000/server/add/sub_folder/";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 46, $this->source); })()), "html", null, true);
            echo "\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "\" type=\"text\" name=\"folderName\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</MonComposant>
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
        return array (  171 => 52,  162 => 46,  148 => 40,  144 => 34,  140 => 32,  136 => 31,  127 => 27,  122 => 23,  114 => 21,  110 => 17,  106 => 16,  102 => 15,  91 => 14,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard
{% endblock %}

{% block body %}
\t{% verbatim %}
\t\t<div id=\"AddFolder\">
\t\t\t<button id=\"app\" v-on:click=\"seen = !seen\" class=\"control\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</button>

\t\t\t<div v-if=\"!seen\" id=\"hide\">
\t\t\t{% endverbatim %}
\t\t\t{{ form_start(form, {'action' : path('server_add_folder', { 'server': server })}) }}
\t\t\t{{ form_row(form.name, {'label':false})}}
\t\t\t{{ form_end(form) }}
\t\t\t{% verbatim %}
\t\t\t</div>
\t\t</div>
\t{% endverbatim %}
\t<div id=\"name\">
\t\t<mon-composant :name=\"'{{ server }}'\" inline-template>
\t\t\t<div>
\t\t\t\t{% verbatim %}
\t\t\t\t\thello {{ name }}
\t\t\t\t{% endverbatim %}
\t\t\t</div>
\t\t</mon-composant>
\t</div>
\t{% for folder in folders %}
\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>{{folder.name}}</div>
\t\t\t{% verbatim %}
\t\t\t\t<div id=\"message\">
\t\t\t\t\t<MonComposant :name=\"'{{folder.name}}'\" inline-template>
\t\t\t\t\t\t<div>{{ name }}</div>
\t\t\t\t\t\t<div id=\"{{ name }} \">
\t\t\t\t\t\t{% endverbatim %}
\t\t\t\t\t</div>
\t\t\t\t\t<button id=\"top\" v-on:click=\"seen = !seen\" class=\"control\">
\t\t\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t\t\t</button>
\t\t\t\t\t<div v-if=\"!seen\" id=\"hide\">
\t\t\t\t\t\t<form action=\"http://localhost:8000/server/add/sub_folder/{{server}}\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{folder.name}}\" type=\"text\" name=\"folderName\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</MonComposant>
\t\t</div>
\t{% endfor %}
{% endblock %}
", "server_dashboard/index.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/server_dashboard/index.html.twig");
    }
}
