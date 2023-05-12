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
                                <p class=\"text-uppercase text-sm\">Prediction of the impact of the COVID-19 pandemic on <strong>Environment</strong></p>
                            <div class=\"row\">
                                <form action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("predictEnvironement");
        echo "\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\">Renewable energy consumption  % of total final energy consumption 2018 :</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\"
                                                       id=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Renewableenergyconsumption2019\">Renewable energy consumption  2019:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Renewableenergyconsumption2019\"
                                                       id=\"Renewableenergyconsumption2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Renewableelectricityoutput2020\">Renewable electricity output 2020 :</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"Renewableelectricityoutput2020\"
                                                       id=\"Renewableelectricityoutput2020\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CO2Emissions(Thousandmetrictons)2019\">CO2 Emissions (Thousand metric tons) 2019 :</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CO2Emissions(Thousandmetrictons)2019\"
                                                       id=\"CO2Emissions(Thousandmetrictons)2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CO2Emissions(Thousandmetrictons)2020\">CO2 Emissions (Thousand metric tons) 2020 :</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CO2Emissions(Thousandmetrictons)2020\"
                                                   id=\"CO2Emissions(Thousandmetrictons)2020\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
";
        // line 117
        echo "                            </div>
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
                            <p class=\"text-uppercase text-sm\">PREDICTION OF THE IMPACT OF THE COVID-19 PANDEMIC ON <strong>Health</strong></p>
                            <div class=\"row\">
                                <form action=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prediction");
        echo "\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Number of Physicians :</label>
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
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Number of  HIV
                                                    male : </label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Number of deaths by
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
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Number of deaths by no
                                                Communicable diseases :</label>
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
        // line 207
        $this->loadTemplate("shared/_footerAdmin.html.twig", "prediction/index.html.twig", 207)->display($context);
        // line 208
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
        return array (  289 => 208,  287 => 207,  214 => 137,  192 => 117,  136 => 52,  111 => 29,  107 => 27,  103 => 25,  100 => 24,  98 => 23,  91 => 19,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
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
                                <p class=\"text-uppercase text-sm\">Prediction of the impact of the COVID-19 pandemic on <strong>Environment</strong></p>
                            <div class=\"row\">
                                <form action=\"{{ path('predictEnvironement') }}\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\">Renewable energy consumption  % of total final energy consumption 2018 :</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\"
                                                       id=\"Renewableenergyconsumptionoftotalfinalenergyconsumption2018\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\" for=\"Renewableenergyconsumption2019\">Renewable energy consumption  2019:</label>
                                                <input type=\"text\" class=\"form-control\" name=\"Renewableenergyconsumption2019\"
                                                       id=\"Renewableenergyconsumption2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Renewableelectricityoutput2020\">Renewable electricity output 2020 :</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"Renewableelectricityoutput2020\"
                                                       id=\"Renewableelectricityoutput2020\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CO2Emissions(Thousandmetrictons)2019\">CO2 Emissions (Thousand metric tons) 2019 :</label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"CO2Emissions(Thousandmetrictons)2019\"
                                                       id=\"CO2Emissions(Thousandmetrictons)2019\" required><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <label class=\"form-control-label\"
                                                   for=\"CO2Emissions(Thousandmetrictons)2020\">CO2 Emissions (Thousand metric tons) 2020 :</label>
                                            <input class=\"form-control\" type=\"text\"
                                                   name=\"CO2Emissions(Thousandmetrictons)2020\"
                                                   id=\"CO2Emissions(Thousandmetrictons)2020\" required><br>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary btn-sm ms-auto\" type=\"submit\">Submit</button>
                                        </div>
                                    </div>
                                </form>
{#                                <ul>#}
{#                                    {% for prediction in predictions %}#}
{#                                        {% set p=prediction %}#}
{#                                        {% if p==0 %}#}
{#                                            <li>low</li>#}
{#                                        {% elseif p==1 %}#}
{#                                            <li>mean</li>#}
{#                                        {% else %}#}
{#                                            <li>High</li>#}
{#                                        {% endif %}#}
{#                                    {% endfor %}#}
{#                                </ul>#}
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
                            <p class=\"text-uppercase text-sm\">PREDICTION OF THE IMPACT OF THE COVID-19 PANDEMIC ON <strong>Health</strong></p>
                            <div class=\"row\">
                                <form action=\"{{ path('prediction') }}\" method=\"POST\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"Physicians2018\">Number of Physicians :</label>
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
                                                       for=\"PrevalenceofHIVmale(ages15-24)2019\">Number of  HIV
                                                    male : </label>
                                                <input class=\"form-control\" type=\"text\"
                                                       name=\"PrevalenceofHIVmale(ages15-24)2019\"
                                                       id=\"PrevalenceofHIVmale(ages15-24)2019\" required><br>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"form-control-label\"
                                                       for=\"CausedeathbyCommunicablediseases2019\">Number of deaths by
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
                                                   for=\"CausedeathbynonCommunicablediseases2019\">Number of deaths by no
                                                Communicable diseases :</label>
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
