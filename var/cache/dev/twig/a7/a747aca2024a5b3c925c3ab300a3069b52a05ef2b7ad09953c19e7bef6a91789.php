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
\t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "/add/sub_folder\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["jsId"]) || array_key_exists("jsId", $context) ? $context["jsId"] : (function () { throw new RuntimeError('Variable "jsId" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t</div>
\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t</div>
\t</form>
</div>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allSubFolderRequest"]) || array_key_exists("allSubFolderRequest", $context) ? $context["allSubFolderRequest"] : (function () { throw new RuntimeError('Variable "allSubFolderRequest" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
            // line 30
            echo "\t<div class=\"col-12 d-flex p-0\">
\t\t<a id=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 31), "html", null, true);
            echo "_close p-1\">
\t\t\t<div>+</div>
\t\t</a>
\t\t<a id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 34), "html", null, true);
            echo "_open d-none p-1\">
\t\t\t<div>-</div>
\t\t</a>
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t<div>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</div>
\t\t";
            // line 39
            if (0 !== twig_compare((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "null")) {
                // line 40
                echo "\t\t\t";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 40), (isset($context["listId"]) || array_key_exists("listId", $context) ? $context["listId"] : (function () { throw new RuntimeError('Variable "listId" does not exist.', 40, $this->source); })()))) {
                    // line 41
                    echo "\t\t\t\t<form action=\"SubFolder/removeCheckBox\" method=\"post\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" class=\"removeCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\" checked>
\t\t\t\t</form>
\t\t\t";
                } else {
                    // line 45
                    echo "\t\t\t\t<form action=\"SubFolder/addCheckBox\" method=\"post\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" class=\"addCheckBox checkBox\">
\t\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t\t\t</form>
\t\t\t";
                }
                // line 49
                echo "\t\t";
            }
            // line 50
            echo "\t</div>
\t<div id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 51), "html", null, true);
            echo "_request\" class=\"ml-3 border-left\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<div id=\"newSubFolder\"></div>
";
        // line 54
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

        // line 55
        echo "\t<script>
\t\t// Requête ajouter un Folder/File
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
        return array (  177 => 55,  158 => 54,  155 => 53,  147 => 51,  144 => 50,  141 => 49,  133 => 45,  125 => 41,  122 => 40,  120 => 39,  116 => 38,  107 => 34,  99 => 31,  96 => 30,  92 => 29,  74 => 14,  65 => 8,  61 => 7,  53 => 4,  44 => 1,);
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
\t<form action=\"{{server}}/add/sub_folder\" enctype=\"multipart/form-data\" class=\"myForm\" method=\"POST\">
\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{jsId}}\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t</div>
\t\t\t<div style=\"display: none;\">
\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder\"/>
\t\t\t</div>
\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
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
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t<div>{{ subFolder.name }}</div>
\t\t{% if project != \"null\" %}
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
\t\t// Requête ajouter un Folder/File
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
