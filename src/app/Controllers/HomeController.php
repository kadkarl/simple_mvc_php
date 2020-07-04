<?php

namespace App\Controllers;

use App\Models\NobelModel;
use Sys\AbstractController;
use Sys\Router;

/**
 * Default Home Controller
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends AbstractController
{
    public static function index($id = null)
    {
        if($id)
        {
            return self::render("nobel/one",[
                'id' => $id,
                'title_page' => "Home Page",
                'nobel' => NobelModel::one($id)
            ]);
        }

        if(Router::$request_method == "POST")
        {
            $id_nobel = $_POST['id_nobel'];

            return self::render("nobel/one",[
                'id' => $id,
                'title_page' => "Home Page",
                'nobel' => NobelModel::one($id_nobel)
            ]);
        }

        return self::render("index",[
            'id' => $id,
            'title_page' => "Home Page",
            'nobels' => NobelModel::all()
        ]);
    }

}
