<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Guscom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<section class="d-flex">
    <?php require_once "block/left_menu.php" ?>
    <div class="right__menu">
        <h3>Добавление элемента</h3>
        <form method="POST" action="index.php" enctype="multipart/form-data" class="form_add">
            <label>ID</label>
            <input type="text" placeholder="id" name="id">
            <label>Название</label>
            <input type="text" placeholder="Название" name="title">
            <label>Картинка</label>
            <input type="file" name="picture">
            <input type="submit" name="submit" value="Сохранить" id="submit">
        </form>
    </div>
</section>
</body>
</html>