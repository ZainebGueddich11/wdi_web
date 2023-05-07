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

/* shared/_headerAdmin.html.twig */
class __TwigTemplate_be9135315625432e3c64616e424462153684ed953a69ed5aaf940c58b90d1918 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_headerAdmin.html.twig"));

        // line 1
        echo "
<body class=\"g-sidenav-show   bg-gray-100\">

<div class=\"min-height-300  position-absolute w-100\" style=\"background-color: #111b52 !important;\" ></div>
<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
            <img src=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/img/logo.png"), "html", null, true);
        echo " class=\"navbar-brand-img h-100\" alt=\"main_logo\">
            <span class=\"ms-1 font-weight-bold\">WDI</span>
        </a>
    </div>
    <hr class=\"horizontal dark mt-0\">
    <div class=\"collapse navbar-collapse w-auto ps ps--active-y\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            ";
        // line 16
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route_params"], "method", false, false, false, 17));
        // line 18
        echo "            ";
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 18, $this->source); })()), "/dashboard"))) {
            // line 19
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>


                </a>
                ";
        } else {
            // line 29
            echo "                <a class=\"nav-link \" href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>


                </a>
            </li>
            ";
        }
        // line 39
        echo "            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Descriptive analysis</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>

                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>
            ";
        // line 60
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", [0 => "_route_params"], "method", false, false, false, 61));
        // line 62
        echo "            ";
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 62, $this->source); })()), "/profile"))) {
            // line 63
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            ";
        } else {
            // line 72
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            ";
        }
        // line 81
        echo "            ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "roles", [], "any", false, false, false, 81), 0, [], "array", false, false, false, 81), "ROLE_ADMIN"))) {
            // line 82
            echo "            ";
            $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", [0 => "_route"], "method", false, false, false, 82), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 83
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "attributes", [], "any", false, false, false, 83), "get", [0 => "_route_params"], "method", false, false, false, 83));
            // line 84
            echo "            ";
            if (twig_in_filter("/user/", (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 84, $this->source); })()))) {
                // line 85
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
                // line 86
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"fa fa-users text-info text-sm opacity-10\" aria-hidden=\"true\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Users</span>
                </a>
            </li>
            ";
            } else {
                // line 94
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
                // line 95
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">

                        <i class=\"fa fa-users text-warning text-sm opacity-10\" aria-hidden=\"true\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Users</span>
                </a>
            </li>
            ";
            }
            // line 104
            echo "            ";
        }
        // line 105
        echo "        </ul>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; height: 395px; right: 0px;\">
            <div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 322px;\">

            </div>
        </div>
    </div>


    <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></aside>


<!--   Core JS Files   -->


</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_headerAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 105,  197 => 104,  185 => 95,  182 => 94,  171 => 86,  168 => 85,  165 => 84,  163 => 83,  161 => 82,  158 => 81,  147 => 73,  144 => 72,  133 => 64,  130 => 63,  127 => 62,  125 => 61,  124 => 60,  109 => 48,  98 => 40,  95 => 39,  81 => 29,  69 => 20,  66 => 19,  63 => 18,  61 => 17,  60 => 16,  50 => 9,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<body class=\"g-sidenav-show   bg-gray-100\">

<div class=\"min-height-300  position-absolute w-100\" style=\"background-color: #111b52 !important;\" ></div>
<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
            <img src={{ asset('assets1/img/logo.png') }} class=\"navbar-brand-img h-100\" alt=\"main_logo\">
            <span class=\"ms-1 font-weight-bold\">WDI</span>
        </a>
    </div>
    <hr class=\"horizontal dark mt-0\">
    <div class=\"collapse navbar-collapse w-auto ps ps--active-y\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">
            {% set currentPath = path(app.request.attributes.get('_route'),
                app.request.attributes.get('_route_params')) %}
            {% if currentPath==\"/dashboard\" %}
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href={{ path('app_dashboard') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>


                </a>
                {% else%}
                <a class=\"nav-link \" href={{ path('app_dashboard') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>


                </a>
            </li>
            {% endif %}
            <li class=\"nav-item\">
                <a class=\"nav-link \" href={{ path('app_dashboard') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Descriptive analysis</span>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link \" href={{ path('app_dashboard') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>

                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>
                </a>
            </li>

            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>
            {% set currentPath = path(app.request.attributes.get('_route'),
                app.request.attributes.get('_route_params')) %}
            {% if currentPath==\"/profile\" %}
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href={{ path('app_profile') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link \" href={{ path('app_profile') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Profile</span>
                </a>
            </li>
            {% endif %}
            {% if app.user.roles[0]==\"ROLE_ADMIN\" %}
            {% set currentPath = path(app.request.attributes.get('_route'),
                app.request.attributes.get('_route_params')) %}
            {% if  \"/user/\" in currentPath %}
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href={{ path('app_user_index') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"fa fa-users text-info text-sm opacity-10\" aria-hidden=\"true\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Users</span>
                </a>
            </li>
            {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link \" href={{ path('app_user_index') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">

                        <i class=\"fa fa-users text-warning text-sm opacity-10\" aria-hidden=\"true\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Users</span>
                </a>
            </li>
            {% endif %}
            {% endif %}
        </ul>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; height: 395px; right: 0px;\">
            <div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 322px;\">

            </div>
        </div>
    </div>


    <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></aside>


<!--   Core JS Files   -->


</body>
", "shared/_headerAdmin.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\_headerAdmin.html.twig");
    }
}
