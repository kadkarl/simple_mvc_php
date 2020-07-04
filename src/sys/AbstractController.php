<?php


namespace Sys;


class AbstractController
{

    public static function render(string $view)
    {
        $path_view = VIEWS_PATH.$view.".php";

        if(file_exists($path_view))
        {
            require_once $path_view;

        }else{
            throw new \Exception("La vue $view n'existe pas dans le dossier ".VIEWS_PATH);
        }
    }

}
