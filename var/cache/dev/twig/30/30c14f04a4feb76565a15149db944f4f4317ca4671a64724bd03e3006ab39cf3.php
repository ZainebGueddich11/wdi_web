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

/* shared/_footerAdmin.html.twig */
class __TwigTemplate_527cd2619f7ec283359489a48693d51aaf307122d0a0417c2d071af19648bd1d extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_footerAdmin.html.twig"));

        // line 1
        echo "<footer class=\"footer pt-3  \">
    <div class=\"container-fluid\">
        <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
                <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class=\"fa fa-heart\"></i> by
                    <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold\" target=\"_blank\">Creative Tim</a>
                    for a better web.
                </div>
            </div>
            <div class=\"col-lg-6\">
                <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_footerAdmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer pt-3  \">
    <div class=\"container-fluid\">
        <div class=\"row align-items-center justify-content-lg-between\">
            <div class=\"col-lg-6 mb-lg-0 mb-4\">
                <div class=\"copyright text-center text-sm text-muted text-lg-start\">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class=\"fa fa-heart\"></i> by
                    <a href=\"https://www.creative-tim.com\" class=\"font-weight-bold\" target=\"_blank\">Creative Tim</a>
                    for a better web.
                </div>
            </div>
            <div class=\"col-lg-6\">
                <ul class=\"nav nav-footer justify-content-center justify-content-lg-end\">
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com\" class=\"nav-link text-muted\" target=\"_blank\">Creative Tim</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/presentation\" class=\"nav-link text-muted\" target=\"_blank\">About Us</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/blog\" class=\"nav-link text-muted\" target=\"_blank\">Blog</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"https://www.creative-tim.com/license\" class=\"nav-link pe-0 text-muted\" target=\"_blank\">License</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>", "shared/_footerAdmin.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\_footerAdmin.html.twig");
    }
}
