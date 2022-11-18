
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../component/boot.php"; ?>
    <?php
    require_once "file_upload.php";
    require_once "../db_connect.php";
    ?>
    <title></title>
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Update request response</h1>
        </div>
        <div class="alert alert-<?php echo $class; ?>" role="alert">

            <a href='../update.php?id=<?= $id ?>'><button class="btn btn-warning" type='button'>Back</button></a>
            <a href='../index.php?page=home'><button class="btn btn-success" type='button'>Home</button></a>
        </div>
    </div>

    <?php

if ($_POST) {
    $title = isset($_POST['title']) ? $_POST['title'] : "" ;
    $ISBN = isset($_POST['ISBN_code']) ? $_POST['ISBN_code'] :"" ;
    $description = isset($_POST['short_description']) ? $_POST['short_description'] : "";
    $firstname = isset($_POST['author_first_name']) ? $_POST['author_first_name'] :  "";
    $last_name = isset($_POST['author_last_name']) ? $_POST['author_last_name'] : "";
    $pname = isset($_POST['publisher_title']) ? $_POST['publisher_title'] : "";
    $paddress = isset($_POST['publisher_address']) ? $_POST['publisher_address'] :"";
    $pdate = isset($_POST['publish_date']) ?  : "";
    $image = file_upload($_FILES['image']);
    $id=$_POST['id'];
    $uploadError = '';
    if ($image->error === 0) {
        
        $sql = "UPDATE media SET title='$title', ISBN_code=$ISBN, image='$image->fileName' WHERE id = $id";
    } else {
        $sql = "UPDATE media SET title='$title', ISBN_code=$ISBN WHERE id = $id";
    }
        if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>

    
</body>
</html>