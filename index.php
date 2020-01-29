<?php

require_once __DIR__ . '/autoload.php';

$view = new \App\View();

$view->articles = \App\Models\Article::lastNews();

$view->display(__DIR__ . '/templates/index.php');