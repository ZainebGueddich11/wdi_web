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

/* base.html.twig */
class __TwigTemplate_1b85aee04896d66775b4d0a2db1594df8fcb63c90edbf2d8e28f2308d5482f01 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!--  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "</title> -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "</head>
<body>
";
        // line 52
        $this->loadTemplate("shared/_header.html.twig", "base.html.twig", 52)->display($context);
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 56
        $this->loadTemplate("shared/_footer.html.twig", "base.html.twig", 56)->display($context);
        // line 57
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

        echo " <title>-->
            WDI
    <!-- </title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "        ";
        // line 17
        echo "        <link rel=\"icon\" type=\"image/png\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo " >
        <title>
            WDI
        </title>
        <!-- bootstrap css -->
        <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo ">
        <!-- style css -->
        <link rel=\"stylesheet\" href=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo ">
        <!-- Responsive-->
        <link rel=\"stylesheet\" href=";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo ">
        <!-- fevicon -->
        <link rel=\"icon\" href=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/fevicon.png"), "html", null, true);
        echo " type=\"image/gif\" />
        <!-- Scrollbar Custom CSS -->
        <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
        <link rel=\"stylesheet\" href=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo ">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "        <script>

        </script>
        ";
        // line 43
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js\"></script>
        <script src=";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 54,  191 => 53,  181 => 47,  177 => 46,  172 => 44,  167 => 43,  162 => 39,  155 => 38,  142 => 31,  136 => 28,  131 => 26,  126 => 24,  121 => 22,  112 => 17,  110 => 16,  103 => 15,  88 => 5,  79 => 57,  77 => 56,  75 => 53,  73 => 52,  69 => 50,  67 => 38,  64 => 37,  62 => 15,  52 => 7,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <!--  <title>{% block title %} <title>-->
            WDI
    <!-- </title>{% endblock %}</title> -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- mobile metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    {% block stylesheets %}
        {#{{ encore_entry_link_tags('app') }}#}
        <link rel=\"icon\" type=\"image/png\" href={{ asset('assets/images/logo.png') }} >
        <title>
            WDI
        </title>
        <!-- bootstrap css -->
        <link rel=\"stylesheet\" href={{ asset('assets/css/bootstrap.min.css') }}>
        <!-- style css -->
        <link rel=\"stylesheet\" href={{ asset('assets/css/style.css') }}>
        <!-- Responsive-->
        <link rel=\"stylesheet\" href={{ asset('assets/css/responsive.css') }}>
        <!-- fevicon -->
        <link rel=\"icon\" href={{ asset('assets/images/fevicon.png') }} type=\"image/gif\" />
        <!-- Scrollbar Custom CSS -->
        <link rel=\"stylesheet\" href=\"https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\">
        <link rel=\"stylesheet\" href={{ asset('assets/css/owl.carousel.min.css') }}>
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css\" integrity=\"sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==\" crossorigin=\"anonymous\" />

    {% endblock %}

    {% block javascripts %}
        <script>

        </script>
        {#{{ encore_entry_script_tags('app') }}#}
        <script src={{ asset('assets/js/jquery.min.js') }}></script>
        <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js\"></script>
        <script src={{ asset('assets/js/owl.carousel.min.js') }}></script>
        <script src={{ asset('assets/js/custom.js') }}></script>

    {% endblock %}
</head>
<body>
{% include 'shared/_header.html.twig' %}
{% block body %}

{% endblock %}
{% include 'shared/_footer.html.twig' %}

</body>
</html>", "base.html.twig", "C:\\Users\\Lenovo\\Desktop\\4BI1\\semestre2\\PI\\wdi\\templates\\base.html.twig");
    }
}
