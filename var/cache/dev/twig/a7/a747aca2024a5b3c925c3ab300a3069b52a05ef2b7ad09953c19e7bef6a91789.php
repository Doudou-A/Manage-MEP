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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSubFolder"]) || array_key_exists("listSubFolder", $context) ? $context["listSubFolder"] : (function () { throw new RuntimeError('Variable "listSubFolder" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
            // line 2
            echo "\t";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["subFolder"], "modification", [], "any", false, false, false, 2), 1)) {
                // line 3
                echo "\t<div class=\"bg-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 3), "html", null, true);
                echo "</div>
\t";
            } else {
                // line 5
                echo "\t<div>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 5), "html", null, true);
                echo "</div>\t
\t";
            }
            // line 7
            echo "\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a id=\"div_";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 9), "html", null, true);
            echo "_add\" href=\"javascript:visibiliteAdd('div_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 9), "html", null, true);
            echo "');\">
\t\t\t\t<p>Nouveau</p>
\t\t</a>
\t\t<a id=\"div_";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 12), "html", null, true);
            echo "_folder_add\" href=\"javascript:visibiliteFolder('div_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 12), "html", null, true);
            echo "_folder');\" style=\"display:none;\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 15), "html", null, true);
            echo "_folder_form\" style=\"display:none;\">
\t\t\t<form action=\"http://localhost:8000/";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "/add/sub_folder/subFolder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<a id=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 38), "html", null, true);
            echo "_close\">
\t\t<div>+</div>
\t</a>
\t<a id=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 41), "html", null, true);
            echo "_open d-none\">
\t\t<div>-</div>
\t</a>
\t<div id=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 44), "html", null, true);
            echo "_request\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        // line 47
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

        // line 48
        echo "
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
        return array (  161 => 48,  142 => 47,  139 => 46,  131 => 44,  123 => 41,  115 => 38,  96 => 22,  87 => 16,  83 => 15,  75 => 12,  67 => 9,  63 => 7,  57 => 5,  51 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for subFolder in listSubFolder %}
\t{% if subFolder.modification == 1 %}
\t<div class=\"bg-success\">{{ subFolder.name }}</div>
\t{% else %}
\t<div>{{ subFolder.name }}</div>\t
\t{% endif %}
\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a id=\"div_{{subFolder.js_id}}_add\" href=\"javascript:visibiliteAdd('div_{{subFolder.js_id}}');\">
\t\t\t\t<p>Nouveau</p>
\t\t</a>
\t\t<a id=\"div_{{subFolder.js_id}}_folder_add\" href=\"javascript:visibiliteFolder('div_{{subFolder.js_id}}_folder');\" style=\"display:none;\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_{{subFolder.js_id}}_folder_form\" style=\"display:none;\">
\t\t\t<form action=\"http://localhost:8000/{{server}}/add/sub_folder/subFolder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{subFolder.js_id}}\" type=\"text\" name=\"onFolder\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"file\" type=\"text\" name=\"type\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value='1' type=\"number\" name=\"level\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"ok\" type=\"text\" name=\"subFolder_1\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<input id=\"submitFormRegistration\" style=\"display: none;\" type=\"submit\" name=\"valide\" value=\"Valider\" class=\"btn border-secondary col-6 offset-3 mt-4 animated fadeInRight rounded text-white\"/>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-close {{subFolder.js_id}}_close\">
\t\t<div>+</div>
\t</a>
\t<a id=\"{{subFolder.js_id}}\" class=\"btn js-open {{subFolder.js_id}}_open d-none\">
\t\t<div>-</div>
\t</a>
\t<div id=\"{{subFolder.js_id}}_request\"></div>
{% endfor %}

{% block Javascript %}

{% endblock %}
", "subFolder/ajaxRequest.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/subFolder/ajaxRequest.html.twig");
    }
}
