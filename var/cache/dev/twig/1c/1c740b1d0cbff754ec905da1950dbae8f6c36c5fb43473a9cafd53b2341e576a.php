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

/* index/index.html.twig */
class __TwigTemplate_a9ae887e65dd4f02e000f32fb55c42d1b0f4494cede3eafdc0d0168d83d1dbe6 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<!-- end header -->
<div class=\"full_bg\">
    <!-- header inner -->
    <div class=\"section\">
        <!-- carousel code -->
        <div id=\"banner1\" class=\"carousel slide slider_main\">
            <ol class=\"carousel-indicators \">
                <li data-target=\"#banner1\" data-slide-to=\"0\" class=\"indicator-li-1\">01</li>
                <li data-target=\"#banner1\" data-slide-to=\"1\" class=\"\">02</li>
                <li data-target=\"#banner1\" data-slide-to=\"2\" class=\"active\">03</li>
            </ol>
            <div class=\"carousel-inner\">
                <!-- first slide -->
                <div class=\"carousel-item active\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second slide -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third slide -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- controls -->
            <a class=\"carousel-control-prev\" href=\"#banner1\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#banner1\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end banner -->
<!-- about -->
<div class=\"about\">
    <div class=\"container_width\">
        <div class=\"row d_flex\">
            <div class=\"col-md-7\">
                <div class=\"titlepage text_align_left\">
                    <h2>About Corona Virus </h2>
                    <p>The coronavirus (COVID-19) is a highly infectious respiratory illness caused by the SARS-CoV-2 virus.
                        It first emerged in Wuhan, China in late 2019 and quickly spread globally, leading to a pandemic.
                        The virus is primarily spread through respiratory droplets when an infected person talks, coughs, or sneezes.
                    </p>
                    <a class=\"read_more\" href=\"about.html\">About More</a>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"about_img text_align_center\">
                    <figure><img src=";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/about.png"), "html", null, true);
        echo " alt=\"#\"/></figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end about -->
<!-- coronata -->
<div class=\"coronata\">
    <div class=\"container\">
        <div class=\"row d_flex grid\">
            <div class=\"col-md-7\">
                <div class=\"coronata_img text_align_center\">
                    <figure><img src=";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/developementdurable.png"), "html", null, true);
        echo " alt=\"#\"/></figure>
                </div>
            </div>
            <div class=\"col-md-5 oder1\">
                <div class=\"titlepage text_align_left\">
                    <h2>What are the objectives of sustainable development?</h2>
                    <p>The Sustainable Development Goals (SDGs) are a set of 17 goals adopted by the United Nations General Assembly in 2015 as part of the 2030 Agenda for Sustainable Development. The SDGs are a universal call to action to end poverty, protect the planet, and ensure that all people enjoy peace and prosperity.
                    </p>
                    <a class=\"read_more\" href=\"coronata.html\">About More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end coronata -->

<!-- protect -->
<div class=\"protect\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center\">
                    <h2>In what ways can we establish a connection between COVID-19 and sustainable development?</h2>
<p>The COVID-19 pandemic has shown that there is a strong relationship between public health, the environment, and sustainable development.
    By recognizing the link between COVID-19 and sustainable development, we can work towards building a more equitable, resilient, and sustainable future.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"protect_bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!--  Demos -->
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src=";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pro1.png"), "html", null, true);
        echo " alt=\"#\"/></i>
                                    <h3> Wear Mask</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src=";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pro2.png"), "html", null, true);
        echo " alt=\"#\"/></i>
                                    <h3> Wash Your Hands</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src=";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pro3.png"), "html", null, true);
        echo " alt=\"#\"/></i>
                                    <h3> Stay at Home</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end protect -->
<!-- cases -->
<div class=\"cases\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center \">
                    <h2>Coronavirus Cases</h2>
                </div>
            </div>
        </div>
        <div class=\"row d_flex\">
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src=";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cases1.png"), "html", null, true);
        echo " alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>SARS-CoV</h3>
                        <p>Severe acute respiratory syndrome coronavirus : This virus caused a global outbreak of severe acute respiratory syndrome (SARS) in 2003.</p>
                    </div>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src=";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cases2.png"), "html", null, true);
        echo " alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>MERS-CoV</h3>
                        <p>Middle East respiratory syndrome coronavirus :This virus emerged in Saudi Arabia in 2012 and has caused sporadic outbreaks in several countries.</p>
                    </div>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src=";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cases3.png"), "html", null, true);
        echo " alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>SARS-CoV-2</h3>
                        <p> This is the virus that causes COVID-19, which first emerged in Wuhan, China in December 2019 and has since caused a global pandemic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cases -->
<!-- doctors -->
<div class=\"doctors\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center \">
                    <h2>Our team</h2>
                </div>
            </div>
        </div>
        <div class=\"row d_flex\">
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src=";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/sirine.jpg"), "html", null, true);
        echo " alt=\"#\"/></i>
                    <h3>Sirine Kabboura</h3>
                    <p>Chief Executive Officer
                    </p>
                    <span><img src=";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/do.png"), "html", null, true);
        echo " alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src=";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/eya.jpg"), "html", null, true);
        echo " alt=\"#\"/></i>
                    <h3>Eya Srioui</h3>
                    <p>Project Management
                    </p>
                    <span><img src=";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/do.png"), "html", null, true);
        echo " alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src=";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/rihab.jpg"), "html", null, true);
        echo " alt=\"#\"/></i>
                    <h3>Rihab Bouabid</h3>
                    <p>Business Development
                    </p>
                    <span><img src=";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/do.png"), "html", null, true);
        echo " alt=\"#\"/></span>
                </div>
            </div>
        </div>
            <div class=\"d-flex justify-content-center\">
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src=";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/zaineb.jpg"), "html", null, true);
        echo " alt=\"#\"/></i>
                    <h3>Zaineb Gueddich</h3>
<p>Information Technology Manager
</p>                    <span><img src=";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/do.png"), "html", null, true);
        echo " alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src=";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/oussama.jpg"), "html", null, true);
        echo " alt=\"#\"/></i>
                    <h3>Oussama Chaari</h3>
                    <p>Marketing Management

                    </p>                      <span><img src=";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/do.png"), "html", null, true);
        echo " alt=\"#\"/></span>
                </div>
            </div>
            </div>

    </div>
</div>
<!-- end cases -->
<!-- update -->
";
        // line 306
        echo "   ";
        // line 318
        echo "</div>
<!-- update -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 318,  416 => 306,  404 => 285,  397 => 281,  389 => 276,  383 => 273,  373 => 266,  366 => 262,  358 => 257,  351 => 253,  343 => 248,  336 => 244,  308 => 219,  295 => 209,  282 => 199,  251 => 171,  238 => 161,  225 => 151,  184 => 113,  167 => 99,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
{#<body class=\"main-layout\">#}


<!-- end header -->
<div class=\"full_bg\">
    <!-- header inner -->
    <div class=\"section\">
        <!-- carousel code -->
        <div id=\"banner1\" class=\"carousel slide slider_main\">
            <ol class=\"carousel-indicators \">
                <li data-target=\"#banner1\" data-slide-to=\"0\" class=\"indicator-li-1\">01</li>
                <li data-target=\"#banner1\" data-slide-to=\"1\" class=\"\">02</li>
                <li data-target=\"#banner1\" data-slide-to=\"2\" class=\"active\">03</li>
            </ol>
            <div class=\"carousel-inner\">
                <!-- first slide -->
                <div class=\"carousel-item active\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second slide -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third slide -->
                <div class=\"carousel-item\">
                    <div class=\"carousel-caption cuplle\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <div class=\"photog\">
                                        <h1>Care early<br>Coronavirus</h1>
                                        <a class=\"read_more\" href=\"javascript:void(0)\" >Read More</a>
                                        <a class=\"read_more\" href=\"about.html\" >About Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- controls -->
            <a class=\"carousel-control-prev\" href=\"#banner1\" role=\"button\" data-slide=\"prev\">
                <i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#banner1\" role=\"button\" data-slide=\"next\">
                <i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- end banner -->
<!-- about -->
<div class=\"about\">
    <div class=\"container_width\">
        <div class=\"row d_flex\">
            <div class=\"col-md-7\">
                <div class=\"titlepage text_align_left\">
                    <h2>About Corona Virus </h2>
                    <p>The coronavirus (COVID-19) is a highly infectious respiratory illness caused by the SARS-CoV-2 virus.
                        It first emerged in Wuhan, China in late 2019 and quickly spread globally, leading to a pandemic.
                        The virus is primarily spread through respiratory droplets when an infected person talks, coughs, or sneezes.
                    </p>
                    <a class=\"read_more\" href=\"about.html\">About More</a>
                </div>
            </div>
            <div class=\"col-md-5\">
                <div class=\"about_img text_align_center\">
                    <figure><img src={{ asset('assets/images/about.png') }} alt=\"#\"/></figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end about -->
<!-- coronata -->
<div class=\"coronata\">
    <div class=\"container\">
        <div class=\"row d_flex grid\">
            <div class=\"col-md-7\">
                <div class=\"coronata_img text_align_center\">
                    <figure><img src={{ asset('assets/images/developementdurable.png') }} alt=\"#\"/></figure>
                </div>
            </div>
            <div class=\"col-md-5 oder1\">
                <div class=\"titlepage text_align_left\">
                    <h2>What are the objectives of sustainable development?</h2>
                    <p>The Sustainable Development Goals (SDGs) are a set of 17 goals adopted by the United Nations General Assembly in 2015 as part of the 2030 Agenda for Sustainable Development. The SDGs are a universal call to action to end poverty, protect the planet, and ensure that all people enjoy peace and prosperity.
                    </p>
                    <a class=\"read_more\" href=\"coronata.html\">About More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end coronata -->

<!-- protect -->
<div class=\"protect\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center\">
                    <h2>In what ways can we establish a connection between COVID-19 and sustainable development?</h2>
<p>The COVID-19 pandemic has shown that there is a strong relationship between public health, the environment, and sustainable development.
    By recognizing the link between COVID-19 and sustainable development, we can work towards building a more equitable, resilient, and sustainable future.</p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"protect_bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!--  Demos -->
                    <div class=\"owl-carousel owl-theme\">
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src={{ asset('assets/images/pro1.png')}} alt=\"#\"/></i>
                                    <h3> Wear Mask</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src={{ asset('assets/images/pro2.png')}} alt=\"#\"/></i>
                                    <h3> Wash Your Hands</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"protect_box text_align_center\">
                                <div class=\"desktop\">
                                    <i><img src={{ asset('assets/images/pro3.png')}} alt=\"#\"/></i>
                                    <h3> Stay at Home</h3>
                                    <span> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for</span>
                                </div>
                                <a class=\"read_more\" href=\"protect.html\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end protect -->
<!-- cases -->
<div class=\"cases\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center \">
                    <h2>Coronavirus Cases</h2>
                </div>
            </div>
        </div>
        <div class=\"row d_flex\">
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src={{ asset('assets/images/cases1.png')}} alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>SARS-CoV</h3>
                        <p>Severe acute respiratory syndrome coronavirus : This virus caused a global outbreak of severe acute respiratory syndrome (SARS) in 2003.</p>
                    </div>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src={{ asset('assets/images/cases2.png')}} alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>MERS-CoV</h3>
                        <p>Middle East respiratory syndrome coronavirus :This virus emerged in Saudi Arabia in 2012 and has caused sporadic outbreaks in several countries.</p>
                    </div>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div class=\"latest text_align_center\">
                    <figure><img src={{ asset('assets/images/cases3.png')}} alt=\"#\"/></figure>
                    <a class=\"read_more\" href=\"cases.html\">Read More</a>
                    <div class=\"nostrud\">
                        <h3>SARS-CoV-2</h3>
                        <p> This is the virus that causes COVID-19, which first emerged in Wuhan, China in December 2019 and has since caused a global pandemic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cases -->
<!-- doctors -->
<div class=\"doctors\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"titlepage text_align_center \">
                    <h2>Our team</h2>
                </div>
            </div>
        </div>
        <div class=\"row d_flex\">
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src={{ asset('assets/images/sirine.jpg')}} alt=\"#\"/></i>
                    <h3>Sirine Kabboura</h3>
                    <p>Chief Executive Officer
                    </p>
                    <span><img src={{ asset('assets/images/do.png')}} alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src={{ asset('assets/images/eya.jpg')}} alt=\"#\"/></i>
                    <h3>Eya Srioui</h3>
                    <p>Project Management
                    </p>
                    <span><img src={{ asset('assets/images/do.png')}} alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src={{ asset('assets/images/rihab.jpg')}} alt=\"#\"/></i>
                    <h3>Rihab Bouabid</h3>
                    <p>Business Development
                    </p>
                    <span><img src={{ asset('assets/images/do.png')}} alt=\"#\"/></span>
                </div>
            </div>
        </div>
            <div class=\"d-flex justify-content-center\">
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src={{ asset('assets/images/zaineb.jpg')}} alt=\"#\"/></i>
                    <h3>Zaineb Gueddich</h3>
<p>Information Technology Manager
</p>                    <span><img src={{ asset('assets/images/do.png')}} alt=\"#\"/></span>
                </div>
            </div>
            <div class=\" col-md-4\">
                <div id=\"ho_efcet\" class=\"reader text_align_center\">
                    <i><img src={{ asset('assets/images/oussama.jpg')}} alt=\"#\"/></i>
                    <h3>Oussama Chaari</h3>
                    <p>Marketing Management

                    </p>                      <span><img src={{ asset('assets/images/do.png')}} alt=\"#\"/></span>
                </div>
            </div>
            </div>

    </div>
</div>
<!-- end cases -->
<!-- update -->
{#<div class=\"update\">
    <div class=\"cevery_white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"titlepage\">
                        <h2>Get Every Update.... </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>#}
   {# <div class=\"cevery_bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <form id=\"colof\" class=\"form_subscri\">
                        <input class=\"newsl\" placeholder=\"Your Email\" type=\"text\" name=\"Email\">
                        <button class=\"subsci_btn\">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>#}
</div>
<!-- update -->
{% endblock %}", "index/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\index\\index.html.twig");
    }
}
