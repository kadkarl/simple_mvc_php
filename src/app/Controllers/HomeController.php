<?php

namespace App\Controllers;

use App\Models\NobelModel;
use DefaultModel;
use Sys\AbstractController;
use Sys\AbstractModel;

/**
 * Default Home Controller
 * Class HomeController
 * @package App\Controllers
 */
class HomeController extends AbstractController
{
    public static function index($id = null)
    {
        $nobels = NobelModel::all();

        self::render("index",[
            'id' => $id,
            'title_page' => "Home Page",
            'nobels' => $nobels
        ]);
    }

}
