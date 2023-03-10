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
        // line 42
        echo "    </div>




";
    }

    // line 7
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "            <div class=\"sidebar\">
                <a class=\"title\" href=\"/index.php?c=home&a=home\"><h1>Menu principal</h1></a>
                <div id=\"subtitle\">
                    <h2 class=\"posts\">Posts</h2>
                    <a class=\"title\" href=\"/index.php?c=article&a=pageArticle\"><h2>Publier</h2></a>
                    <h2>Brouillons</h2>
                    <h2>Planifi??s</h2>
                    <h2>Corbeille</h2>
                    <h2 class=\"posts\">G??rer</h2>
                    <h2>Cat??gories</h2>
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
                ";
        // line 26
        if (array_key_exists("items", $context)) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "                        <div id=\"content-article\">
                            <p>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 29), "html", null, true);
                echo " </p>
                            <p>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                            <div id=\"edit-remove\">
                                <a id=\"delete\" href=\"index.php?c=article&a=delete-article&id=";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\">Supprimer</a>
                                <a id=\"edit\" href=\"index.php?c=article&a=edit-article&id=";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\">Editer</a>
                            </div>


                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                ";
        }
        // line 40
        echo "            </div>
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
        return array (  146 => 40,  143 => 39,  131 => 33,  127 => 32,  122 => 30,  118 => 29,  115 => 28,  110 => 27,  108 => 26,  105 => 25,  101 => 24,  83 => 8,  79 => 7,  70 => 42,  68 => 24,  65 => 23,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Administrateur {% endblock %}

{% block body %}
    <div class=\"container\">
        {% block sidebar %}
            <div class=\"sidebar\">
                <a class=\"title\" href=\"/index.php?c=home&a=home\"><h1>Menu principal</h1></a>
                <div id=\"subtitle\">
                    <h2 class=\"posts\">Posts</h2>
                    <a class=\"title\" href=\"/index.php?c=article&a=pageArticle\"><h2>Publier</h2></a>
                    <h2>Brouillons</h2>
                    <h2>Planifi??s</h2>
                    <h2>Corbeille</h2>
                    <h2 class=\"posts\">G??rer</h2>
                    <h2>Cat??gories</h2>
                </div>

            </div>

        {% endblock %}

        {% block content %}
            <div class=\"article\">
                {% if items is defined %}
                    {% for item in items %}
                        <div id=\"content-article\">
                            <p>{{ item.title }} </p>
                            <p>{{ item.content }}</p>
                            <div id=\"edit-remove\">
                                <a id=\"delete\" href=\"index.php?c=article&a=delete-article&id={{ item.id }}\">Supprimer</a>
                                <a id=\"edit\" href=\"index.php?c=article&a=edit-article&id={{ item.id }}\">Editer</a>
                            </div>


                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        {% endblock %}
    </div>




{% endblock %}

", "home/home.html.twig", "/home/angelika/PhpstormProjects/page_admin_twig/templates/home/home.html.twig");
    }
}
