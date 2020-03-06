<?php
require __DIR__ . '/autoload.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = App\Models\Article::findById($id);
    $article->title = $title;
    $article->content = $content;
    $article->save();
    $_POST['update'] = '';
    unset($article);
    unset($content);
    unset($id);
    header('Location: index.php?ctrl=Admin&name=admin');
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $article = App\Models\Article::findById($id);
    $article->delete();
    unset($article);
    unset($id);
    header('Location: index.php?ctrl=Admin&name=admin');
}
if (isset($_POST['create'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $article = new \App\Models\Article();
    $article->title = $title;
    $article->content = $content;
    $article->save();
    unset($title);
    unset($content);
    header('Location: index.php?ctrl=Admin&name=admin');
}