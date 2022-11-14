<?php
require_once "../db_connect.php";

if ($_POST) {
    $id = $_POST['id'];
    $sql = "DELETE from media WHERE id= $id";
    // echo $sql;
    if (mysqli_query($conn, $sql)) {
        $class = "success";
    } else {
        $class = "danger";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require_once "../component/boot.php"; ?>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Delete request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <a href='../index.php?page=home'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>
</body>

</html>