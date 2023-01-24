<?php

require_once __DIR__ . '/../vendor/autoload.php';
require '../Router.php';

use App\Router;
use RedBeanPHP\R;
use Symfony\Component\ErrorHandler\Debug;

Debug::enable();


R::setup('mysql:host=localhost;dbname=page_admin_twig', 'dev','dev');

session_start();

try {
    Router::route();
}
catch (ReflectionException $e) {
    echo "Une erreur est survenue";
}
