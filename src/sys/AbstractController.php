<?php

namespace Sys;

abstract class AbstractController
{
    public static function render(string $view, array $vars = null)
    {
        new Views($view,$vars);
    }

}
