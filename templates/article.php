<?php /** @var \App\View $this */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1><?=$this->text->title;?></h1><hr>
<p><?=$this->text->content;?></p>
<h6><?=$this->text->author;?></h6>
<h6><a href="index.php">Назад</a> </h6>

</body>
</html>