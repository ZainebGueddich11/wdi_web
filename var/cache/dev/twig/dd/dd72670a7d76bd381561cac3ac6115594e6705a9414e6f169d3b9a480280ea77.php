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

/* prediction/index.html.twig */
class __TwigTemplate_00139b72571eab7431c8258f8b8c5368333d395ddfc261480e9b33a161c46145 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prediction/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "prediction/index.html.twig", 1);
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
        $this->loadTemplate("shared/navAdmin.html.twig", "prediction/index.html.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"card shadow-lg mx-4 card-profile-bottom\">
            <div class=\"card-body p-3\">
                <div class=\"row gx-4\">
                    <div class=\"col-auto\">
                        <div class=\"avatar avatar-xl position-relative\">
                            <img src=\"../assets/img/team-1.jpg\" alt=\"profile_image\"
                                 class=\"w-100 border-radius-lg shadow-sm\">
                        </div>
                    </div>
                    <div class=\"col-auto my-auto\">
                        <div class=\"h-100\">
                            <h5 class=\"mb-1\">
                                ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "
                            </h5>
                            <p class=\"mb-0 font-weight-bold text-sm\">

                                ";
        // line 25
        $context["role"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25), 0, [], "array", false, false, false, 25);
        // line 26
        echo "                                ";
        if ((0 === twig_compare((isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 26, $this->source); })()), "ROLE_USER"))) {
            // line 27
            echo "                                    Role User
                                ";
        } else {
            // line 29
            echo "                                    Role Admin
                                ";
        }
        // line 31
        echo "                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3\">
                        <div class=\"nav-wrapper position-relative end-0\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">

                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-uppercase text-sm\">Prediction Form</p>
                            <div class=\"row\">
                                <form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prediction");
        echo "\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Physicians </label>
                                                <input type=\"text\" class=\"form-control\" name=\"Physicians2018\"
                                                       id=\"Physicians2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Numberofdeaths\">Number of
                                                    deaths:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Numberofdeaths\"
                                                       id=\"Numberofdeaths\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Prevalence of HIV
                                                    male</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Cause death by
                                                    Communicable diseases</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CausedeathbyCommunicablediseases2019\"
                                                       id=\"CausedeathbyCommunicablediseases2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Cause death by non
                                                Communicable diseases</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CausedeathbynonCommunicablediseases2019\"
                                                   id=\"CausedeathbynonCommunicablediseases2019\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <hr class=\"horizontal dark\">


                </div>

                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">

                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-uppercase text-sm\">Prediction Form Enviroment</p>
                            <div class=\"row\">
                                <form action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prediction");
        echo "\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Physicians </label>
                                                <input type=\"text\" class=\"form-control\" name=\"Physicians2018\"
                                                       id=\"Physicians2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Numberofdeaths\">Number of
                                                    deaths:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Numberofdeaths\"
                                                       id=\"Numberofdeaths\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Prevalence of HIV
                                                    male</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Cause death by
                                                    Communicable diseases</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CausedeathbyCommunicablediseases2019\"
                                                       id=\"CausedeathbyCommunicablediseases2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Cause death by non
                                                Communicable diseases</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CausedeathbynonCommunicablediseases2019\"
                                                   id=\"CausedeathbynonCommunicablediseases2019\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <hr class=\"horizontal dark\">


                </div>
            </div>
        </div>

        </div>
        ";
        // line 201
        $this->loadTemplate("shared/_footerAdmin.html.twig", "prediction/index.html.twig", 201)->display($context);
        // line 202
        echo "    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "prediction/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 202,  291 => 201,  218 => 131,  138 => 54,  113 => 31,  109 => 29,  105 => 27,  102 => 26,  100 => 25,  93 => 21,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                            <img src=\"../assets/img/team-1.jpg\" alt=\"profile_image\"
                                 class=\"w-100 border-radius-lg shadow-sm\">
                        </div>
                    </div>
                    <div class=\"col-auto my-auto\">
                        <div class=\"h-100\">
                            <h5 class=\"mb-1\">
                                {{ app.user.email }}
                            </h5>
                            <p class=\"mb-0 font-weight-bold text-sm\">

                                {% set role = app.user.roles[0] %}
                                {% if role == \"ROLE_USER\" %}
                                    Role User
                                {% else %}
                                    Role Admin
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3\">
                        <div class=\"nav-wrapper position-relative end-0\">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">

                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-uppercase text-sm\">Prediction Form</p>
                            <div class=\"row\">
                                <form action=\"{{ path('prediction') }}\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Physicians </label>
                                                <input type=\"text\" class=\"form-control\" name=\"Physicians2018\"
                                                       id=\"Physicians2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Numberofdeaths\">Number of
                                                    deaths:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Numberofdeaths\"
                                                       id=\"Numberofdeaths\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Prevalence of HIV
                                                    male</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Cause death by
                                                    Communicable diseases</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CausedeathbyCommunicablediseases2019\"
                                                       id=\"CausedeathbyCommunicablediseases2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Cause death by non
                                                Communicable diseases</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CausedeathbynonCommunicablediseases2019\"
                                                   id=\"CausedeathbynonCommunicablediseases2019\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <hr class=\"horizontal dark\">


                </div>

                <div class=\"col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header pb-0\">
                            <div class=\"d-flex align-items-center\">

                            </div>
                        </div>
                        <div class=\"card-body\">
                            <p class=\"text-uppercase text-sm\">Prediction Form Enviroment</p>
                            <div class=\"row\">
                                <form action=\"{{ path('prediction') }}\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Physicians </label>
                                                <input type=\"text\" class=\"form-control\" name=\"Physicians2018\"
                                                       id=\"Physicians2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Numberofdeaths\">Number of
                                                    deaths:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Numberofdeaths\"
                                                       id=\"Numberofdeaths\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Prevalence of HIV
                                                    male</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Cause death by
                                                    Communicable diseases</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CausedeathbyCommunicablediseases2019\"
                                                       id=\"CausedeathbyCommunicablediseases2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Cause death by non
                                                Communicable diseases</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CausedeathbynonCommunicablediseases2019\"
                                                   id=\"CausedeathbynonCommunicablediseases2019\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                    <hr class=\"horizontal dark\">


                </div>
            </div>
        </div>

        </div>
        {% include 'shared/_footerAdmin.html.twig' %}
    </main>

{% endblock %}
", "prediction/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\prediction\\index.html.twig");
    }
}
