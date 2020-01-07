<?php
require_once __DIR__ . '/autoload.php';

$db = new \App\Db();

$data = $db->query('SELECT * FROM news', [], '\App\Models\Article');
