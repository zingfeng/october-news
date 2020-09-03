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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/pages/blog/blog.htm */
class __TwigTemplate_297dc79d16e593afde523b8001091ad6906cb71845377862852797002a038b00 extends \Twig\Template
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
        echo "<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog AA</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post1.jpg");
        echo "\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Blog Post #2 -->
            <div class=\"blog\">
                <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 15, 2014</p>
                    <a href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post2.jpg");
        echo "\" alt=\"\"></a>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "
        </div>
    </div>
</div>

<h2>aa</h2>
<hr><hr>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/blog/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 61,  126 => 60,  100 => 37,  93 => 35,  86 => 31,  80 => 28,  71 => 22,  64 => 20,  57 => 16,  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Blog AA</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-9\">

            <!-- Blog Post #1 -->
            <div class=\"blog\">
                <img src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"{{ 'blog/post'|page }}\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 25, 2014</p>
                    <a href=\"{{ 'blog/post'|page }}\"><img class=\"img-responsive\" src=\"{{ 'assets/images/blog/post1.jpg'|theme }}\" alt=\"\"></a>
                    <p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn't commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a>
                </div>
            </div>

            <!-- Blog Post #2 -->
            <div class=\"blog\">
                <img src=\"{{ 'assets/images/team/sam.png'|theme }}\" alt=\"\">
                <div class=\"blog-desc\">
                    <h5>
                        <a href=\"{{ 'blog/post'|page }}\">Barnaby The Bear's my name, never call me Jack or James, I will sing my way to fame.</a>
                    </h5>
                    <hr />
                    <p class=\"text-muted\">by John Doe on July 15, 2014</p>
                    <a href=\"{{ 'blog/post'|page }}\"><img class=\"img-responsive\" src=\"{{ 'assets/images/blog/post2.jpg'|theme }}\" alt=\"\"></a>
                    <p>I never spend much time in school but I taught ladies plenty. It's true I hire my body out for pay, hey hey. I've gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it's only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. 'Cause I'm the unknown stuntman that makes Eastwood look so fine.</p>
                    <a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a>
                </div>
            </div>

            <!-- Pagination -->
            <div class=\"pull-right\">
                <ul class=\"pagination\">
                    <li class=\"previous\"><a href=\"#fakelink\" class=\"fui-arrow-left\"></a></li>
                    <li class=\"active\"><a href=\"#fakelink\">1</a></li>
                    <li><a href=\"#fakelink\">2</a></li>
                    <li><a href=\"#fakelink\">3</a></li>
                    <li><a href=\"#fakelink\">4</a></li>
                    <li><a href=\"#fakelink\">5</a></li>
                    <li><a href=\"#fakelink\">6</a></li>
                    <li><a href=\"#fakelink\">7</a></li>
                    <li><a href=\"#fakelink\">8</a></li>
                    <li class=\"next\"><a href=\"#fakelink\" class=\"fui-arrow-right\"></a></li>
                </ul>
            </div>
            <div class=\"clearfix\"></div>
        </div>
        <div class=\"col-sm-3\">

            {% partial 'blog/sidebar' %}

        </div>
    </div>
</div>

<h2>aa</h2>
<hr><hr>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/blog/blog.htm", "");
    }
}
