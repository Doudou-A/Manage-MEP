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

/* subFolder/ajaxRequest.html.twig */
class __TwigTemplate_cdb1d26dd5fdb35fa2ae92cc57215d103b444c09d07158f5ef3af7bcf9e7bc23 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subFolder/ajaxRequest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subFolder/ajaxRequest.html.twig"));

        // line 1
        echo "<a id=\"div_";
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "_add\" href=\"javascript:visibiliteAdd('div_";
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "');\" class=\"ml-4 border-top\">
\tNouveau
</a>
<a id=\"div_";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "_folder_add\" href=\"javascript:visibiliteFolder('div_";
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "_folder');\" style=\"display:none;\">
\tAjouter un Dossier
</a>
<div id=\"div_";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "_folder_form\" style=\"display:none;\">
\t";
        // line 8
        if (0 !== twig_compare((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 8, $this->source); })()), null)) {
            // line 9
            echo "\t\t<form action=\"/";
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "/Add/Sub-Folder/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t";
        } else {
            // line 11
            echo "\t\t\t<form action=\"/";
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "/Add/Sub-Folder/null\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t\t";
        }
        // line 13
        echo "\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"folder\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t</div>
\t\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<a id=\"div_";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "_file_add\" href=\"javascript:visibiliteFolder('div_";
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "_file');\" style=\"display:none;\">
\tAjouter un Fichier
</a>
<div id=\"div_";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "_file_form\" style=\"display:none;\">
\t";
        // line 38
        if (0 !== twig_compare((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), null)) {
            // line 39
            echo "\t\t<form action=\"/";
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "/Add/Sub-Folder/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t";
        } else {
            // line 41
            echo "\t\t\t<form action=\"/";
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "/Add/Sub-Folder/null\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t\t";
        }
        // line 43
        echo "\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" type=\"text\" name=\"onFolder\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t</div>
\t\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allSubFolderRequest"]) || array_key_exists("allSubFolderRequest", $context) ? $context["allSubFolderRequest"] : (function () { throw new RuntimeError('Variable "allSubFolderRequest" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
            // line 65
            echo "\t<div class=\"col-12 d-flex p-0\">
\t\t<a id=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 66), "html", null, true);
            echo "_close p-1\">
\t\t\t<div>+</div>
\t\t</a>
\t\t<a id=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 69), "html", null, true);
            echo "_open d-none p-1\">
\t\t\t<div>-</div>
\t\t</a>
\t\t";
            // line 72
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["subFolder"], "type", [], "any", false, false, false, 72), "folder")) {
                // line 73
                echo "\t\t\t<img src=\"/picture/folder.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t";
            } else {
                // line 75
                echo "\t\t\t<img src=\"/picture/file.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t";
            }
            // line 77
            echo "\t\t<div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</div>
\t\t";
            // line 78
            if (0 !== twig_compare((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 78, $this->source); })()), null)) {
                // line 79
                echo "\t\t\t";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 79), (isset($context["listId"]) || array_key_exists("listId", $context) ? $context["listId"] : (function () { throw new RuntimeError('Variable "listId" does not exist.', 79, $this->source); })()))) {
                    // line 80
                    echo "\t\t\t\t<form action=\"SubFolder/removeCheckBox\" method=\"post\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 80), "html", null, true);
                    echo "\" class=\"removeCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\" checked>
\t\t\t\t</form>
\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t<form action=\"SubFolder/addCheckBox\" method=\"post\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 84), "html", null, true);
                    echo "\" class=\"addCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t\t\t</form>
\t\t\t";
                }
                // line 88
                echo "\t\t";
            }
            // line 89
            echo "\t</div>
\t<div id=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 90), "html", null, true);
            echo "_request\" class=\"ml-3 border-left\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "<div id=\"newSubFolder\"></div>
";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "\t<script>
\t\t// Requête ajouter un Folder/SubFolder
\$(function () {
\$(\".myForm\").submit(function (event) {
event.preventDefault(); // Empêcher le rechargement de la page.
var post_url = \$(this).attr(\"action\"); // get form action url
var request_method = \$(this).attr(\"method\"); // get form GET/POST method
var form_data = \$(this).serialize(); // Encode form elements for submission

\$.ajax({url: post_url, type: request_method, data: form_data}).done(function (response) { //
\$(\"#newSubFolder\").append(response.html);
/* \$(this).trigger('click'); */
});
});
});
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subFolder/ajaxRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 94,  237 => 93,  234 => 92,  226 => 90,  223 => 89,  220 => 88,  212 => 84,  204 => 80,  201 => 79,  199 => 78,  194 => 77,  190 => 75,  186 => 73,  184 => 72,  176 => 69,  168 => 66,  165 => 65,  161 => 64,  142 => 48,  135 => 43,  129 => 41,  121 => 39,  119 => 38,  115 => 37,  107 => 34,  88 => 18,  81 => 13,  75 => 11,  67 => 9,  65 => 8,  61 => 7,  53 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a id=\"div_{{jsId}}_add\" href=\"javascript:visibiliteAdd('div_{{jsId}}');\" class=\"ml-4 border-top\">
\tNouveau
</a>
<a id=\"div_{{jsId}}_folder_add\" href=\"javascript:visibiliteFolder('div_{{jsId}}_folder');\" style=\"display:none;\">
\tAjouter un Dossier
</a>
<div id=\"div_{{jsId}}_folder_form\" style=\"display:none;\">
\t{% if project != null %}
\t\t<form action=\"/{{server}}/Add/Sub-Folder/{{project.id}}\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t{% else %}
\t\t\t<form action=\"/{{server}}/Add/Sub-Folder/null\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t\t{% endif %}
\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{jsId}}\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"folder\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t</div>
\t\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
<a id=\"div_{{jsId}}_file_add\" href=\"javascript:visibiliteFolder('div_{{jsId}}_file');\" style=\"display:none;\">
\tAjouter un Fichier
</a>
<div id=\"div_{{jsId}}_file_form\" style=\"display:none;\">
\t{% if project != null %}
\t\t<form action=\"/{{server}}/Add/Sub-Folder/{{project.id}}\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t{% else %}
\t\t\t<form action=\"/{{server}}/Add/Sub-Folder/null\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t\t{% endif %}
\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{jsId}}\" type=\"text\" name=\"onFolder\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\"/>
\t\t\t\t</div>
\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t\t</div>
\t\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t</div>
\t\t</div>
\t</form>
</div>
{% for subFolder in allSubFolderRequest %}
\t<div class=\"col-12 d-flex p-0\">
\t\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-close {{subFolder.js_id}}_close p-1\">
\t\t\t<div>+</div>
\t\t</a>
\t\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-open {{subFolder.js_id}}_open d-none p-1\">
\t\t\t<div>-</div>
\t\t</a>
\t\t{% if subFolder.type == \"folder\" %}
\t\t\t<img src=\"/picture/folder.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t{% else %}
\t\t\t<img src=\"/picture/file.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t{% endif %}
\t\t<div>{{ subFolder.name }}</div>
\t\t{% if project != null %}
\t\t\t{% if subFolder.id in listId %}
\t\t\t\t<form action=\"SubFolder/removeCheckBox\" method=\"post\" id=\"{{subFolder.js_id}}\" class=\"removeCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\" checked>
\t\t\t\t</form>
\t\t\t{% else %}
\t\t\t\t<form action=\"SubFolder/addCheckBox\" method=\"post\" id=\"{{subFolder.js_id}}\" class=\"addCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t\t\t</form>
\t\t\t{% endif %}
\t\t{% endif %}
\t</div>
\t<div id=\"{{subFolder.js_id}}_request\" class=\"ml-3 border-left\"></div>
{% endfor %}
<div id=\"newSubFolder\"></div>
{% block javascripts %}
\t<script>
\t\t// Requête ajouter un Folder/SubFolder
\$(function () {
\$(\".myForm\").submit(function (event) {
event.preventDefault(); // Empêcher le rechargement de la page.
var post_url = \$(this).attr(\"action\"); // get form action url
var request_method = \$(this).attr(\"method\"); // get form GET/POST method
var form_data = \$(this).serialize(); // Encode form elements for submission

\$.ajax({url: post_url, type: request_method, data: form_data}).done(function (response) { //
\$(\"#newSubFolder\").append(response.html);
/* \$(this).trigger('click'); */
});
});
});
\t</script>
{% endblock %}
", "subFolder/ajaxRequest.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/subFolder/ajaxRequest.html.twig");
    }
}
