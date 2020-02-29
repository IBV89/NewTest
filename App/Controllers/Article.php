<?php


namespace App\Controllers;

use App\Controller;
use App\View;

class Article extends Controller
{
    public function action()
    {
        $id = $_GET['id'];
        $art = App\Models\Article::findById($id);
        $this->view->text = $art;
        $name = $art->getAuthorName($art->author_id);
        $this->view->text->author = $name;
        $this->view->display(__DIR__ . '/templates/article.php');
    }
}