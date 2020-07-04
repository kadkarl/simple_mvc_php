<?php

namespace App\Controllers;

use Sys\AbstractController;

class HomeController extends AbstractController
{
    public static function index($id)
    {
        self::render("index");
    }

}
