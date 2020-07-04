<?php


namespace App\Models;


use Sys\AbstractModel;

class NobelModel extends AbstractModel
{
    public static function all()
    {
        return self::init()->query("select * from nobels")->fetchAll();
    }
}
