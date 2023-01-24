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

/* home/home.html.twig */
class __TwigTemplate_78ed03409f4e7d264281ecb54b744786 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Page Administrateur ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container\">
        ";
        // line 7
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "
        ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>




";
    }

    // line 7
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <div class=\"sidebar\">
                <h1 id=\"title\">Menu principal</h1>
                <div id=\"subtitle\">
                    <h2 class=\"posts\">Posts</h2>
                    <a href=\"/index.php?c=article&a=pageArticle\"><h2>Publier</h2></a>
                    <h2>Brouillons</h2>
                    <h2>Planifiés</h2>
                    <h2>Corbeille</h2>
                    <h2 class=\"posts\">Gérer</h2>
                    <h2>Catégories</h2>
                </div>

            </div>

        ";
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "            <div class=\"article\">

            </div>
        ";
    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 25,  101 => 24,  83 => 8,  79 => 7,  70 => 29,  68 => 24,  65 => 23,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Administrateur {% endblock %}

{% block body %}
    <div class=\"container\">
        {% block sidebar %}
            <div class=\"sidebar\">
                <h1 id=\"title\">Menu principal</h1>
                <div id=\"subtitle\">
                    <h2 class=\"posts\">Posts</h2>
                    <a href=\"/index.php?c=article&a=pageArticle\"><h2>Publier</h2></a>
                    <h2>Brouillons</h2>
                    <h2>Planifiés</h2>
                    <h2>Corbeille</h2>
                    <h2 class=\"posts\">Gérer</h2>
                    <h2>Catégories</h2>
                </div>

            </div>

        {% endblock %}

        {% block content %}
            <div class=\"article\">

            </div>
        {% endblock %}
    </div>




{% endblock %}

", "home/home.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/home/home.html.twig");
    }
}
