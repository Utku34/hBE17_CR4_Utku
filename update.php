<?php
require_once "./db_connect.php";

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM media WHERE id = $id";
    $result = 
    mysqli_query($conn, 
    $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title']; 
        $ISBN = $data['ISBN_code'];
        $image = $data['image'];
    }
} else {
    header("location: error.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require_once "./component/boot.php"; ?>
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='./images/<?= $image ?>'
                alt=""></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>title</th>
                    <td><input class="form-control" type="text" name="title" placeholder="Product Name"
                            value="<?= $title ?>" /></td>
                </tr>
                <tr>
                    <th>ISBN</th>
                    <td><input class="form-control" type="number" name="ISBN_code" step="any" placeholder="ISBN"
                            value="<?= $ISBN ?>" /></td>
                </tr>
                <tr>
                    <th>image</th>
                    <td><input class="form-control" type="file" name="image" /></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                    <td><a href="index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>