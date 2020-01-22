<?php
require_once __DIR__ .'/autoload.php';

$id = $_GET['id'];

$data = \App\Models\Article::findById($id);

include __DIR__ . '/templates/article.php';

