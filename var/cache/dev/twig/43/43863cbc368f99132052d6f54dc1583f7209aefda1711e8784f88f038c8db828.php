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
class __TwigTemplate_4e60e34147ac4eb5faf13d2ea05b6c749484ce41f3103ee689886bc4362bba03 extends Template
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
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route_params"], "method", false, false, false, 2));
        // line 3
        echo "
<body class=\"g-sidenav-show   bg-gray-100\">

<div class=\"min-height-300  position-absolute w-100\" style=\"background-color: #111b52 !important;\" ></div>
<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps\" id=\"sidenav-main\">
    <div class=\"sidenav-header\">
        <i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
        <a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
            <img src=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/img/logo.png"), "html", null, true);
        echo " class=\"navbar-brand-img h-100\" alt=\"main_logo\">
            <span class=\"ms-1 font-weight-bold\">WDI</span>
        </a>
    </div>
    <hr class=\"horizontal dark mt-0\">
    <div class=\"collapse navbar-collapse w-auto ps ps--active-y\" id=\"sidenav-collapse-main\">
        <ul class=\"navbar-nav\">

            ";
        // line 19
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 19, $this->source); })()), "/dashboard"))) {
            // line 20
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Dashboard</span>


                </a>
                ";
        } else {
            // line 30
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
        // line 40
        echo "
            ";
        // line 41
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 41, $this->source); })()), "/prediction"))) {
            // line 42
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prediction");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>


                </a>
                ";
        } else {
            // line 52
            echo "
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prediction");
            echo ">
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>

                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>
                </a>
            </li>
";
        }
        // line 63
        echo "            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>

            ";
        // line 67
        if ((0 === twig_compare((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 67, $this->source); })()), "/profile"))) {
            // line 68
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 69
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
            // line 77
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
            // line 78
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
        // line 86
        echo "
            ";
        // line 87
        if (twig_in_filter("/user/", (isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 87, $this->source); })()))) {
            // line 88
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link active\" href=";
            // line 89
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
            // line 97
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link \" href=";
            // line 98
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
        // line 107
        echo "
        </ul>
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
        return array (  201 => 107,  189 => 98,  186 => 97,  175 => 89,  172 => 88,  170 => 87,  167 => 86,  156 => 78,  153 => 77,  142 => 69,  139 => 68,  137 => 67,  131 => 63,  119 => 54,  115 => 52,  103 => 43,  100 => 42,  98 => 41,  95 => 40,  81 => 30,  69 => 21,  66 => 20,  64 => 19,  53 => 11,  43 => 3,  41 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set currentPath = path(app.request.attributes.get('_route'),
    app.request.attributes.get('_route_params')) %}

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

            {% if currentPath==\"/prediction\" %}
            <li class=\"nav-item\">
                <a class=\"nav-link active\" href={{ path('app_prediction') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>
                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>


                </a>
                {% else%}

            <li class=\"nav-item\">
                <a class=\"nav-link \" href={{ path('app_prediction') }}>
                    <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                        <i class=\"ni ni-chart-bar-32 text-success text-sm opacity-10\"></i>

                    </div>
                    <span class=\"nav-link-text ms-1\">Predictive analysis</span>
                </a>
            </li>
{% endif %}
            <li class=\"nav-item mt-3\">
                <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
            </li>

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
