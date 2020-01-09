<?php
require_once __DIR__ . '/autoload.php';

$db = new \App\Db();

$data = \App\Models\Article::findById(5);

var_dump($data);