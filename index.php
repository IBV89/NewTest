<?php
require_once 'vendor/autoload.php';
require_once __DIR__ . '/autoload.php';

try {

    $ctrl = $_GET['ctrl'] ?? 'Index';
    $class = '\App\Controllers\\' . $ctrl;

    $ctrl = new $class;
    $ctrl();
} catch (\App\Exceptions\DbException $error) {
    echo 'Ошибка при выполнении запроса (' . $error->getQuery() . ' ) : ' . $error->getMessage();
    die();
} catch (\App\Exceptions\ArticleException $error) {
    echo $error->getError();
} catch (Exception $error) {
    echo 'Неизвестная ошибка';
    die();
}