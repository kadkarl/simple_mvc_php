<?php

namespace App\Controllers;

use App\Models\NobelModel;
use Sys\AbstractController;

/**
 * Default Home Controller
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends AbstractController
{
    public static function index($id = null)
    {
        self::render("index",[
            'id' => $id,
            'title_page' => "Home Page",
            'nobels' => NobelModel::all()
        ]);
    }

}
