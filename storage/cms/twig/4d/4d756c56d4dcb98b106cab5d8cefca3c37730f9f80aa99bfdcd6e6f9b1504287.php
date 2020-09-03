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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/pages/shop/shop.htm */
class __TwigTemplate_a89bc56856e130819876f94bd59555a760a8460a8bfb9dfcbb2047a8aa46365d extends \Twig\Template
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
        <h3>Shop</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("shop/sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "        </div>
        <div class=\"col-sm-8\">
            <!-- Filters -->
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#popular\" data-toggle=\"tab\">Popular</a></li>
                <li><a href=\"#recommended\" data-toggle=\"tab\">Recommended</a></li>
                <li><a href=\"#recent\" data-toggle=\"tab\">New Products</a></li>
                <li class=\"hidden-sm\"><a href=\"#last\" data-toggle=\"tab\">Last Chance</a></li>
            </ul>

            <div class=\"row\">
                <div class=\"tab-content\">

                    <!-- All-->
                    <div class=\"tab-pane fade in active\" id=\"popular\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Ebooks -->
                    <div class=\"tab-pane fade\" id=\"recommended\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 105
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"recent\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 138
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 139
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"last\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 162
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/ipad.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 163
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/imac.png");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 173
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/shop/macbook.jpg");
        echo "\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop/product");
        echo "\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
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

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/shop/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 183,  337 => 182,  325 => 173,  319 => 172,  307 => 163,  301 => 162,  289 => 153,  283 => 152,  267 => 139,  261 => 138,  249 => 129,  243 => 128,  231 => 119,  225 => 118,  209 => 105,  203 => 104,  190 => 94,  184 => 93,  168 => 80,  162 => 79,  150 => 70,  144 => 69,  132 => 60,  126 => 59,  114 => 50,  108 => 49,  96 => 40,  90 => 39,  77 => 29,  71 => 28,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Shop</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            {% partial 'shop/sidebar' %}
        </div>
        <div class=\"col-sm-8\">
            <!-- Filters -->
            <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#popular\" data-toggle=\"tab\">Popular</a></li>
                <li><a href=\"#recommended\" data-toggle=\"tab\">Recommended</a></li>
                <li><a href=\"#recent\" data-toggle=\"tab\">New Products</a></li>
                <li class=\"hidden-sm\"><a href=\"#last\" data-toggle=\"tab\">Last Chance</a></li>
            </ul>

            <div class=\"row\">
                <div class=\"tab-content\">

                    <!-- All-->
                    <div class=\"tab-pane fade in active\" id=\"popular\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Ebooks -->
                    <div class=\"tab-pane fade\" id=\"recommended\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product featured\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p class=\"price\">
                                    <span class=\"old\">\$80.99</span>
                                    <span class=\"new\">\$59.99</span>
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"recent\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <!-- Audio CD -->
                    <div class=\"tab-pane fade\" id=\"last\">
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/ipad.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #3</h6></a>
                                <p>
                                    \$50.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/imac.png'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #1</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                        <div class=\"col-sm-6 col-lg-4\">
                            <div class=\"shop-product\">
                                <a href=\"{{ 'shop/product'|page }}\"><img src=\"{{ 'assets/images/shop/macbook.jpg'|theme }}\" class=\"img-responsive\" alt=\"\"></a>
                                <a href=\"{{ 'shop/product'|page }}\"><h6>Product #2</h6></a>
                                <p>
                                    \$200.00
                                </p>
                                <a href=\"#\" class=\"btn btn-sm btn-info\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
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

        </div>
    </div>
</div>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/shop/shop.htm", "");
    }
}
