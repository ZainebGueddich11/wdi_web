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

/* security/login.html.twig */
class __TwigTemplate_cee12798d9e16881ff6413864c31e09b98b530729a33a44e69e7521eee3415af extends Template
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
        // line 189
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "security/login.html.twig", 189);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 191
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DashboardController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 193
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 194
        echo "    <body class=\"\">
    <div class=\"container position-sticky z-index-sticky top-0\">
        <div class=\"row\">
            <div class=\"col-12\">

            </div>
        </div>
    </div>
    <main class=\"main-content mt-0 ps\">
        <section>
            <div class=\"page-header min-vh-100\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto\">
                            <div class=\"card card-plain\">
                                <div class=\"card-header pb-0 text-start\">
                                    <h4 class=\"font-weight-bolder\">Sign In</h4>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                </div>
                                <div class=\"card-body\">
                                    <form role=\"form\" method=\"post\">
                                        <div class=\"mb-3\">
                                            ";
        // line 216
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 216, $this->source); })())) {
            // line 217
            echo "                                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 217, $this->source); })()), "messageKey", [], "any", false, false, false, 217), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 217, $this->source); })()), "messageData", [], "any", false, false, false, 217), "security"), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 219
        echo "                                            <label for=\"inputEmail\">Email</label>
                                            <input type=\"email\" class=\"form-control form-control-lg\"  placeholder=\"Username\" autocomplete=\"email\" name=\"email\" id=\"inputEmail\"  value=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 220, $this->source); })()), "html", null, true);
        echo "\" aria-label=\"Email\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label for=\"inputPassword\">Email</label>
                                            <input type=\"password\" class=\"form-control form-control-lg\" type=\"password\" placeholder=\"Password\" autocomplete=\"current-password\" name=\"password\" id=\"inputPassword\" required aria-label=\"Password\">
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

";
        // line 232
        echo "                                        <div class=\"text-center\">
                                            <button  type=\"submit\" class=\"btn btn-lg btn-lg w-100 mt-4 mb-0\" style=\"color : #ffffff ;background-color: #111b52 !important;\">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
";
        // line 242
        echo "                                </div>
                            </div>
                        </div>
                        <div class=\"col-8 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column\">
                            <div class=\"position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden\" style=\"background-image: url(";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets1/img/imgSignIn.jpg"), "html", null, true);
        echo " );
          background-size: cover;\">
                             ";
        // line 252
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></main>


    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 252,  136 => 246,  130 => 242,  122 => 232,  117 => 226,  108 => 220,  105 => 219,  99 => 217,  97 => 216,  73 => 194,  66 => 193,  53 => 191,  36 => 189,);
    }

    public function getSourceContext()
    {
        return new Source("{#
{% extends 'base.html.twig' %}
{% block body %}
{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inputEmail\">Email</label>
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >


        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>


    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
{% endblock %}
<head>
<style>
    body {
        background-color: #f45b69;
        font-family: \"Asap\", sans-serif;
    }

    .login {
        overflow: hidden;
        background-color: white;
        padding: 40px 30px 30px 30px;
        border-radius: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
        -moz-transition: -moz-transform 300ms, box-shadow 300ms;
        transition: transform 300ms, box-shadow 300ms;
        box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
    }
    .login::before, .login::after {
        content: \"\";
        position: absolute;
        width: 600px;
        height: 600px;
        border-top-left-radius: 40%;
        border-top-right-radius: 45%;
        border-bottom-left-radius: 35%;
        border-bottom-right-radius: 40%;
        z-index: -1;
    }
    .login::before {
        left: 40%;
        bottom: -130%;
        background-color: rgba(69, 105, 144, 0.15);
        -webkit-animation: wawes 6s infinite linear;
        -moz-animation: wawes 6s infinite linear;
        animation: wawes 6s infinite linear;
    }
    .login::after {
        left: 35%;
        bottom: -125%;
        background-color: rgba(2, 128, 144, 0.2);
        -webkit-animation: wawes 7s infinite;
        -moz-animation: wawes 7s infinite;
        animation: wawes 7s infinite;
    }
    .login > input {
        font-family: \"Asap\", sans-serif;
        display: block;
        border-radius: 5px;
        font-size: 16px;
        background: white;
        width: 100%;
        border: 0;
        padding: 10px 10px;
        margin: 15px -10px;
    }
    .login > button {
        font-family: \"Asap\", sans-serif;
        cursor: pointer;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        width: 80px;
        border: 0;
        padding: 10px 0;
        margin-top: 10px;
        margin-left: -5px;
        border-radius: 5px;
        background-color: #f45b69;
        -webkit-transition: background-color 300ms;
        -moz-transition: background-color 300ms;
        transition: background-color 300ms;
    }
    .login > button:hover {
        background-color: #f24353;
    }

    @-webkit-keyframes wawes {
        from {
            -webkit-transform: rotate(0);
        }
        to {
            -webkit-transform: rotate(360deg);
        }
    }
    @-moz-keyframes wawes {
        from {
            -moz-transform: rotate(0);
        }
        to {
            -moz-transform: rotate(360deg);
        }
    }
    @keyframes wawes {
        from {
            -webkit-transform: rotate(0);
            -moz-transform: rotate(0);
            -ms-transform: rotate(0);
            -o-transform: rotate(0);
            transform: rotate(0);
        }
        to {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
    a {
        text-decoration: none;
        color: rgba(255, 255, 255, 0.6);
        position: absolute;
        right: 10px;
        bottom: 10px;
        font-size: 12px;
    }
</style>
</head>
<body>
<form class=\"login\" method=\"post\">
    {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
       {% endif %}
    <label for=\"inputEmail\">Email</label>
    <input type=\"text\" placeholder=\"Username\" autocomplete=\"email\" name=\"email\" id=\"inputEmail\"  value=\"{{ last_username }}\">
    <label for=\"inputPassword\">Password</label>
    <input type=\"password\" placeholder=\"Password\" autocomplete=\"current-password\" name=\"password\" id=\"inputPassword\" required>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    <button type=\"submit\">Login</button>
</form>

<a href=\"https://codepen.io/davinci/\" target=\"_blank\">check my other pens</a>
</body>
{% endblock %}
#}

{% extends 'baseAdmin.html.twig' %}

{% block title %}Hello DashboardController!{% endblock %}

{% block body %}
    <body class=\"\">
    <div class=\"container position-sticky z-index-sticky top-0\">
        <div class=\"row\">
            <div class=\"col-12\">

            </div>
        </div>
    </div>
    <main class=\"main-content mt-0 ps\">
        <section>
            <div class=\"page-header min-vh-100\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto\">
                            <div class=\"card card-plain\">
                                <div class=\"card-header pb-0 text-start\">
                                    <h4 class=\"font-weight-bolder\">Sign In</h4>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                </div>
                                <div class=\"card-body\">
                                    <form role=\"form\" method=\"post\">
                                        <div class=\"mb-3\">
                                            {% if error %}
                                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                            {% endif %}
                                            <label for=\"inputEmail\">Email</label>
                                            <input type=\"email\" class=\"form-control form-control-lg\"  placeholder=\"Username\" autocomplete=\"email\" name=\"email\" id=\"inputEmail\"  value=\"{{ last_username }}\" aria-label=\"Email\">
                                        </div>
                                        <div class=\"mb-3\">
                                            <label for=\"inputPassword\">Email</label>
                                            <input type=\"password\" class=\"form-control form-control-lg\" type=\"password\" placeholder=\"Password\" autocomplete=\"current-password\" name=\"password\" id=\"inputPassword\" required aria-label=\"Password\">
                                        </div>
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

{#                                        <div class=\"form-check form-switch\">#}
{#                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\">#}
{#                                            <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>#}
{#                                        </div>#}
                                        <div class=\"text-center\">
                                            <button  type=\"submit\" class=\"btn btn-lg btn-lg w-100 mt-4 mb-0\" style=\"color : #ffffff ;background-color: #111b52 !important;\">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
{#                                    <p class=\"mb-4 text-sm mx-auto\">#}
{#                                      #}
{#                                        <a href=\"javascript:;\" class=\"text-primary text-gradient font-weight-bold\">Sign up</a>#}
{#                                    </p>#}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-8 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column\">
                            <div class=\"position-relative  h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden\" style=\"background-image: url({{ asset('assets1/img/imgSignIn.jpg') }} );
          background-size: cover;\">
                             {#   <span class=\"mask bg-gradient-primary opacity-6\"></span>
                                <h4 class=\"mt-5 text-white font-weight-bolder position-relative\">\"Attention is the new currency\"</h4>
                                <p class=\"text-white position-relative\">The more effortless the writing looks,
                                    the more effort the writer actually put into the process.</p>#}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=\"ps__rail-x\" style=\"left: 0px; bottom: 0px;\"><div class=\"ps__thumb-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps__rail-y\" style=\"top: 0px; right: 0px;\"><div class=\"ps__thumb-y\" tabindex=\"0\" style=\"top: 0px; height: 0px;\"></div></div></main>


    </body>
{% endblock %}", "security/login.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\security\\login.html.twig");
    }
}
