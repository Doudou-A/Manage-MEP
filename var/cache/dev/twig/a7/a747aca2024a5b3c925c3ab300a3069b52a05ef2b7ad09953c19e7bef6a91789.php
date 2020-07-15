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
            'Javascript' => [$this, 'block_Javascript'],
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
\t<form action=\"http://localhost:8000/";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "/add/sub_folder/folder\" method=\"POST\">
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
\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white form_submit\"/>
\t\t</div>
\t</form>
</div>
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSubFolder"]) || array_key_exists("listSubFolder", $context) ? $context["listSubFolder"] : (function () { throw new RuntimeError('Variable "listSubFolder" does not exist.', 29, $this->source); })()));
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
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["subFolder"], "modification", [], "any", false, false, false, 39), 1)) {
                // line 40
                echo "\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\" checked>
\t\t\t</form>
\t\t";
            } else {
                // line 44
                echo "\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t\t</form>
\t\t";
            }
            // line 48
            echo "\t</div>
\t<div id=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 49), "html", null, true);
            echo "_request\" class=\"ml-3 border-left\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('Javascript', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_Javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Javascript"));

        
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
        return array (  148 => 52,  145 => 51,  137 => 49,  134 => 48,  128 => 44,  122 => 40,  120 => 39,  116 => 38,  107 => 34,  99 => 31,  96 => 30,  92 => 29,  74 => 14,  65 => 8,  61 => 7,  53 => 4,  44 => 1,);
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
\t<form action=\"http://localhost:8000/{{server}}/add/sub_folder/folder\" method=\"POST\">
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
\t\t\t<input style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white form_submit\"/>
\t\t</div>
\t</form>
</div>
{% for subFolder in listSubFolder %}
\t<div class=\"col-12 d-flex p-0\">
\t\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-close {{subFolder.js_id}}_close p-1\">
\t\t\t<div>+</div>
\t\t</a>
\t\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-open {{subFolder.js_id}}_open d-none p-1\">
\t\t\t<div>-</div>
\t\t</a>
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t\t<div>{{ subFolder.name }}</div>
\t\t{% if subFolder.modification == 1 %}
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\" checked>
\t\t\t</form>
\t\t{% else %}
\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t\t</form>
\t\t{% endif %}
\t</div>
\t<div id=\"{{subFolder.js_id}}_request\" class=\"ml-3 border-left\"></div>
{% endfor %}

{% block Javascript %}{% endblock %}
", "subFolder/ajaxRequest.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/subFolder/ajaxRequest.html.twig");
    }
}
