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
class __TwigTemplate_71ca3a0393dc0f9e40cf0ff2b6d26a7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'lang' => [$this, 'block_lang'],
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'js_top' => [$this, 'block_js_top'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'js_bottom' => [$this, 'block_js_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        $this->displayBlock('lang', $context, $blocks);
        echo "\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('js_top', $context, $blocks);
        // line 14
        echo "</head>
<body>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('js_bottom', $context, $blocks);
        // line 21
        echo "
<script src=\"/build/js/front-bundle.js\"></script>
</body>
</html>";
    }

    // line 2
    public function block_lang($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "fr";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    ";
    }

    // line 13
    public function block_js_top($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    // line 17
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_js_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 20,  129 => 18,  123 => 17,  118 => 18,  115 => 17,  111 => 16,  104 => 13,  99 => 11,  95 => 10,  89 => 8,  82 => 2,  75 => 21,  73 => 20,  71 => 16,  67 => 14,  64 => 13,  62 => 10,  57 => 8,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"{%  block lang %}fr{% endblock %}\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}{% endblock %}</title>

    {% block css %}

    {% endblock %}
    {% block js_top %} {% endblock %}
</head>
<body>
{% block body %}
    {% block sidebar %}{% endblock %}
    {% block content %}{% endblock %}
{% endblock %}
{% block js_bottom %} {% endblock %}

<script src=\"/build/js/front-bundle.js\"></script>
</body>
</html>", "base.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/base.html.twig");
    }
}
