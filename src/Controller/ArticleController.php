<?php
namespace App\Controller;

use RedBeanPHP\R;

class ArticleController extends Controller
{
    public function index()
    {
        $this->render('home/home.html.twig');
    }


    public function pageArticle() {
        $this->render('article/article.html.twig');
    }

    public function addArticle()
    {
        $article =  R::dispense('article');

        $article->title = ($this->dataClean($this->getFormField('title')));
        $article->content = ($this->dataClean($this->getFormField('content')));

        $insert = R::store($article);

        self::index();

    }
}
