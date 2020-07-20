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

/* subFolder/newSubFolder.html.twig */
class __TwigTemplate_87ce91c1be339e121ac31ae2b5512e86b3c42060f4e8bf2d87120c8d63c3cca8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subFolder/newSubFolder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subFolder/newSubFolder.html.twig"));

        // line 1
        echo "<div class=\"col-12 d-flex p-0\">
\t<a id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 2, $this->source); })()), "jsId", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"btn js-close ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 2, $this->source); })()), "jsId", [], "any", false, false, false, 2), "html", null, true);
        echo "_close p-1\">
\t\t<div>+</div>
\t</a>
\t<a id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 5, $this->source); })()), "jsId", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"btn js-open ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 5, $this->source); })()), "jsId", [], "any", false, false, false, 5), "html", null, true);
        echo "_open d-none p-1\">
\t\t<div>-</div>
\t</a>
\t";
        // line 8
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8), "folder")) {
            // line 9
            echo "\t\t<img src=\"/picture/folder.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t";
        } else {
            // line 11
            echo "\t\t<img src=\"/picture/file.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t";
        }
        // line 13
        echo "\t<div>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
\t";
        // line 14
        if (0 !== twig_compare((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 14, $this->source); })()), "null")) {
            // line 15
            echo "\t\t<form action=\"SubFolder/addCheckBox\" method=\"post\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 15, $this->source); })()), "jsId", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"addCheckBox checkBox\">
\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t</form>
\t";
        }
        // line 19
        echo "</div>
<div id=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subFolder"]) || array_key_exists("subFolder", $context) ? $context["subFolder"] : (function () { throw new RuntimeError('Variable "subFolder" does not exist.', 20, $this->source); })()), "jsId", [], "any", false, false, false, 20), "html", null, true);
        echo "_request\" class=\"ml-3 border-left\"></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "subFolder/newSubFolder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  87 => 19,  79 => 15,  77 => 14,  72 => 13,  68 => 11,  64 => 9,  62 => 8,  54 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12 d-flex p-0\">
\t<a id=\"{{subFolder.jsId}}\" class=\"btn js-close {{subFolder.jsId}}_close p-1\">
\t\t<div>+</div>
\t</a>
\t<a id=\"{{subFolder.jsId}}\" class=\"btn js-open {{subFolder.jsId}}_open d-none p-1\">
\t\t<div>-</div>
\t</a>
\t{% if subFolder.type == \"folder\" %}
\t\t<img src=\"/picture/folder.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t{% else %}
\t\t<img src=\"/picture/file.png\" alt=\"Folder\" width=\"20px\" height=\"30px\"/>
\t{% endif %}
\t<div>{{ subFolder.name }}</div>
\t{% if project != \"null\" %}
\t\t<form action=\"SubFolder/addCheckBox\" method=\"post\" id=\"{{subFolder.jsId}}\" class=\"addCheckBox checkBox\">
\t\t\t<input type=\"checkbox\" value=\"1\" class=\"ml-2\">
\t\t</form>
\t{% endif %}
</div>
<div id=\"{{subFolder.jsId}}_request\" class=\"ml-3 border-left\"></div>
", "subFolder/newSubFolder.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/subFolder/newSubFolder.html.twig");
    }
}
