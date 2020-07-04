<?php

namespace Sys\Constants;

class Constants
{
    public static function init()
    {
        define("SERVER",$_SERVER);
        define("ROOT_PATH",dirname(dirname($_SERVER['SCRIPT_FILENAME']))."/");
        define("SRC_PATH",ROOT_PATH."src"."/");
        define("APP_PATH",SRC_PATH."app"."/");
        define("SYS_PATH",SRC_PATH."sys"."/");
        define("CONTROLLERS_PATH",APP_PATH."Controllers"."/");
        define("MODELS_PATH",APP_PATH."Models"."/");
        define("VIEWS_PATH",APP_PATH."Views"."/");
    }
}
