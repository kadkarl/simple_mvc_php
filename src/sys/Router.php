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

        var_dump(self::$url,self::$request_method);
    }


    
}
