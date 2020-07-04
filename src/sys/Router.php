<?php


namespace Sys;

class Router
{

    private static $url;
    private static $controller;
    private static $method;
    private static $params = [];
    private static $request_method;

    public static function init()
    {
        self::$url = rtrim(self::$url,"/");
        self::$url = explode("/", $_GET['url']);
        self::$request_method = $_SERVER['REQUEST_METHOD'];
        self::dispatch_url();
    }

    private static function dispatch_url()
    {
        if(isset(self::$url[0])) {
            if(self::$url[0] == ""){
                self::$controller = "DefaultController";
            }else{
                self::$controller = ucfirst(self::$url[0])."Controller";
            }
        }

        if(isset(self::$url[1])) {
            self::$method = self::$url[1];
        }else{
            self::$method = "index";
        }

        if(isset(self::$url[2]))
        {
            for ($i = 2;$i < count(self::$url);$i++)
            {
                array_push(self::$params,self::$url[$i]);
            }
        }
        if(self::$request_method === "POST") self::request_is_post();
        else self::request_is_get();
    }

    private static function request_is_get()
    {
        self::call_controller_and_method();
    }

    private static function request_is_post()
    {
        echo "Methode POST";
    }

    private static function call_controller_and_method()
    {
        $path_file_controller = CONTROLLERS_PATH.self::$controller.".php";

        if(file_exists($path_file_controller)) {
            if (method_exists("App\\Controllers\\" . self::$controller, self::$method)) {
                if (sizeof(self::$params) > 0) {
                    call_user_func(array("App\\Controllers\\" . self::$controller, self::$method), self::$params);
                } else {
                    call_user_func(array("App\\Controllers\\" . self::$controller, self::$method));
                }
            } else {
                throw new \Exception("La methode " . self::$method . " n'existe pas dans le controller : " . self::$controller);
                die();
            }
        }
        else
        {
            ErrorController::show404();
        }

    }


    
}
