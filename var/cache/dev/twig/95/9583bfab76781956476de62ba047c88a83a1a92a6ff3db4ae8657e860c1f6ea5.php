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

/* user/_form.html.twig */
class __TwigTemplate_a5a203e83ad0440b6c2935ff454d32d43bd3ee87125272efc67bdf5d2e945490 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        ";
        // line 12
        $this->loadTemplate("shared/navAdmin.html.twig", "user/_form.html.twig", 12)->display($context);
        // line 13
        echo "
        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-12\">
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

            </div>

        </div>
        ";
        // line 98
        $this->loadTemplate("shared/_footerAdmin.html.twig", "user/_form.html.twig", 98)->display($context);
        // line 99
        echo "    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 99,  152 => 98,  65 => 13,  63 => 12,  59 => 10,  52 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}
{#{{ form_start(form) }}

    {{ form_widget(form) }}

<button class=\"btn\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }}#}
{% block body %}
    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        {% include 'shared/navAdmin.html.twig' %}

        <div class=\"container-fluid py-4\">
            <div class=\"row\">
                <div class=\"col-md-12\">
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

            </div>

        </div>
        {% include 'shared/_footerAdmin.html.twig' %}
    </main>

{% endblock %}", "user/_form.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\user\\_form.html.twig");
    }
}
