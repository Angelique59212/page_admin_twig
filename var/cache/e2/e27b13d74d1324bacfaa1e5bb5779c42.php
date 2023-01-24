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

/* article/article.html.twig */
class __TwigTemplate_570d4eead0fc37cb765258a0cab1f088 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Ajouter un article ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 22
        echo "
    <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">

        <label for=\"title\">Titre de l'article</label>
        <input type=\"text\" name=\"title\" id=\"title\">


        <label class=\"editor\" for=\"content\">Contenu:</label>
        <textarea name=\"content\" id=\"content\"></textarea>


        <input id=\"btn-addArticle\" type=\"submit\" name=\"save\" value=\"Enregistrer\" class=\"btn btn-secondary\">
    </form>


";
    }

    // line 6
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <div class=\"sidebar\">
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

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 7,  81 => 6,  62 => 22,  59 => 6,  55 => 5,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Ajouter un article {% endblock %}


{% block body %}
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

    <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">

        <label for=\"title\">Titre de l'article</label>
        <input type=\"text\" name=\"title\" id=\"title\">


        <label class=\"editor\" for=\"content\">Contenu:</label>
        <textarea name=\"content\" id=\"content\"></textarea>


        <input id=\"btn-addArticle\" type=\"submit\" name=\"save\" value=\"Enregistrer\" class=\"btn btn-secondary\">
    </form>


{% endblock %}

", "article/article.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/article/article.html.twig");
    }
}
