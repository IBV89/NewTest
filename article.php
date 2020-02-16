<?php

require_once __DIR__ .'/autoload.php';

$id = $_GET['id'];

$view = new \App\View();

$view->text = \App\Models\Article::findById($id);

$view->author  = \App\Models\Article::getAuthorName($view->text->author_id);

$view->display(__DIR__ . '/templates/article.php');

