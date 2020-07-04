<?php


namespace Sys;


class AbstractController
{

    public static function render(string $view, array $vars = null)
    {
        $path_view = VIEWS_PATH.$view.".php";

        if(file_exists($path_view))
        {
            ob_start();
            extract($vars);
            require_once $path_view;
            return $vars;
            ob_end_clean();

        }else{
            throw new \Exception("La vue $view n'existe pas dans le dossier ".VIEWS_PATH);
        }
    }

}
