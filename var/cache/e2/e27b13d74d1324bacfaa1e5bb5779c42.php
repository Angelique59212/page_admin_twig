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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"title-addArticle\">
    <h1>Ajouter un article</h1>
</div>

<div id=\"form-addArticle\">
    <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">
        <div>
            <label for=\"title\">Titre de l'article</label>
            <input type=\"text\" name=\"title\" id=\"title\">
        </div>

        <div>
            <label class=\"editor\" for=\"editor\">Contenu:</label>
            <textarea name=\"content\" id=\"editor-content\"></textarea>
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

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"title-addArticle\">
    <h1>Ajouter un article</h1>
</div>

<div id=\"form-addArticle\">
    <form action=\"/index.php?c=article&a=add-article\" method=\"post\" enctype=\"multipart/form-data\">
        <div>
            <label for=\"title\">Titre de l'article</label>
            <input type=\"text\" name=\"title\" id=\"title\">
        </div>

        <div>
            <label class=\"editor\" for=\"editor\">Contenu:</label>
            <textarea name=\"content\" id=\"editor-content\"></textarea>
        </div>

        <input id=\"btn-addArticle\" type=\"submit\" name=\"save\" value=\"Enregistrer\" class=\"btn btn-secondary\">
    </form>

</div>
", "article/article.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/article/article.html.twig");
    }
}
