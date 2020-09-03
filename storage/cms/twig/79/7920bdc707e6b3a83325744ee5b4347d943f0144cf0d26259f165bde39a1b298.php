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

/* C:\Users\zingfeng\Desktop\Realtimes\code\news\october/themes/responsiv-flat/pages/samples/contact.htm */
class __TwigTemplate_a0b85bc1a099be6b46a4213ec2e2245ce8720a57316789351dd57e3d8a3f6fe2 extends \Twig\Template
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
        <h3>Contact us</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <p>Beef ribs pig spare ribs boudin pork chop swine. Shankle pastrami ham, doner prosciutto cow t-bone kielbasa turkey pig venison tail chicken leberkas. </p>
            <form role=\"form\">
                <div class=\"form-group\">
                    <label for=\"email\">Your email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Your name</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">
                </div>
                <div class=\"form-group\">
                    <label for=\"message\">Your message</label>
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" placeholder=\"Enter message\" style=\"resize: none\"></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-lg btn-info\">Send message</button>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"checkbox pull-right\" for=\"checkbox1\">
                            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
                            Send a copy to myself
                        </label>
                    </div>
                </div>
            </form>
            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Our location</h3>
                <ul>
                    <li>100 Pitt Street</li>
                    <li>Sydney NSW, 2000</li>
                    <li>Phone: +61 0000 0000</li>
                    <li>Fax: +61 0000 0000</li>
                    <li>Email: <a href=\"#\">some@email.dev.null</a></li>
                </ul>
            </div>

            <div class=\"google-maps\">
              <iframe
                width=\"500\"
                height=\"450\"
                frameborder=\"0\"
                scrolling=\"no\"
                marginheight=\"0\"
                marginwidth=\"0\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52978.975064878534!2d151.21417105100554!3d-33.910613674462084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sus!4v1406012463524\"></iframe>
            </div>

        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-title\">
    <div class=\"container\">
        <h3>Contact us</h3>
    </div>
</section>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-md-7\">
            <p>Beef ribs pig spare ribs boudin pork chop swine. Shankle pastrami ham, doner prosciutto cow t-bone kielbasa turkey pig venison tail chicken leberkas. </p>
            <form role=\"form\">
                <div class=\"form-group\">
                    <label for=\"email\">Your email address</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\">
                </div>
                <div class=\"form-group\">
                    <label for=\"name\">Your name</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\">
                </div>
                <div class=\"form-group\">
                    <label for=\"message\">Your message</label>
                    <textarea class=\"form-control\" rows=\"7\" id=\"message\" placeholder=\"Enter message\" style=\"resize: none\"></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <button type=\"submit\" class=\"btn btn-lg btn-info\">Send message</button>
                    </div>
                    <div class=\"col-sm-6\">
                        <label class=\"checkbox pull-right\" for=\"checkbox1\">
                            <input type=\"checkbox\" value=\"\" id=\"checkbox1\" data-toggle=\"checkbox\">
                            Send a copy to myself
                        </label>
                    </div>
                </div>
            </form>
            <br /><br />

        </div>

        <div class=\"col-md-5\">
            <div class=\"contact-banner\">
                <h3 class=\"banner-title\">Our location</h3>
                <ul>
                    <li>100 Pitt Street</li>
                    <li>Sydney NSW, 2000</li>
                    <li>Phone: +61 0000 0000</li>
                    <li>Fax: +61 0000 0000</li>
                    <li>Email: <a href=\"#\">some@email.dev.null</a></li>
                </ul>
            </div>

            <div class=\"google-maps\">
              <iframe
                width=\"500\"
                height=\"450\"
                frameborder=\"0\"
                scrolling=\"no\"
                marginheight=\"0\"
                marginwidth=\"0\"
                src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52978.975064878534!2d151.21417105100554!3d-33.910613674462084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sus!4v1406012463524\"></iframe>
            </div>

        </div>

    </div>
</div>", "C:\\Users\\zingfeng\\Desktop\\Realtimes\\code\\news\\october/themes/responsiv-flat/pages/samples/contact.htm", "");
    }
}