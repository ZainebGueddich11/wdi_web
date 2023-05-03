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

/* shared/_header.html.twig */
class __TwigTemplate_60aaf3bb4b6ec8b0e44883c7a6293c71a4e5489e600b63ce83a7aea5bbedfd4a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_header.html.twig"));

        // line 1
        echo "<header class=\"header-area\">
    <div class=\"left\">
        <a href=\"Javascript:void(0)\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
    </div>

        <div class=\"right\">
            <a class=\"btn dropdown-toggle\" href=\"#\" role=\"button\"
               id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false><i class=\"fa fa-user \" ></i>

            </a>


        </div>

    <div class=\"container\">
        <div class=\"row d_flex\">
            <div class=\"col-sm-3 logo_sm\">
                <div class=\"logo\">
                    <a href=\"index.html\"></a>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1 col-md-12 col-sm-9\">
                <div class=\"navbar-area\">
                    <nav class=\"site-navbar\">
                        <ul>
                            <li><a class=\"active\" href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"action.html\">take action</a></li>
                            <li><a href=\"index.html\" class=\"logo_midle\">covido</a></li>
                            <li><a href=\"news.html\">news</a></li>
                            <li><a href=\"doctores.html\">doctores</a></li>

                            <li><a href=\"contact.html\">Contact </a></li>
                        </ul>
                        <button class=\"nav-toggler\">
                            <span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header-area\">
    <div class=\"left\">
        <a href=\"Javascript:void(0)\"><i class=\"fa fa-search\" aria-hidden=\"true\"></i></a>
    </div>

        <div class=\"right\">
            <a class=\"btn dropdown-toggle\" href=\"#\" role=\"button\"
               id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false><i class=\"fa fa-user \" ></i>

            </a>


        </div>

    <div class=\"container\">
        <div class=\"row d_flex\">
            <div class=\"col-sm-3 logo_sm\">
                <div class=\"logo\">
                    <a href=\"index.html\"></a>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1 col-md-12 col-sm-9\">
                <div class=\"navbar-area\">
                    <nav class=\"site-navbar\">
                        <ul>
                            <li><a class=\"active\" href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"action.html\">take action</a></li>
                            <li><a href=\"index.html\" class=\"logo_midle\">covido</a></li>
                            <li><a href=\"news.html\">news</a></li>
                            <li><a href=\"doctores.html\">doctores</a></li>

                            <li><a href=\"contact.html\">Contact </a></li>
                        </ul>
                        <button class=\"nav-toggler\">
                            <span></span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>", "shared/_header.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\_header.html.twig");
    }
}
