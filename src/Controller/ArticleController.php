<?php
namespace App\Controller;

use RedBeanPHP\R;

class ArticleController extends Controller
{
    public function index()
    {
        $article = R::findAll('article');

        $this->render('home/home.html.twig', [
            'items' => $article,
        ]);
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

    public function deleteArticle(int $id = null)
    {
        $article = R::findOne('article', 'id=?', [$id]);

        if ($article)
        {
            R::trash($article);
            self::index();
        }
    }
}
