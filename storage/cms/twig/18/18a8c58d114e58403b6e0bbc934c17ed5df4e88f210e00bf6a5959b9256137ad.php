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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/partials/nav.htm */
class __TwigTemplate_b3b1f12f7c3032618856b17b7bd4572a9fe455542d7452aeb26254d799cbac7c extends \Twig\Template
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
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Homepage"], "pages" => ["name" => "News", "sublinks" => ["about" => [0 => "samples/about", 1 => "About Us"], "contact" => [0 => "samples/contact", 1 => "Contact Us"], "pricing-table" => [0 => "samples/pricing-table", 1 => "Pricing Table"], "services" => [0 => "samples/services", 1 => "Services"], "signin" => [0 => "samples/signin", 1 => "Sign In"], "register" => [0 => "samples/register", 1 => "Register"], "error" => [0 => "error", 1 => "Error Page"], "404" => [0 => "404", 1 => "404 Page"]]], "portfolio" => ["name" => "Product", "sublinks" => ["portfolio" => [0 => "portfolio/portfolio", 1 => "Portfolio"], "project" => [0 => "portfolio/project", 1 => "Project"]]], "blog" => ["name" => "Blog", "sublinks" => ["blog" => [0 => "blog/blog", 1 => "Blog"], "post" => [0 => "blog/post", 1 => "Blog Post"]]], "ui-elements" => [0 => "ui-elements", 1 => "About Us"]];
        // line 36
        echo "
";
        // line 59
        echo "
";
        // line 60
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 61
        echo "
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Realtimes</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 73
        echo twig_call_macro($macros["nav"], "macro_render_menu", [($context["links"] ?? null)], 73, $context, $this->getSourceContext());
        echo "
                <!--  <li>
                    <button
                        onclick=\"window.location='";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("samples/signin");
        echo "'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Sign in
                    </button>
                </li> -->
            </ul>
        </div>
    </div>
</nav>";
    }

    // line 37
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 38
            echo "    ";
            $macros["subnav"] = $this;
            // line 39
            echo "
    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 41
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 41)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 43
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 43)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 43)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 43)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 44
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 44)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 45
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 45)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 47
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 47)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 47)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 48)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 49
                echo "            </a>
            ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 50)) {
                    // line 51
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 53
                    echo twig_call_macro($macros["subnav"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, false, 53)], 53, $context, $this->getSourceContext());
                    echo "
                </ul>
            ";
                }
                // line 56
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  145 => 53,  141 => 51,  139 => 50,  136 => 49,  132 => 48,  128 => 47,  122 => 45,  118 => 44,  114 => 43,  106 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 37,  70 => 76,  64 => 73,  57 => 69,  47 => 61,  45 => 60,  42 => 59,  39 => 36,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Note: Only one levels of sublinks are supported by Bootstrap 3 #}
{% set
    links = {
        'home': ['home', 'Homepage'],
        'pages': {
            name: 'News',
            sublinks: {
                'about':         ['samples/about', 'About Us'],
                'contact':       ['samples/contact', 'Contact Us'],
                'pricing-table': ['samples/pricing-table', 'Pricing Table'],
                'services':      ['samples/services', 'Services'],
                'signin':        ['samples/signin', 'Sign In'],
                'register':      ['samples/register', 'Register'],
                'error':         ['error', 'Error Page'],
                '404':           ['404', '404 Page'],
            },
        },
        'portfolio': {
            name: 'Product',
            sublinks: {
                'portfolio': ['portfolio/portfolio', 'Portfolio'],
                'project': ['portfolio/project', 'Project'],
            },
        },
        'blog': {
            name: 'Blog',
            sublinks: {
                'blog': ['blog/blog', 'Blog'],
                'post': ['blog/post', 'Blog Post'],
            },
        },
        'ui-elements': ['ui-elements', 'About Us'],

    }
%}

{% macro render_menu(links) %}
    {% import _self as subnav %}

    {% for code, link in links %}
        <li class=\"{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}\">
            <a
                href=\"{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}\"
                {% if link.sublinks %}data-toggle=\"dropdown\"{% endif %}
                class=\"{{ link.sublinks ? 'dropdown-toggle' }}\"
            >
                {{ link.name ?: link[1] }}
                {% if link.sublinks %}<span class=\"caret\"></span>{% endif %}
            </a>
            {% if link.sublinks %}
                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    {{ subnav.render_menu(link.sublinks) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as nav %}

<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Realtimes</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {{ nav.render_menu(links) }}
                <!--  <li>
                    <button
                        onclick=\"window.location='{{ 'samples/signin'|page }}'\"
                        class=\"btn btn-sm navbar-btn btn-primary navbar-right hidden-sm hidden-xs\">
                        Sign in
                    </button>
                </li> -->
            </ul>
        </div>
    </div>
</nav>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/nav.htm", "");
    }
}
