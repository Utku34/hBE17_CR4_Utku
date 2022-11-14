<?php
require_once "./db_connect.php";
if ($_GET['id']) {
    $id = $_GET['id'];
   
    $sql = "SELECT * FROM media WHERE id = $id";
    $result = mysqli_query($conn,$sql);
    $title="";
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
    <meta title="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php require_once "component/boot.php"; ?>
    <style type="text/css">
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 70%;
    }

    .img-thumbnail {
        width: 70px !important;
        height: 70px !important;
    }
    </style>
</head>

<body>
    <fieldset>
        <legend class='h2 mb-3'>Delete request 
            
        </legend>
        <h5>You have selected the data below:</h5>
        <table class="table w-75 mt-3">
            <tr>
                <td><?= $title ?></td>
            </tr>
        </table>

        <h3 class="mb-4">Do you really want to delete this product?</h3>
        <form action="actions/a_delete.php" method="post">
            <input type="hidden" title="id" value="<?= $id ?>" />
            <input type="hidden" title="image" value="<?= $image ?>" />
            <button class="btn btn-danger" type="submit">Yes, delete it!</button>
            <a href="index.php?page=home"><button class="btn btn-warning" type="button">No, go back!</button></a>
        </form>
    </fieldset>

</body>

</html>