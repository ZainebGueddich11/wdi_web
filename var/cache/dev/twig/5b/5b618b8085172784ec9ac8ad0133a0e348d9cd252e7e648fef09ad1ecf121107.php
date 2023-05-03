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

/* shared/_footer.html.twig */
class __TwigTemplate_d12931ab7b0c7abcda5231600c4e126d5b8f02203a29ae412d5eaefe2dab68ff extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>Resources</h3>
                        <ul class=\"menu_footer\">
                            <li><a href=\"index.html\">Home</a><li>
                            <li><a href=\"javascript:void(0)\">What we do</a><li>
                            <li> <a href=\"javascript:void(0)\">Media</a><li>
                            <li> <a href=\"javascript:void(0)\">Travel Advice</a><li>
                            <li><a href=\"javascript:void(0)\">Protection</a><li>
                            <li><a href=\"javascript:void(0)\">Care</a><li>
                        </ul>


                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>About</h3>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                    </div>
                </div>



                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"hedingh3  text_align_left\">
                        <h3>Contact  Us</h3>
                        <ul class=\"top_infomation\">
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                Making this the first true
                            </li>
                            <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                                Call : +01 1234567890
                            </li>
                            <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                <a href=\"Javascript:void(0)\">Email : demo@gmail.com</a>
                            </li>
                        </ul>


                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>countrys</h3>
                        <div class=\"map\">
                            <img src=\"images/map.png\" alt=\"#\"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 offset-md-2\">
                        <p>© 2020 All Rights Reserved. Design by <a href=\"https://html.design/\"> Free html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>Resources</h3>
                        <ul class=\"menu_footer\">
                            <li><a href=\"index.html\">Home</a><li>
                            <li><a href=\"javascript:void(0)\">What we do</a><li>
                            <li> <a href=\"javascript:void(0)\">Media</a><li>
                            <li> <a href=\"javascript:void(0)\">Travel Advice</a><li>
                            <li><a href=\"javascript:void(0)\">Protection</a><li>
                            <li><a href=\"javascript:void(0)\">Care</a><li>
                        </ul>


                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>About</h3>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various</p>
                    </div>
                </div>



                <div class=\"col-lg-3 col-md-6 col-sm-6\">
                    <div class=\"hedingh3  text_align_left\">
                        <h3>Contact  Us</h3>
                        <ul class=\"top_infomation\">
                            <li><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                Making this the first true
                            </li>
                            <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                                Call : +01 1234567890
                            </li>
                            <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                                <a href=\"Javascript:void(0)\">Email : demo@gmail.com</a>
                            </li>
                        </ul>


                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                    <div class=\"hedingh3 text_align_left\">
                        <h3>countrys</h3>
                        <div class=\"map\">
                            <img src=\"images/map.png\" alt=\"#\"/>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 offset-md-2\">
                        <p>© 2020 All Rights Reserved. Design by <a href=\"https://html.design/\"> Free html Templates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>", "shared/_footer.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\_footer.html.twig");
    }
}
