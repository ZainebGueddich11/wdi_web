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

/* shared/navAdmin.html.twig */
class __TwigTemplate_45fbc12ffddac48be5746d6385485e4e4b8e290be21f4573ffacee69254042f6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/navAdmin.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"false\">
    <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                <li class=\"breadcrumb-item text-sm text-white\"><a class=\"opacity-5 text-white\">Pages</a></li>
                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
            </ol>
            <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
            <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                <div class=\"input-group\">
                    <span class=\"input-group-text text-body\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                </div>
            </div>
            <ul class=\"navbar-nav  justify-content-end\">

                <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                    <a href=\"javascript:f();\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
                        <div class=\"sidenav-toggler-inner\">
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item px-3 d-flex align-items-center\">
                    <a href=\"javascript:f1();\" class=\"nav-link text-white p-0\">
                        <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li class=\"nav-item d-flex align-items-center\">
                    <a href=";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "  class=\"nav-link text-white font-weight-bold px-0\">
                    <i class=\"fa fa-sign-out me-sm-1\" aria-hidden=\"true\"></i>
                    <span class=\"d-sm-inline d-none\">logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/navAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"false\">
    <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                <li class=\"breadcrumb-item text-sm text-white\"><a class=\"opacity-5 text-white\">Pages</a></li>
                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
            </ol>
            <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
        </nav>
        <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
            <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                <div class=\"input-group\">
                    <span class=\"input-group-text text-body\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                    <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                </div>
            </div>
            <ul class=\"navbar-nav  justify-content-end\">

                <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                    <a href=\"javascript:f();\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
                        <div class=\"sidenav-toggler-inner\">
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                            <i class=\"sidenav-toggler-line bg-white\"></i>
                        </div>
                    </a>
                </li>
                <li class=\"nav-item px-3 d-flex align-items-center\">
                    <a href=\"javascript:f1();\" class=\"nav-link text-white p-0\">
                        <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\" aria-hidden=\"true\"></i>
                    </a>
                </li>
                <li class=\"nav-item d-flex align-items-center\">
                    <a href={{ path('app_logout') }}  class=\"nav-link text-white font-weight-bold px-0\">
                    <i class=\"fa fa-sign-out me-sm-1\" aria-hidden=\"true\"></i>
                    <span class=\"d-sm-inline d-none\">logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
", "shared/navAdmin.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\navAdmin.html.twig");
    }
}
