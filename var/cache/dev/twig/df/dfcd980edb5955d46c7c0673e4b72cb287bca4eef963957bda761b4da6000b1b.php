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

/* baseAdmin.html.twig */
class __TwigTemplate_394138ff663e0f178c990f5ad13fd80c884d4ca75228c81b79e9aab6be8489f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!--  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title> -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "

</head>
<body>
";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            $this->loadTemplate("shared/_headerAdmin.html.twig", "baseAdmin.html.twig", 30)->display($context);
        }
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        ";
        // line 10
        echo "        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/img/logo.png"), "html", null, true);
        echo ">
        <link rel=\"icon\" type=\"image/png\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/img/logo.png"), "html", null, true);
        echo " >
        <title>
            WDI
        </title>
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
        <!-- Nucleo Icons -->
        <link href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/nucleo-icons.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <link href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/nucleo-svg.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <!-- Font Awesome Icons -->
        <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
        <link href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/nucleo-svg.css"), "html", null, true);
        echo " rel=\"stylesheet\" />
        <!-- CSS Files -->
        <link id=\"pagestyle\" href=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/css/argon-dashboard.css?v=2.0.4"), "html", null, true);
        echo " rel=\"stylesheet\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "        <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
        <script src=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/argon-dashboard.min.js?v=2.0.4"), "html", null, true);
        echo "></script>
        <script src=";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/core/popper.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/core/bootstrap.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/js/plugins/chartjs.min.js"), "html", null, true);
        echo "></script>
        <script>
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
        </script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 40,  180 => 39,  176 => 38,  172 => 37,  168 => 36,  164 => 35,  161 => 34,  147 => 33,  140 => 32,  131 => 23,  126 => 21,  120 => 18,  116 => 17,  107 => 11,  102 => 10,  100 => 9,  93 => 8,  80 => 5,  71 => 136,  69 => 32,  66 => 30,  64 => 29,  58 => 25,  56 => 8,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!--  <title>{% block title %}Welcome!{% endblock %}</title> -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block stylesheets %}
        {#{{ encore_entry_link_tags('app') }}#}
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href={{ asset('assets1/img/logo.png') }}>
        <link rel=\"icon\" type=\"image/png\" href={{ asset('assets1/img/logo.png') }} >
        <title>
            WDI
        </title>
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\" />
        <!-- Nucleo Icons -->
        <link href={{ asset('assets1/css/nucleo-icons.css') }} rel=\"stylesheet\" />
        <link href={{ asset('assets1/css/nucleo-svg.css') }} rel=\"stylesheet\" />
        <!-- Font Awesome Icons -->
        <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
        <link href={{ asset('assets1/css/nucleo-svg.css') }} rel=\"stylesheet\" />
        <!-- CSS Files -->
        <link id=\"pagestyle\" href={{ asset('assets1/css/argon-dashboard.css?v=2.0.4') }} rel=\"stylesheet\" />
    {% endblock %}


</head>
<body>
{%   if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
{% include 'shared/_headerAdmin.html.twig' %}
{% endif %}
{% block body %}
    {% block javascripts %}
        <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
        <script src={{ asset('assets1/js/argon-dashboard.min.js?v=2.0.4') }}></script>
        <script src={{ asset('assets1/js/core/popper.min.js') }}></script>
        <script src={{ asset('assets1/js/core/bootstrap.min.js') }}></script>
        <script src={{ asset('assets1/js/plugins/perfect-scrollbar.min.js') }}></script>
        <script src={{ asset('assets1/js/plugins/smooth-scrollbar.min.js') }}></script>
        <script src={{ asset('assets1/js/plugins/chartjs.min.js') }}></script>
        <script>
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
        </script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
    {% endblock %}
{% endblock %}
{#{% include 'shared/_footerAdmin.html.twig' %}#}

</body>
</html>", "baseAdmin.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\baseAdmin.html.twig");
    }
}
