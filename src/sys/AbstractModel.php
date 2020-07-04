<?php

namespace Sys;


class AbstractModel
{
    private static $instance;
    private static  $db;

    public static function init()
    {
        $db_config = require_once ROOT_PATH."Db_Config.php";

        var_dump($db_config);

    }

}
