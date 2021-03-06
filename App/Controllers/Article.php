<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\ArticleException;

class Article extends Controller
{
    protected function handle()
    {
        $id = $_GET['id'];
        $art = \App\Models\Article::findById($id);
        if (!$art) {
            throw new ArticleException('404 bla');
        }
        $this->view->text = $art;
        $name = $art->getAuthorName($art->author_id);
        $this->view->text->author = $name;
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}