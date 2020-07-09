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
            echo "\t<div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</div>
\t<div>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 3), "html", null, true);
            echo "</div>
\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a href=\"javascript:visibilite('div_form";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 6), "html", null, true);
            echo "');\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_form";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 9), "html", null, true);
            echo "\" style=\"display:none;\">
\t\t\t<form action=\"http://localhost:8000/";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "/add/sub_folder/subFolder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 16), "html", null, true);
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
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"btn js-close ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 32), "html", null, true);
            echo "_close\">
\t\t<div>+</div>
\t</a>
\t<a id=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"btn js-open ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 35), "html", null, true);
            echo "_open d-none\">
\t\t<div>-</div>
\t</a>
\t<div id=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "js_id", [], "any", false, false, false, 38), "html", null, true);
            echo "_request\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
";
        // line 41
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

        // line 42
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
        return array (  143 => 42,  124 => 41,  121 => 40,  113 => 38,  105 => 35,  97 => 32,  78 => 16,  69 => 10,  65 => 9,  59 => 6,  53 => 3,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for subFolder in listSubFolder %}
\t<div>{{ subFolder.name }}</div>
\t<div>{{ subFolder.js_id }}</div>
\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a href=\"javascript:visibilite('div_form{{subFolder.js_id}}');\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_form{{subFolder.js_id}}\" style=\"display:none;\">
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
