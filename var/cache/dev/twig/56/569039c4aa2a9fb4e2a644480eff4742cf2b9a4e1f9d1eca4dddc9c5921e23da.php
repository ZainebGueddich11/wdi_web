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

/* user/index.html.twig */
class __TwigTemplate_aaf13eaf0e7bd9fd56df896164ef5255ade3b72ff4f54026b358ba0149172574 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        ";
        // line 49
        $this->loadTemplate("shared/navAdmin.html.twig", "user/index.html.twig", 49)->display($context);
        // line 50
        echo "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header pb-0\">
                    <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"text-secondary\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Add new user</a>
                    <h6>Users</h6>

                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">User</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Role</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Phone Number</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Adress</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 73
            echo "

                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "FirstName", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "LastName", [], "any", false, false, false, 80), "html", null, true);
            echo "</h6>
                                            <p class=\"text-xs text-secondary mb-0\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 81), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-xs font-weight-bold mb-0\">";
            // line 86
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 86)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 86)), "html", null, true))) : (print ("")));
            echo "</p>
                                    <p class=\"text-xs text-secondary mb-0\">";
            // line 87
            ((twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 87)) ? (print (twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 87)), "html", null, true))) : (print ("")));
            echo "</p>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "PhoneNumber", [], "any", false, false, false, 93), "html", null, true);
            echo " </h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "Adress", [], "any", false, false, false, 102), "html", null, true);
            echo " </h6>

                                        </div>
                                    </div>
                                </td>

                                <td class=\"align-middle\">
                                    <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            echo "\" class=\"text-secondary font-weight-bold text-xs\" >
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                 ";
            // line 114
            echo "                                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 115))), "html", null, true);
            echo "\">
                                        <button class=\"text-secondary font-weight-bold text-xs\" ><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i></button>
                                    </form>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
    </main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 121,  179 => 115,  174 => 114,  168 => 109,  158 => 102,  146 => 93,  137 => 87,  133 => 86,  125 => 81,  119 => 80,  110 => 73,  106 => 72,  86 => 55,  79 => 50,  77 => 49,  73 => 47,  66 => 46,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}User index{% endblock %}


{#<main class=\"main-content position-relative border-radius-lg ps\">
    <!-- Navbar -->
    {% include 'shared/navAdmin.html.twig' %}
    <!-- End Navbar -->
    <div class=\"container-fluid py-4\">

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Password</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                <td>{{ user.password }}</td>
                <td>
                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\">show</a>
                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_user_new') }}\">Create new</a>
    </div>
</main>#}

{% block body %}
    <main class=\"main-content position-relative border-radius-lg ps\">
        <!-- Navbar -->
        {% include 'shared/navAdmin.html.twig' %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header pb-0\">
                    <a href=\"{{ path('app_register') }}\" class=\"text-secondary\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i>Add new user</a>
                    <h6>Users</h6>

                </div>
                <div class=\"card-body px-0 pt-0 pb-2\">
                    <div class=\"table-responsive p-0\">
                        <table class=\"table align-items-center mb-0\">
                            <thead>
                            <tr>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">User</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Role</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Phone Number</th>
                                <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">Adress</th>
                                <th class=\"text-secondary opacity-7\"></th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for user in users %}


                            <tr>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">{{ user.FirstName }} {{ user.LastName }}</h6>
                                            <p class=\"text-xs text-secondary mb-0\">{{ user.email }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class=\"text-xs font-weight-bold mb-0\">{{ user.roles ? user.roles|json_encode : '' }}</p>
                                    <p class=\"text-xs text-secondary mb-0\">{{ user.roles ? user.roles|json_encode : '' }}</p>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">{{ user.PhoneNumber }} </h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class=\"d-flex px-2 py-1\">

                                        <div class=\"d-flex flex-column justify-content-center\">
                                            <h6 class=\"mb-0 text-sm\">{{ user.Adress }} </h6>

                                        </div>
                                    </div>
                                </td>

                                <td class=\"align-middle\">
                                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"text-secondary font-weight-bold text-xs\" >
                                        <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                                    </a>
                                 {#   <a href=\"{{ path('app_user_delete', {'id': user.id}) }}\" class=\"text-secondary font-weight-bold text-xs\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\"><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i></a>
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">#}
                                    <form method=\"post\" action=\"{{ path('app_user_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
                                        <button class=\"text-secondary font-weight-bold text-xs\" ><i class=\"fa fa-user-times\" aria-hidden=\"true\"></i></button>
                                    </form>
                                </td>
                            </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
    </main>
{% endblock %}", "user/index.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\user\\index.html.twig");
    }
}
