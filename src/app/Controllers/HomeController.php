<?php

namespace App\Controllers;

use Sys\AbstractController;
use Sys\AbstractModel;

class HomeController extends AbstractController
{
    public static function index($id)
    {
        $model = AbstractModel::init();

        var_dump($model);

        self::render("index",[
            'id' => $id,
            'title_page' => "Home Page"
        ]);
    }

}
