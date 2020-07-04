<?php


namespace App\Controllers;


use App\Models\NobelModel;
use Sys\AbstractController;

class NobelController extends AbstractController
{
    public static function one(int $id)
    {
        $nobel = NobelModel::one($id);

        self::render('nobel/one',[
            'title_page' => $nobel->name,
            'nobel' => $nobel
        ]);
    }

    public static function all()
    {
        self::render('nobel/all',[
            'title_page' => "Listing Prix Nobel",
            'nobels' => NobelModel::all()
        ]);
    }
}
