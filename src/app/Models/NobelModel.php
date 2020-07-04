<?php

namespace App\Models;

use Sys\AbstractModel;

class NobelModel extends AbstractModel
{
    public static function all()
    {
        return self::init()->query("select * from nobels")->fetchAll(\PDO::FETCH_OBJ);
    }

    public static function one(int $id)
    {
        return self::init()->query("select * from nobels where id = $id")->fetch(\PDO::FETCH_OBJ);
    }
}
