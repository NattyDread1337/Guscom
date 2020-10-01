<?php
$message = '';
$error = '';
if(isset($_POST["submit"]))
{
        if(file_exists('employee_data.json'))
        {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $tmpName = move_uploaded_file($_FILES['picture']['tmp_name'], 'uploads/'.$picture = time().'.'.pathinfo($_FILES['picture']['name'])['extension']);
            }

            $current_data = file_get_contents('employee_data.json');
            $array_data = json_decode($current_data, true);
            $extra = array(
                'id'               =>     $_POST["id"],
                'title'          =>     $_POST["title"],
                'picture'     =>     $picture
            );
            $array_data[] = $extra;
            $final_data = json_encode($array_data, JSON_UNESCAPED_UNICODE);
            if(file_put_contents('employee_data.json', $final_data))
            {
                $message = "<h5>Добавленно</h5>";
            }
        }
}
$current = file_get_contents('employee_data.json');
$array_final = json_decode($current, true);
$cout_array = count($array_final);
?>
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
        <h3>Название элемента меню</h3>
        <a href="add_elem.php"><button>+ Добавить</button></a>
        <table>
            <tr>
                <th>Редактировать</th>
                <th>ID</th>
                <th>Название</th>
                <th>Изображение</th>
            </tr>
            <? for ($number_el = 0; $number_el < $cout_array; $number_el++) {?>
            <tr>
                <td><a href="editing_elem.php?id=<?= $array_final[$number_el]['id']?>&title=<?= $array_final[$number_el]['title']?>"><img src="img/img_115247.png" style="width: 20px; height: auto"></a></td>
                <td><?echo $array_final[$number_el]["id"];?></td>
                <td><?echo $array_final[$number_el]["title"];?></td>
                <td><img src="uploads/<?echo $array_final[$number_el]["picture"];?>" class="img"></td>
            </tr>
            <? };?>
        </table>

    </div>
</section>
</body>
</html>