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

/* dashboard/index.html.twig */
class __TwigTemplate_7f8a16c9a89c3377b95b867151202357cd36bb89d5e0b0ccded74481d8467004 extends Template
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
        // line 2
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "dashboard/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        ";
        // line 9
        $this->loadTemplate("shared/navAdmin.html.twig", "dashboard/index.html.twig", 9)->display($context);
        // line 10
        echo "        <!-- End Navbar -->
        <div class=\"container-fluid py-4 rounded\" >

          <iframe title=\"Report Section\"  width=\"100%\" height=\"870\" src=\"https://app.powerbi.com/view?r=eyJrIjoiMGVlOTY0ZDctMTJkNC00MDA3LWI0ZmEtZmNmMjVkNmI5MjE5IiwidCI6ImEyZDgzMzZlLWEyOTktNGQ1Mi04NjM2LWI3ZWY4YzExN2ExZCIsImMiOjh9&pageName=ReportSection\"  allowFullScreen=\"true\"></iframe>
            </div>

        ";
        // line 16
        $this->loadTemplate("shared/_footerAdmin.html.twig", "dashboard/index.html.twig", 16)->display($context);
        // line 17
        echo "    </main>

      <div class=\"fixed-plugin\">
        <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
            <i class=\"fa fa-cog py-2\"> </i>
        </a>
        <div class=\"card shadow-lg\">
            <div class=\"card-header pb-0 pt-3 \">
                <div class=\"float-start\">
                    <h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class=\"float-end mt-4\">
                    <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
                        <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class=\"horizontal dark my-1\">
            <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class=\"mb-0\">Sidebar Colors</h6>
                </div>
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors my-2 text-start\">
                        <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class=\"mt-3\">
                    <h6 class=\"mb-0\">Sidenav Type</h6>
                    <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
                </div>
                <div class=\"d-flex\">
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark</button>
                </div>
                <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class=\"d-flex my-3\">
                    <h6 class=\"mb-0\">Navbar Fixed</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
                    </div>
                </div>
                <hr class=\"horizontal dark my-sm-4\">
                <div class=\"mt-2 mb-5 d-flex\">
                    <h6 class=\"mb-0\">Light / Dark</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
                    </div>
                </div>
                <a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free Download</a>
                <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View documentation</a>
                <div class=\"w-100 text-center\">
                    <a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
                    <h6 class=\"mt-3\">Thank you for sharing!</h6>
                    <a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
                    </a>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div>
        <div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div>
    </div>

<script>
    function f() {


    var ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
    type: \"line\",
    data: {
    labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
    datasets: [{
    label: \"Mobile apps\",
    tension: 0.4,
    borderWidth: 0,
    pointRadius: 0,
    borderColor: \"#5e72e4\",
    backgroundColor: gradientStroke1,
    borderWidth: 3,
    fill: true,
    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
    maxBarThickness: 6

    }],
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
    legend: {
    display: false,
    }
    },
    interaction: {
    intersect: false,
    mode: 'index',
    },
    scales: {
    y: {
    grid: {
    drawBorder: false,
    display: true,
    drawOnChartArea: true,
    drawTicks: false,
    borderDash: [5, 5]
    },
    ticks: {
    display: true,
    padding: 10,
    color: '#fbfbfb',
    font: {
    size: 11,
    family: \"Open Sans\",
    style: 'normal',
    lineHeight: 2
    },
    }
    },
    x: {
    grid: {
    drawBorder: false,
    display: false,
    drawOnChartArea: false,
    drawTicks: false,
    borderDash: [5, 5]
    },
    ticks: {
    display: true,
    color: '#ccc',
    padding: 20,
    font: {
    size: 11,
    family: \"Open Sans\",
    style: 'normal',
    lineHeight: 2
    },
    }
    },
    },
    },
    });
    };
    function f1() {


    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    };
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  87 => 16,  79 => 10,  77 => 9,  73 => 7,  66 => 6,  53 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseAdmin.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        {% include 'shared/navAdmin.html.twig' %}
        <!-- End Navbar -->
        <div class=\"container-fluid py-4 rounded\" >

          <iframe title=\"Report Section\"  width=\"100%\" height=\"870\" src=\"https://app.powerbi.com/view?r=eyJrIjoiMGVlOTY0ZDctMTJkNC00MDA3LWI0ZmEtZmNmMjVkNmI5MjE5IiwidCI6ImEyZDgzMzZlLWEyOTktNGQ1Mi04NjM2LWI3ZWY4YzExN2ExZCIsImMiOjh9&pageName=ReportSection\"  allowFullScreen=\"true\"></iframe>
            </div>

        {% include 'shared/_footerAdmin.html.twig' %}
    </main>

      <div class=\"fixed-plugin\">
        <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
            <i class=\"fa fa-cog py-2\"> </i>
        </a>
        <div class=\"card shadow-lg\">
            <div class=\"card-header pb-0 pt-3 \">
                <div class=\"float-start\">
                    <h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class=\"float-end mt-4\">
                    <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
                        <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class=\"horizontal dark my-1\">
            <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class=\"mb-0\">Sidebar Colors</h6>
                </div>
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors my-2 text-start\">
                        <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class=\"mt-3\">
                    <h6 class=\"mb-0\">Sidenav Type</h6>
                    <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
                </div>
                <div class=\"d-flex\">
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White</button>
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark</button>
                </div>
                <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class=\"d-flex my-3\">
                    <h6 class=\"mb-0\">Navbar Fixed</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
                    </div>
                </div>
                <hr class=\"horizontal dark my-sm-4\">
                <div class=\"mt-2 mb-5 d-flex\">
                    <h6 class=\"mb-0\">Light / Dark</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
                    </div>
                </div>
                <a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free Download</a>
                <a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View documentation</a>
                <div class=\"w-100 text-center\">
                    <a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
                    <h6 class=\"mt-3\">Thank you for sharing!</h6>
                    <a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
                    </a>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div>
        <div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div>
    </div>

<script>
    function f() {


    var ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
    type: \"line\",
    data: {
    labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
    datasets: [{
    label: \"Mobile apps\",
    tension: 0.4,
    borderWidth: 0,
    pointRadius: 0,
    borderColor: \"#5e72e4\",
    backgroundColor: gradientStroke1,
    borderWidth: 3,
    fill: true,
    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
    maxBarThickness: 6

    }],
    },
    options: {
    responsive: true,
    maintainAspectRatio: false,
    plugins: {
    legend: {
    display: false,
    }
    },
    interaction: {
    intersect: false,
    mode: 'index',
    },
    scales: {
    y: {
    grid: {
    drawBorder: false,
    display: true,
    drawOnChartArea: true,
    drawTicks: false,
    borderDash: [5, 5]
    },
    ticks: {
    display: true,
    padding: 10,
    color: '#fbfbfb',
    font: {
    size: 11,
    family: \"Open Sans\",
    style: 'normal',
    lineHeight: 2
    },
    }
    },
    x: {
    grid: {
    drawBorder: false,
    display: false,
    drawOnChartArea: false,
    drawTicks: false,
    borderDash: [5, 5]
    },
    ticks: {
    display: true,
    color: '#ccc',
    padding: 20,
    font: {
    size: 11,
    family: \"Open Sans\",
    style: 'normal',
    lineHeight: 2
    },
    }
    },
    },
    },
    });
    };
    function f1() {


    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    };
    </script>


{% endblock %}
", "dashboard/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\dashboard\\index.html.twig");
    }
}
