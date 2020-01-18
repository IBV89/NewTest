<?php

namespace App;


class Config
{
    public $data = [];

    public function __construct()
    {

        $conf = (include __DIR__ . '/../config.php')['db'];
        $this->data = $conf;
        return $this->data;
    }

}