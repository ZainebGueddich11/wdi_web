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

/* profile/index.html.twig */
class __TwigTemplate_7e0e24ec3837b610769c12ba123577c30fae2b0aca5e76316ce2dd2eeab8bf9e extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "profile/index.html.twig", 1);
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
        echo "<main class=\"main-content position-relative border-radius-lg ps\">
    <!-- Navbar -->
    ";
        // line 8
        $this->loadTemplate("shared/navAdmin.html.twig", "profile/index.html.twig", 8)->display($context);
        // line 9
        echo "    <div class=\"card shadow-lg mx-4 card-profile-bottom\">
        <div class=\"card-body p-3\">
            <div class=\"row gx-4\">
                <div class=\"col-auto\">
                    <div class=\"avatar avatar-xl position-relative\">
                        <img src=\"../assets/img/team-1.jpg\" alt=\"profile_image\" class=\"w-100 border-radius-lg shadow-sm\">
                    </div>
                </div>
                <div class=\"col-auto my-auto\">
                    <div class=\"h-100\">
                        <h5 class=\"mb-1\">
                            ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "
                        </h5>
                        <p class=\"mb-0 font-weight-bold text-sm\">

                            ";
        // line 24
        $context["role"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24);
        // line 25
        echo "                            ";
        if ((0 === twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 25, $this->source); })()), "ROLE_USER"))) {
            // line 26
            echo "                            Role User
                            ";
        } else {
            // line 28
            echo "                            Role Admin
                            ";
        }
        // line 30
        echo "                        </p>
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
                            <p class=\"mb-0\">Edit Profile</p>
                            <button class=\"btn btn-primary btn-sm ms-auto\">Settings</button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-uppercase text-sm\">User Information</p>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Username</label>
                                    <input class=\"form-control\" type=\"text\" value=\"lucky.jesse\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Email address</label>
                                    <input class=\"form-control\" type=\"email\" value=\"jesse@example.com\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">First name</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Jesse\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Last name</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Lucky\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"horizontal dark\">
                        <p class=\"text-uppercase text-sm\">Contact Information</p>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Address</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">City</label>
                                    <input class=\"form-control\" type=\"text\" value=\"New York\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Country</label>
                                    <input class=\"form-control\" type=\"text\" value=\"United States\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Postal code</label>
                                    <input class=\"form-control\" type=\"text\" value=\"437300\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"horizontal dark\">
                        <p class=\"text-uppercase text-sm\">About me</p>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">About me</label>
                                    <input class=\"form-control\" type=\"text\" value=\"A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-profile\">
                    <img src=\"../assets/img/bg-profile.jpg\" alt=\"Image placeholder\" class=\"card-img-top\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-4 col-lg-4 order-lg-2\">
                            <div class=\"mt-n4 mt-lg-n6 mb-4 mb-lg-0\">
                                <a href=\"javascript:;\">
                                    <img src=\"../assets/img/team-2.jpg\" class=\"rounded-circle img-fluid border border-2 border-white\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-info mb-0 d-none d-lg-block\">Connect</a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-info mb-0 d-block d-lg-none\"><i class=\"ni ni-collection\"></i></a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-dark float-right mb-0 d-none d-lg-block\">Message</a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-dark float-right mb-0 d-block d-lg-none\"><i class=\"ni ni-email-83\"></i></a>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"d-flex justify-content-center\">
                                    <div class=\"d-grid text-center\">
                                        <span class=\"text-lg font-weight-bolder\">22</span>
                                        <span class=\"text-sm opacity-8\">Friends</span>
                                    </div>
                                    <div class=\"d-grid text-center mx-4\">
                                        <span class=\"text-lg font-weight-bolder\">10</span>
                                        <span class=\"text-sm opacity-8\">Photos</span>
                                    </div>
                                    <div class=\"d-grid text-center\">
                                        <span class=\"text-lg font-weight-bolder\">89</span>
                                        <span class=\"text-sm opacity-8\">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center mt-4\">
                            <h5>
                                Mark Davis<span class=\"font-weight-light\">, 35</span>
                            </h5>
                            <div class=\"h6 font-weight-300\">
                                <i class=\"ni location_pin mr-2\"></i>Bucharest, Romania
                            </div>
                            <div class=\"h6 mt-4\">
                                <i class=\"ni business_briefcase-24 mr-2\"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class=\"ni education_hat mr-2\"></i>University of Computer Science
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    ";
        // line 198
        $this->loadTemplate("shared/_footerAdmin.html.twig", "profile/index.html.twig", 198)->display($context);
        // line 199
        echo "</main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 199,  282 => 198,  112 => 30,  108 => 28,  104 => 26,  101 => 25,  99 => 24,  92 => 20,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                        <img src=\"../assets/img/team-1.jpg\" alt=\"profile_image\" class=\"w-100 border-radius-lg shadow-sm\">
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
                            <p class=\"mb-0\">Edit Profile</p>
                            <button class=\"btn btn-primary btn-sm ms-auto\">Settings</button>
                        </div>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"text-uppercase text-sm\">User Information</p>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Username</label>
                                    <input class=\"form-control\" type=\"text\" value=\"lucky.jesse\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Email address</label>
                                    <input class=\"form-control\" type=\"email\" value=\"jesse@example.com\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">First name</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Jesse\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Last name</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Lucky\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"horizontal dark\">
                        <p class=\"text-uppercase text-sm\">Contact Information</p>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Address</label>
                                    <input class=\"form-control\" type=\"text\" value=\"Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">City</label>
                                    <input class=\"form-control\" type=\"text\" value=\"New York\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Country</label>
                                    <input class=\"form-control\" type=\"text\" value=\"United States\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">Postal code</label>
                                    <input class=\"form-control\" type=\"text\" value=\"437300\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                        <hr class=\"horizontal dark\">
                        <p class=\"text-uppercase text-sm\">About me</p>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"example-text-input\" class=\"form-control-label\">About me</label>
                                    <input class=\"form-control\" type=\"text\" value=\"A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.\" onfocus=\"focused(this)\" onfocusout=\"defocused(this)\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"card card-profile\">
                    <img src=\"../assets/img/bg-profile.jpg\" alt=\"Image placeholder\" class=\"card-img-top\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-4 col-lg-4 order-lg-2\">
                            <div class=\"mt-n4 mt-lg-n6 mb-4 mb-lg-0\">
                                <a href=\"javascript:;\">
                                    <img src=\"../assets/img/team-2.jpg\" class=\"rounded-circle img-fluid border border-2 border-white\">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3\">
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-info mb-0 d-none d-lg-block\">Connect</a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-info mb-0 d-block d-lg-none\"><i class=\"ni ni-collection\"></i></a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-dark float-right mb-0 d-none d-lg-block\">Message</a>
                            <a href=\"javascript:;\" class=\"btn btn-sm btn-dark float-right mb-0 d-block d-lg-none\"><i class=\"ni ni-email-83\"></i></a>
                        </div>
                    </div>
                    <div class=\"card-body pt-0\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"d-flex justify-content-center\">
                                    <div class=\"d-grid text-center\">
                                        <span class=\"text-lg font-weight-bolder\">22</span>
                                        <span class=\"text-sm opacity-8\">Friends</span>
                                    </div>
                                    <div class=\"d-grid text-center mx-4\">
                                        <span class=\"text-lg font-weight-bolder\">10</span>
                                        <span class=\"text-sm opacity-8\">Photos</span>
                                    </div>
                                    <div class=\"d-grid text-center\">
                                        <span class=\"text-lg font-weight-bolder\">89</span>
                                        <span class=\"text-sm opacity-8\">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"text-center mt-4\">
                            <h5>
                                Mark Davis<span class=\"font-weight-light\">, 35</span>
                            </h5>
                            <div class=\"h6 font-weight-300\">
                                <i class=\"ni location_pin mr-2\"></i>Bucharest, Romania
                            </div>
                            <div class=\"h6 mt-4\">
                                <i class=\"ni business_briefcase-24 mr-2\"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class=\"ni education_hat mr-2\"></i>University of Computer Science
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {% include 'shared/_footerAdmin.html.twig' %}
</main>

{% endblock %}
", "profile/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\profile\\index.html.twig");
    }
}
