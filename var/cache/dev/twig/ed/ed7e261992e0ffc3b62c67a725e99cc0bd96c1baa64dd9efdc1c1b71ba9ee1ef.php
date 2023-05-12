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
class __TwigTemplate_9c86ec3595e8045d26cf96f0115b12397b131aba8b838eda231de2eda8bcc65c extends Template
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
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route_params"], "method", false, false, false, 2));
        // line 3
        echo "<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"false\">
    <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                <li class=\"breadcrumb-item text-sm text-white\"><a class=\"opacity-5 text-white\">Pages</a></li>

                ";
        // line 9
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 9, $this->source); })()), "/profile"))) {
            // line 10
            echo "                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Profile</li>
                ";
        } elseif ((0 === twig_compare(        // line 11
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 11, $this->source); })()), "/dashboard"))) {
            // line 12
            echo "                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
                ";
        } elseif (twig_in_filter("/predict",         // line 13
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "                    <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Predictive analysis</li>
                ";
        } elseif (twig_in_filter("/user/",         // line 15
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "                    <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">User</li>
                ";
        }
        // line 18
        echo "            </ol>
            ";
        // line 19
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 19, $this->source); })()), "/profile"))) {
            // line 20
            echo "            <h6 class=\"font-weight-bolder text-white mb-0\">Profile</h6>
            ";
        } elseif ((0 === twig_compare(        // line 21
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 21, $this->source); })()), "/dashboard"))) {
            // line 22
            echo "            <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
            ";
        } elseif (twig_in_filter("/predict",         // line 23
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "            <h6 class=\"font-weight-bolder text-white mb-0\">Predictive analysis</h6>

            ";
        } elseif (twig_in_filter("/user/",         // line 26
(isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "            <h6 class=\"font-weight-bolder text-white mb-0\">User</h6>
            ";
        }
        // line 29
        echo "        </nav>
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
        // line 54
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
        return array (  124 => 54,  97 => 29,  93 => 27,  91 => 26,  87 => 24,  85 => 23,  82 => 22,  80 => 21,  77 => 20,  75 => 19,  72 => 18,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  58 => 12,  56 => 11,  53 => 10,  51 => 9,  43 => 3,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPath = path(app.request.attributes.get('_route'),
    app.request.attributes.get('_route_params')) %}
<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl\" id=\"navbarBlur\" data-scroll=\"false\">
    <div class=\"container-fluid py-1 px-3\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                <li class=\"breadcrumb-item text-sm text-white\"><a class=\"opacity-5 text-white\">Pages</a></li>

                {% if currentPath==\"/profile\" %}
                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Profile</li>
                {% elseif  currentPath==\"/dashboard\"%}
                <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
                {% elseif \"/predict\" in currentPath%}
                    <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Predictive analysis</li>
                {% elseif  \"/user/\" in currentPath %}
                    <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">User</li>
                {% endif %}
            </ol>
            {% if currentPath==\"/profile\" %}
            <h6 class=\"font-weight-bolder text-white mb-0\">Profile</h6>
            {% elseif  currentPath==\"/dashboard\"%}
            <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
            {% elseif \"/predict\" in currentPath%}
            <h6 class=\"font-weight-bolder text-white mb-0\">Predictive analysis</h6>

            {% elseif  \"/user/\" in currentPath %}
            <h6 class=\"font-weight-bolder text-white mb-0\">User</h6>
            {% endif %}
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
