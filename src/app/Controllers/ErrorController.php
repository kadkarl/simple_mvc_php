<?php


class ErrorController
{

    public static function show404()
    {
        header("HTTP/1.0 404 Not Found");
        echo "Error 404";
    }

}
