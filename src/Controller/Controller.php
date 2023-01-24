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

    /**
     *Return a form field value or default
     * @param string $field
     * @param $default
     * @return mixed|string
     */
    public function getFormField(string $field, $default = null): mixed
    {
        if (!isset($_POST[$field])) {
            return (null === $default) ? '' : $default;
        }

        return $_POST[$field];
    }

    /**
     * sanitize data
     * @param $data
     * @return string
     */
    public function dataClean($data): string
    {
        $data = trim(strip_tags($data));
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
}