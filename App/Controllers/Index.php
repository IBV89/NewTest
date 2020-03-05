<?php


namespace App\Controllers;

use App\Controller;
use App\Models\Article;
use App\View;

class Index extends Controller
{
    public function action()
    {
        $this->view->articles = Article::lastNews();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}