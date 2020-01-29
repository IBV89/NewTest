<?php


namespace App;


class View
{
    public $data = [];

    use Value;

    public function display($template)
    {
        include $template;
    }
}