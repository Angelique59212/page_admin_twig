<?php
namespace App;

use App\Controller\Controller;
use App\Controller\ErrorController;
use ReflectionException;
use ReflectionMethod;

class Router
{
    /**
     * Route the request
     * @throws ReflectionException
     */
    public static function route (): void
    {
        $strController = self::getParam('c', 'home');
        $method = self::getParam('a');
        $controller = self::guessController($strController);

        // 404 message if the controller is not present
        if ($controller instanceof ErrorController) {
            $controller->error404($strController);
            exit();
        }

        //Here we have a controller for sure.
        $method = self::guessMethod($controller, $method);

        if (null === $method) {
            $controller->home();
        }

        else {
            $params = self::guessParam($controller, $method);
            if (count($params) === 0) {
                $controller->$method();
            }
            else {
                foreach ($params as $param) {
                    $parameters[] = $_GET[$param['paramName']];
                }
                $controller->$method(...$parameters);
            }
        }

    }

    /**
     * fetch the parameters from the URL
     * @param Controller $controller
     * @param string $method
     * @return array
     * @throws ReflectionException
     */
    private static function guessParam (Controller $controller, string $method): array {
        $paramsArray = [];
        $reflexion = new ReflectionMethod($controller, $method);
        $parameters = $reflexion->getParameters();
        foreach ($parameters as $parameter) {
            $paramsArray[] = [
                'paramName' => $parameter->name,
                'paramType' => $parameter->getType()
            ];
        }
        return $paramsArray;
    }

    /**
     * @param Controller $controller
     * @param string|null $method
     * @return string|null
     */
    private static function guessMethod (Controller $controller, ?string $method) : ?string {
        if (strpos($method, '-') !== -1) {
            $method = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $method))));
        }

        $method = lcfirst($method);
        return method_exists($controller, $method) ? $method : null;
    }

    /**
     * Check if the controller exists otherwise redirect to errorController
     * @param string $controller
     * @return ErrorController|mixed
     */
    private static function guessController (string $controller): mixed
    {
        $controller = 'App\Controller\\' .ucfirst($controller) . 'Controller';
        return class_exists($controller) ? new $controller : new ErrorController();

    }

    /**
     * Get param from $_GET and secure string
     * @param string $param
     * @param $default
     * @return string|null
     */
    private static function getParam (string $param, $default = null): ?string {
        if (isset($_GET[$param])) {
            return filter_var($_GET[$param], FILTER_SANITIZE_STRING);
        }
        return $default;
    }
}
