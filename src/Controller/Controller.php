<?php
namespace App\Controller;

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Extension\CoreExtension;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

abstract class Controller
{
    private static ?Environment $twigInstance = null;
    private static ?FilesystemLoader $twigLoader = null;

    public function render(...$params): void {
        try {
            echo self::getTwig()->render(...$params);
        }
        catch (LoaderError $e) {
            echo self::getTwig()->render('error/404.html.twig');
        }
    }

    /**
     * Return Twig Instance
     * @return Environment
     */
    public function getTwig(): Environment
    {
        if (null === self::$twigInstance) {
            if (null === self::$twigInstance) {
                self::$twigLoader = new FilesystemLoader('../templates');
            }
            self::$twigInstance = new Environment(self::$twigLoader, [
                'debug' => true,
                'strict_variables' =>true,
                'cache' => '../var/cache'
            ]);
            self::$twigInstance->addExtension(new DebugExtension());
            self::$twigInstance->getExtension(CoreExtension::class)->setNumberFormat(2, ',', ' ');
        }
        return self::$twigInstance;
    }

    /**
     * return the current twig Loader,
     * @return FilesystemLoader|null
     */
    public function getTwigLoader(): ?FilesystemLoader
    {
        return self::$twigLoader;
    }
}