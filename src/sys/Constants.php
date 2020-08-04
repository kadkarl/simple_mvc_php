<?php

namespace Sys;

class Constants
{
    public static function init()
    {
        define("SERVER",$_SERVER);
        define("ROOT_PATH",dirname(dirname($_SERVER['SCRIPT_FILENAME']))."/");
        define("SITE_URL",preg_replace('/:[0-9]+/', '',str_replace($_GET,"","http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])));
        define("SRC_PATH",ROOT_PATH."src"."/");
        define("APP_PATH",SRC_PATH."app"."/");
        define("SYS_PATH",SRC_PATH."sys"."/");
        define("CONTROLLERS_PATH",APP_PATH."Controllers"."/");
        define("MODELS_PATH",APP_PATH."Models"."/");
        define("VIEWS_PATH",APP_PATH."Views"."/");
        define("ASSETS",SITE_URL."public/assets");
    }
}
