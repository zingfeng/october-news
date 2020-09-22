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
        echo "<div><!-- Blog Post #1 -->
<div><img alt=\"\" src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/aleksey.png");
        echo "\" /><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>

<div>
<p>by John Doe on July 25, 2014</p>
<a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img alt=\"\" class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post1.jpg");
        echo "\" /></a>

<p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn&#39;t commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
<a class=\"btn btn-lg btn-default\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a></div>
</div>
</div>

<!-- Blog Post #2 -->

<div><img alt=\"\" src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/sam.png");
        echo "\" />
<div>
<h5><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Barnaby The Bear&#39;s my name, never call me Jack or James, I will sing my way to fame.</a></h5>

<p>by John Doe on July 15, 2014</p>
<a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\"><img alt=\"\" class=\"img-responsive\" src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post2.jpg");
        echo "\" /></a>

<p>I never spend much time in school but I taught ladies plenty. It&#39;s true I hire my body out for pay, hey hey. I&#39;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&#39;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &#39;Cause I&#39;m the unknown stuntman that makes Eastwood look so fine.</p>
<a class=\"btn btn-lg btn-default\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Read More...</a></div>
</div>
<!-- Pagination -->

<div>
<ul>
\t<li>&nbsp;</li>
\t<li><a href=\"#fakelink\">1</a></li>
\t<li><a href=\"#fakelink\">2</a></li>
\t<li><a href=\"#fakelink\">3</a></li>
\t<li><a href=\"#fakelink\">4</a></li>
\t<li><a href=\"#fakelink\">5</a></li>
\t<li><a href=\"#fakelink\">6</a></li>
\t<li><a href=\"#fakelink\">7</a></li>
\t<li><a href=\"#fakelink\">8</a></li>
\t<li>&nbsp;</li>
</ul>
</div>

<div>&nbsp;</div>

<div>";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>";
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
        return array (  109 => 44,  85 => 23,  77 => 20,  71 => 17,  66 => 15,  57 => 9,  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div><!-- Blog Post #1 -->
<div><img alt=\"\" src=\"{{ 'assets/images/team/aleksey.png'|theme }}\" /><a href=\"{{ 'blog/post'|page }}\">Children of the sun, see your time has just begun, searching for your ways, through adventures every day.</a>

<div>
<p>by John Doe on July 25, 2014</p>
<a href=\"{{ 'blog/post'|page }}\"><img alt=\"\" class=\"img-responsive\" src=\"{{ 'assets/images/blog/post1.jpg'|theme }}\" /></a>

<p>Ten years ago a crack commando unit was sent to prison by a military court for a crime they didn&#39;t commit. These men promptly escaped from a maximum security stockade to the Los Angeles underground. Today, still wanted by the government, they survive as soldiers of fortune. If you have a problem and no one else can help, and if you can find them, maybe you can hire the A-team.</p>
<a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a></div>
</div>
</div>

<!-- Blog Post #2 -->

<div><img alt=\"\" src=\"{{ 'assets/images/team/sam.png'|theme }}\" />
<div>
<h5><a href=\"{{ 'blog/post'|page }}\">Barnaby The Bear&#39;s my name, never call me Jack or James, I will sing my way to fame.</a></h5>

<p>by John Doe on July 15, 2014</p>
<a href=\"{{ 'blog/post'|page }}\"><img alt=\"\" class=\"img-responsive\" src=\"{{ 'assets/images/blog/post2.jpg'|theme }}\" /></a>

<p>I never spend much time in school but I taught ladies plenty. It&#39;s true I hire my body out for pay, hey hey. I&#39;ve gotten burned over Cheryl Tiegs, blown up for Raquel Welch. But when I end up in the hay it&#39;s only hay, hey hey. I might jump an open drawbridge, or Tarzan from a vine. &#39;Cause I&#39;m the unknown stuntman that makes Eastwood look so fine.</p>
<a class=\"btn btn-lg btn-default\" href=\"{{ 'blog/post'|page }}\">Read More...</a></div>
</div>
<!-- Pagination -->

<div>
<ul>
\t<li>&nbsp;</li>
\t<li><a href=\"#fakelink\">1</a></li>
\t<li><a href=\"#fakelink\">2</a></li>
\t<li><a href=\"#fakelink\">3</a></li>
\t<li><a href=\"#fakelink\">4</a></li>
\t<li><a href=\"#fakelink\">5</a></li>
\t<li><a href=\"#fakelink\">6</a></li>
\t<li><a href=\"#fakelink\">7</a></li>
\t<li><a href=\"#fakelink\">8</a></li>
\t<li>&nbsp;</li>
</ul>
</div>

<div>&nbsp;</div>

<div>{% partial 'blog/sidebar' %}</div>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/blog/blog.htm", "");
    }
}
