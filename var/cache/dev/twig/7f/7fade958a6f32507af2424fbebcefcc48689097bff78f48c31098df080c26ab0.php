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
            'javascripts' => [$this, 'block_javascripts'],
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
        echo "\t<a href=\"javascript:visibilite('div_form0');\">
\t\t<p>Ajouter un Dossier</p>
\t</a>

\t<div id=\"div_form0\">
\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("server_add_folder", ["server" => (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 12, $this->source); })())])]);
        echo "
\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), 'row', ["label" => false]);
        echo "
\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_end');
        echo "
\t</div>
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["folders"]) || array_key_exists("folders", $context) ? $context["folders"] : (function () { throw new RuntimeError('Variable "folders" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 17
            echo "\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
\t\t\t<a href=\"javascript:visibilite('div_form";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "');\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</a>
\t\t\t<div id=\"div_form";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" style=\"display:none;\">
\t\t\t\t<form action=\"http://localhost:8000/server/add/sub_folder/";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\" type=\"text\" name=\"folderName\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subFolders"]) || array_key_exists("subFolders", $context) ? $context["subFolders"] : (function () { throw new RuntimeError('Variable "subFolders" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
                // line 46
                echo "\t\t\t\t";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subFolder"], "folder", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46))) {
                    // line 47
                    echo "\t\t\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t\t\t<div>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 48), "html", null, true);
                    echo "</div>
\t\t\t\t\t<a href=\"javascript:visibilite('div_form";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "');\">
\t\t\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"div_form";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" style=\"display:none;\">
\t\t\t\t\t\t<form action=\"http://localhost:8000/server/add/sub_folder/";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo "\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 59), "html", null, true);
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
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t<script>
\t\tvar divPrecedent = document.getElementById('div_form0');
function visibilite(divId) {
divPresent = document.getElementById(divId);
if (divPresent.style.display == 'none') 
divPresent.style.display = 'block';
 else 
divPresent.style.display = 'none';


}
\t</script>
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
        return array (  242 => 80,  232 => 79,  217 => 76,  211 => 75,  192 => 59,  183 => 53,  179 => 52,  173 => 49,  169 => 48,  166 => 47,  163 => 46,  159 => 45,  141 => 30,  132 => 24,  128 => 23,  122 => 20,  118 => 19,  114 => 17,  110 => 16,  105 => 14,  101 => 13,  97 => 12,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard
{% endblock %}

{% block body %}
\t<a href=\"javascript:visibilite('div_form0');\">
\t\t<p>Ajouter un Dossier</p>
\t</a>

\t<div id=\"div_form0\">
\t\t{{ form_start(form, {'action' : path('server_add_folder', { 'server': server })}) }}
\t\t{{ form_row(form.name, {'label':false})}}
\t\t{{ form_end(form) }}
\t</div>
\t{% for folder in folders %}
\t\t<div class=\"col-12 d-flex\">
\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t<div>{{folder.name}}</div>
\t\t\t<a href=\"javascript:visibilite('div_form{{folder.id}}');\">
\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t</a>
\t\t\t<div id=\"div_form{{folder.id}}\" style=\"display:none;\">
\t\t\t\t<form action=\"http://localhost:8000/server/add/sub_folder/{{server}}\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{folder.name}}\" type=\"text\" name=\"folderName\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t{% for subFolder in subFolders %}
\t\t\t\t{% if folder.name == subFolder.folder.name %}
\t\t\t\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t\t\t\t<div>{{subFolder.name}}</div>
\t\t\t\t\t<a href=\"javascript:visibilite('div_form{{subFolder.id}}');\">
\t\t\t\t\t\t<p>Ajouter un Dossier</p>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"div_form{{subFolder.id}}\" style=\"display:none;\">
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
\t\t\t\t{% endif %}
\t\t\t{% endfor %}
\t\t</div>
\t{% endfor %}
{% endblock %}
{% block javascripts %}
\t<script>
\t\tvar divPrecedent = document.getElementById('div_form0');
function visibilite(divId) {
divPresent = document.getElementById(divId);
if (divPresent.style.display == 'none') 
divPresent.style.display = 'block';
 else 
divPresent.style.display = 'none';


}
\t</script>
{% endblock %}
", "server_dashboard/index.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/server_dashboard/index.html.twig");
    }
}
