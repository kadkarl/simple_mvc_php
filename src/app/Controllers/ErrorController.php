<?php

namespace App\Controllers;

/**
 * Default Error Controller
 * Class ErrorController
 * @package App\Controllers
 */
class ErrorController
{

    public static function show404()
    {
        header("HTTP/1.0 404 Not Found");
        echo "Error 404";
    }

}
