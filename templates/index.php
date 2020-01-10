<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>
<?php
foreach ($data as $k=>$v) {
?>

    <h1><?=$v->title;?></h1>
    <p><?=$v->content;?></p>
    <h6><a href="article.php?id=<?=$v->id;?>">Подробнее</a></h6>
<br>
<?php
}
?>
</body>
</html>