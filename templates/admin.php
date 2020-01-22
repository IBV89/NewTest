<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
<h1>Create</h1>
<form action="crud.php" method="post">
    title: <input name="title" type="text">
    text: <input name="content" type="text">
    <input type="submit" name="create" value="create">
</form>

<h1>Delete</h1>
<form action="crud.php" method="post" name="delete">
<?php
foreach ($data as $k=>$v) {
    ?>

    <?= $v->title . ' : ' . $v->content; ?> <input type="radio" name="id" value="<?= $v->id; ?>"><hr>
<?php
}
?>
    <input type="submit" name="delete" value="delete">
</form>


<h1>Update</h1>

<?php foreach ($data as $k=>$v) {
    ?>
    <form action="crud.php" method="post" name="update">
        <input type="hidden" name="id" value="<?= $v->id; ?>">
        title: <textarea cols="60" rows="20" name="title"><?= $v->title; ?> </textarea>
        text: <textarea cols="60" rows="20" name="content"><?= $v->content; ?></textarea>
        <input type="submit" name="update" value="update">
    </form>
    <?php
    }
    ?>


</body>
</html>