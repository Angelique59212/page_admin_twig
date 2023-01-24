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
        echo "    <div id=\"form-addArticle\">
        <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">
            <div>
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" name=\"title\" id=\"title\">
            </div>

            <div>
                <label class=\"editor\" for=\"content\">Contenu:</label>
                <textarea name=\"content\" id=\"content\"></textarea>
            </div>

            <input id=\"btn-addArticle\" type=\"submit\" name=\"save\" value=\"Enregistrer\" class=\"btn btn-secondary\">
        </form>

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
        return array (  58 => 6,  54 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Ajouter un article {% endblock %}


{% block body %}
    <div id=\"form-addArticle\">
        <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">
            <div>
                <label for=\"title\">Titre de l'article</label>
                <input type=\"text\" name=\"title\" id=\"title\">
            </div>

            <div>
                <label class=\"editor\" for=\"content\">Contenu:</label>
                <textarea name=\"content\" id=\"content\"></textarea>
            </div>

            <input id=\"btn-addArticle\" type=\"submit\" name=\"save\" value=\"Enregistrer\" class=\"btn btn-secondary\">
        </form>

    </div>
{% endblock %}

", "article/article.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/article/article.html.twig");
    }
}
