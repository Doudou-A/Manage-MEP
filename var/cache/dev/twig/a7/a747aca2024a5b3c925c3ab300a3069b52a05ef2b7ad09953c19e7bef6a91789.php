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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listSubFolder"]) || array_key_exists("listSubFolder", $context) ? $context["listSubFolder"] : (function () { throw new RuntimeError('Variable "listSubFolder" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subFolder"]) {
            // line 2
            echo "\t<div>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "name", [], "any", false, false, false, 2), "html", null, true);
            echo "</div>
\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a href=\"javascript:visibilite('div_form";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "');\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_form";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\" style=\"display:none;\">
\t\t\t<form action=\"http://localhost:8000/";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["server"]) || array_key_exists("server", $context) ? $context["server"] : (function () { throw new RuntimeError('Variable "server" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "/add/sub_folder/subFolder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" type=\"text\" name=\"subFolder\" required=\"required\"/>
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
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn js-test\">
\t\t<div id=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "_sign\">+</div>
\t</a>
\t<a id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"btn js-test-moins\">
\t\t<div id=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "_sign-\"></div>
\t</a>
\t<div class=\"testing\" id=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subFolder"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "_request\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subFolder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
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

        // line 41
        echo "\t<script language=\"javascript\" src=\"https://code.jquery.com/jquery-2.2.4.min.js\"></script>
\t<script language=\"javascript\" src=\"js/style.js\"></script>
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
        return array (  141 => 41,  122 => 40,  119 => 39,  111 => 37,  106 => 35,  102 => 34,  97 => 32,  93 => 31,  74 => 15,  65 => 9,  61 => 8,  55 => 5,  48 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for subFolder in listSubFolder %}
\t<div>{{ subFolder.name }}</div>
\t<div class=\"col-12 d-flex\">
\t\t<img src=\"picture/folder_win10.png\" alt=\"Folder\" width=\"3%\"/>
\t\t<a href=\"javascript:visibilite('div_form{{subFolder.id}}');\">
\t\t\t<p>Ajouter un Dossier</p>
\t\t</a>
\t\t<div id=\"div_form{{subFolder.id}}\" style=\"display:none;\">
\t\t\t<form action=\"http://localhost:8000/{{server}}/add/sub_folder/subFolder\" id=\"formRegistration\" method=\"POST\">
\t\t\t\t<div class=\"row col-12 p-0 m-0\">
\t\t\t\t\t<div class=\"row p-0 m-0 col-12\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" type=\"text\" name=\"name\" required=\"required\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t<input class=\"col-lg-12 p-2 animated fadeInLeft border\" value=\"{{subFolder.id}}\" type=\"text\" name=\"subFolder\" required=\"required\"/>
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
\t<a id=\"{{subFolder.id}}\" class=\"btn js-test\">
\t\t<div id=\"{{subFolder.id}}_sign\">+</div>
\t</a>
\t<a id=\"{{subFolder.id}}\" class=\"btn js-test-moins\">
\t\t<div id=\"{{subFolder.id}}_sign-\"></div>
\t</a>
\t<div class=\"testing\" id=\"{{subFolder.id}}_request\"></div>
{% endfor %}

{% block javascripts %}
\t<script language=\"javascript\" src=\"https://code.jquery.com/jquery-2.2.4.min.js\"></script>
\t<script language=\"javascript\" src=\"js/style.js\"></script>
{% endblock %}
", "subFolder/ajaxRequest.html.twig", "/Users/Adel/Documents/ARTEVA/Manage-MEP/templates/subFolder/ajaxRequest.html.twig");
    }
}
