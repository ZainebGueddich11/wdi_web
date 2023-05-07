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

/* shared/_header.html.twig */
class __TwigTemplate_d405af14aca0ac16cc921c38208e895b99ec219c09b1d8eb669bf20dff6e9544 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/_header.html.twig"));

        // line 2
        echo "<header class=\"header-area\">

    ";
        // line 4
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "        <div class=\"right\">
            <a  href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" role=\"button\" style=\"color: white\"
                >log out
            </a>
        </div>
        ";
        } else {
            // line 11
            echo "            <div class=\"right\">
                <a  href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" role=\"button\"
                >
                                    <i class=\"fa fa-user fa-lg\"   aria-hidden=\"true\"></i>

                </a>
            </div>
";
        }
        // line 19
        echo "    <div class=\"container\">
        <div class=\"row d_flex\">
            <div class=\"col-sm-3 logo_sm\">
                <div class=\"logo\">
                    <a href=\"index.html\"></a>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1 col-md-12 col-sm-9\">
                <div class=\"navbar-area\">
                    <nav class=\"site-navbar\">
                        <ul>
                            <li><a class=\"active\" href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"action.html\">take action</a></li>
";
        // line 34
        echo "                            <li><a href=\"news.html\">news</a></li>
                            <li><a href=\"doctores.html\">doctores</a></li>

                            <li><a href=\"contact.html\">Contact </a></li>
";
        // line 39
        echo "                        </ul>
                        <button class=\"nav-toggler\">
                            <span></span>
                        </button>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 39,  86 => 34,  70 => 19,  60 => 12,  57 => 11,  49 => 6,  46 => 5,  44 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{%   if is_granted('IS_AUTHENTICATED_REMEMBERED') %}#}
<header class=\"header-area\">

    {%   if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <div class=\"right\">
            <a  href=\"{{ path('app_logout') }}\" role=\"button\" style=\"color: white\"
                >log out
            </a>
        </div>
        {% else  %}
            <div class=\"right\">
                <a  href=\"{{ path('app_login') }}\" role=\"button\"
                >
                                    <i class=\"fa fa-user fa-lg\"   aria-hidden=\"true\"></i>

                </a>
            </div>
{% endif %}
    <div class=\"container\">
        <div class=\"row d_flex\">
            <div class=\"col-sm-3 logo_sm\">
                <div class=\"logo\">
                    <a href=\"index.html\"></a>
                </div>
            </div>
            <div class=\"col-lg-10 offset-lg-1 col-md-12 col-sm-9\">
                <div class=\"navbar-area\">
                    <nav class=\"site-navbar\">
                        <ul>
                            <li><a class=\"active\" href=\"index.html\">Home</a></li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"action.html\">take action</a></li>
{#                            <li><a href=\"index.html\" class=\"logo_midle\">WDI</a></li>#}
                            <li><a href=\"news.html\">news</a></li>
                            <li><a href=\"doctores.html\">doctores</a></li>

                            <li><a href=\"contact.html\">Contact </a></li>
{#                            <li><a href=\"index.html\" class=\"logo_midle\">covido</a></li>#}
                        </ul>
                        <button class=\"nav-toggler\">
                            <span></span>
                        </button>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
{#{% endif %}#}", "shared/_header.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\shared\\_header.html.twig");
    }
}
