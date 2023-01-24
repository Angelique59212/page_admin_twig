<?php
namespace App\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $this->render('home/home.html.twig');
    }
}
