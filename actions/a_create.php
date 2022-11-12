<?php
require_once "../db_connect.php";
require_once "./file_upload.php";

if ($_POST) {
    print_r($_POST);
    $title = isset($_POST['title']) ? $_POST['title'] : "" ;
    $ISBN = isset($_POST['ISBN_code']) ? $_POST['ISBN_code'] :"" ;
    $description = isset($_POST['short_description']) ? $_POST['short_description'] : "";
    $firstname = isset($_POST['author_first_name']) ? $_POST['author_first_name'] :  "";
    $last_name = isset($_POST['author_last_name']) ? $_POST['author_last_name'] : "";
    $pname = isset($_POST['publisher_title']) ? $_POST['publisher_title'] : "";
    $paddress = isset($_POST['publisher_address']) ? $_POST['publisher_address'] :"";
    $pdate = isset($_POST['publish_date']) ?  : "";


    $image = file_upload($_FILES['image']);
    // var_dump_pretty($_FILES['image']);
    // echo "<br>";
    // var_dump_pretty($image);
    $uploadError = '';
            $sql = "INSERT into media (title,image,ISBN_code,short_description,author_first_name,author_last_name,publisher_name,publisher_address,publish_date)
            VALUES('$title', '$image->fileName',$ISBN,'$description','$firstname','$last_name','$pname','$paddress','$pdate')";
            if (mysqli_query($conn, $sql)) {
        $class = "success";
        $message = "The entry below was successfully created <br>
    <table class='table w-50'><tr>

    <td>$title</td>
    <td>$description</td>
    <td>$firstname</td>
    <td>$last_name</td>
    <td>$pname</td>
    <td>$paddress</td>
    <td>$pdate</td>
     <td>$ISBN</td>
    </tr></table><hr>";
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
        $uploadError = ($image->error != 0) ? $image->ErrorMessage : '';
    }
} else {
    header("location: ../error.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require_once "../component/boot.php"; ?>
    
</head>

<body>
    <div class="container">
        <div class="mt-3 mb-3">
            <h1>Create request response</h1>
        </div>
        <div class="alert alert-<?= $class; ?>" role="alert">
            <p><?= $message; ?></p>
            <p><?= $uploadError; ?></p>
            <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
        </div>
    </div>

</body>

</html>