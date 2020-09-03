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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/partials/shop/sidebar.htm */
class __TwigTemplate_fb848d33ab18579f5515150801295ffecbf3fd8304d52a067d4a9958036a15a8 extends \Twig\Template
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
            <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel-group\" id=\"shopNav\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavOne\">
                Books &amp; CDs
            </a>
        </div>
        <div id=\"shopNavOne\" class=\"panel-collapse collapse in\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavTwo\" class=\"collapsed\">
                Electronics &amp; Computers
            </a>
        </div>
        <div id=\"shopNavTwo\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavThree\" class=\"collapsed\">
                Home &amp; Garden
            </a>
        </div>
        <div id=\"shopNavThree\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFour\" class=\"collapsed\">
                Toys &amp; Kids
            </a>
        </div>
        <div id=\"shopNavFour\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFive\" class=\"collapsed\">
                Clothing &amp; Shoes
            </a>
        </div>
        <div id=\"shopNavFive\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/shop/sidebar.htm";
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
            <input type=\"text\" class=\"form-control\" placeholder=\"Search products...\">
            <span class=\"input-group-btn\">
                <button class=\"btn btn-primary\" type=\"button\"><i class=\"fa fa-search\"></i></button>
            </span>
        </div>
    </div>
</form>

<!-- Categories -->
<div class=\"panel-group\" id=\"shopNav\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavOne\">
                Books &amp; CDs
            </a>
        </div>
        <div id=\"shopNavOne\" class=\"panel-collapse collapse in\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavTwo\" class=\"collapsed\">
                Electronics &amp; Computers
            </a>
        </div>
        <div id=\"shopNavTwo\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavThree\" class=\"collapsed\">
                Home &amp; Garden
            </a>
        </div>
        <div id=\"shopNavThree\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFour\" class=\"collapsed\">
                Toys &amp; Kids
            </a>
        </div>
        <div id=\"shopNavFour\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <a data-toggle=\"collapse\" data-parent=\"#shopNav\" href=\"#shopNavFive\" class=\"collapsed\">
                Clothing &amp; Shoes
            </a>
        </div>
        <div id=\"shopNavFive\" class=\"panel-collapse collapse\">
            <ul class=\"list-group filter-list-group\">
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">17</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">8</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">10</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">24</span></li>
                <li class=\"list-group-item\"><a href=\"#\">Subcategory</a> <span class=\"badge\">4</span></li>
            </ul>
        </div>
    </div>
</div>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/partials/shop/sidebar.htm", "");
    }
}
