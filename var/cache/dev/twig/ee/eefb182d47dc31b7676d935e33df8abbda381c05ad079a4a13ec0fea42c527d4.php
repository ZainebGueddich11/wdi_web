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

/* prediction/result.html.twig */
class __TwigTemplate_dbadff4ca6c4a5176ced807931e64bac1e1266d5fa3a2f5511f5ab5d4896e8bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prediction/result.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "prediction/result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProfileController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        ";
        // line 8
        $this->loadTemplate("shared/navAdmin.html.twig", "prediction/result.html.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"card shadow-lg mx-4 card-profile-bottom\">
            <div class=\"card-body p-3\">
                <div class=\"row gx-4\">
                    <div class=\"col-auto\">
                        <div class=\"avatar avatar-xl position-relative\">
                        </div>
                    </div>
                    <div class=\"col-auto my-auto\">
                        <div class=\"h-100\">
                            <h5 class=\"mb-1\">
                                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "
                            </h5>
                            <p class=\"mb-0 font-weight-bold text-sm\">

                                ";
        // line 23
        $context["role"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "roles", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23);
        // line 24
        echo "                                ";
        if ((0 === twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 24, $this->source); })()), "ROLE_USER"))) {
            // line 25
            echo "                                    Role User
                                ";
        } else {
            // line 27
            echo "                                    Role Admin
                                ";
        }
        // line 29
        echo "                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3\">
                        <div class=\"nav-wrapper position-relative end-0\">
                            <ul class=\"nav nav-pills nav-fill p-1\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"true\">
                                        <i class=\"ni ni-app\"></i>
                                        <span class=\"ms-2\">App</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">
                                        <i class=\"ni ni-email-83\"></i>
                                        <span class=\"ms-2\">Messages</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">
                                        <i class=\"ni ni-settings-gear-65\"></i>
                                        <span class=\"ms-2\">Settings</span>
                                    </a>
                                </li>
                                <div class=\"moving-tab position-absolute nav-link\" style=\"padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 94px;\"><a class=\"nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"true\">-</a></div></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">
                                <p class=\"mb-0\">Prediction</p>

                            </div>
                        </div>
                        <div class=\"card-body\">

                            <h1>Prediction Result</h1>

";
        // line 74
        echo "                                <ul>
                                  ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["predictions"]) || array_key_exists("predictions", $context) ? $context["predictions"] : (function () { throw new RuntimeError('Variable "predictions" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prediction"]) {
            // line 76
            echo "                                      ";
            $context["p"] = $context["prediction"];
            // line 77
            echo "                                      ";
            if ((0 === twig_compare((isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 77, $this->source); })()), 0))) {
                // line 78
                echo "                                          <li style=\"color:green \">low </li>
                                      ";
            } elseif ((0 === twig_compare(            // line 79
(isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 79, $this->source); })()), 1))) {
                // line 80
                echo "                                          <li  style=\"color:yellow \">mean </li>
                                      ";
            } else {
                // line 82
                echo "                                          <li  style=\"color:red \">High </li>
                                      ";
            }
            // line 84
            echo "                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prediction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </ul>
";
        // line 89
        echo "                            <hr class=\"horizontal dark\">


                        </div>
                    </div>
                </div>

            </div>

        </div>
        ";
        // line 99
        $this->loadTemplate("shared/_footerAdmin.html.twig", "prediction/result.html.twig", 99)->display($context);
        // line 100
        echo "    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prediction/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 100,  204 => 99,  192 => 89,  189 => 85,  183 => 84,  179 => 82,  175 => 80,  173 => 79,  170 => 78,  167 => 77,  164 => 76,  160 => 75,  157 => 74,  111 => 29,  107 => 27,  103 => 25,  100 => 24,  98 => 23,  91 => 19,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Hello ProfileController!{% endblock %}

{% block body %}
    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        {% include 'shared/navAdmin.html.twig' %}
        <div class=\"card shadow-lg mx-4 card-profile-bottom\">
            <div class=\"card-body p-3\">
                <div class=\"row gx-4\">
                    <div class=\"col-auto\">
                        <div class=\"avatar avatar-xl position-relative\">
                        </div>
                    </div>
                    <div class=\"col-auto my-auto\">
                        <div class=\"h-100\">
                            <h5 class=\"mb-1\">
                                {{ app.user.email }}
                            </h5>
                            <p class=\"mb-0 font-weight-bold text-sm\">

                                {%  set role = app.user.roles[0] %}
                                {% if role == \"ROLE_USER\" %}
                                    Role User
                                {% else  %}
                                    Role Admin
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3\">
                        <div class=\"nav-wrapper position-relative end-0\">
                            <ul class=\"nav nav-pills nav-fill p-1\" role=\"tablist\">
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"true\">
                                        <i class=\"ni ni-app\"></i>
                                        <span class=\"ms-2\">App</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">
                                        <i class=\"ni ni-email-83\"></i>
                                        <span class=\"ms-2\">Messages</span>
                                    </a>
                                </li>
                                <li class=\"nav-item\" role=\"presentation\">
                                    <a class=\"nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"false\" tabindex=\"-1\">
                                        <i class=\"ni ni-settings-gear-65\"></i>
                                        <span class=\"ms-2\">Settings</span>
                                    </a>
                                </li>
                                <div class=\"moving-tab position-absolute nav-link\" style=\"padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 94px;\"><a class=\"nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center \" data-bs-toggle=\"tab\" href=\"javascript:;\" role=\"tab\" aria-selected=\"true\">-</a></div></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">
                                <p class=\"mb-0\">Prediction</p>

                            </div>
                        </div>
                        <div class=\"card-body\">

                            <h1>Prediction Result</h1>

{#                            {% if predictions %}#}
                                <ul>
                                  {% for prediction in predictions %}
                                      {% set p=prediction %}
                                      {% if p==0 %}
                                          <li style=\"color:green \">low </li>
                                      {% elseif p==1 %}
                                          <li  style=\"color:yellow \">mean </li>
                                      {% else %}
                                          <li  style=\"color:red \">High </li>
                                      {% endif %}
                                   {% endfor %}
                                </ul>
{#                            {% else %}#}
{#                                <p>No predictions available.</p>#}
{#                            {% endif %}#}
                            <hr class=\"horizontal dark\">


                        </div>
                    </div>
                </div>

            </div>

        </div>
        {% include 'shared/_footerAdmin.html.twig' %}
    </main>

{% endblock %}
", "prediction/result.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\prediction\\result.html.twig");
    }
}
