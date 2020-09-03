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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/partials/blog/sidebar.htm */
class __TwigTemplate_06e94a4f4b165ad6ebe711459913add8e235bac0c7c95ac6335558145beb74d6 extends \Twig\Template
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
        // line 1
        echo "<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">Databases</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/blog/sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Search -->
<form role=\"form\">
    <div class=\"well\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search posts...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
        Categories
    </div>
    <ul class=\"list-group filter-list-group\">
        <li class=\"list-group-item\"><a href=\"#\">Databases</a> <span class=\"badge\">13</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Design</a> <span class=\"badge\">24</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Hardware</a> <span class=\"badge\">12</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Management</a> <span class=\"badge\">18</span></li>
        <li class=\"list-group-item\"><a href=\"#\">Security</a> <span class=\"badge\">2</span></li>
    </ul>
</div>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/blog/sidebar.htm", "");
    }
}
