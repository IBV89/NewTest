<?php /** @var \App\View $this */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php
foreach ($this->articles as $article) {
?>
    <h1><?=$article->title;?></h1>
    <p><?=$article->content;?></p>
    <h6><a href="index.php?ctrl=Article&id=<?=$article->id;?>">Подробнее</a></h6>
<br>
<?php
}
?>
</body>
</html>