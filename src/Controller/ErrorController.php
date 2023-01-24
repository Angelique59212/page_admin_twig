<?php

namespace App\Controller;



class ErrorController extends Controller
{
    /**
     * Control the error page
     * @param $askPage
     * @return void
     */
    public function error404($askPage)
    {
        $this->render('error/404.html.twig');
    }

    /**
     * @return void
     */
    public function index()
    {

    }
}

