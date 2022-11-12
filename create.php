<?php require_once "./component/boot.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
    fieldset {
        margin: auto;
        margin-top: 100px;
        width: 60%;
    }
    </style>

</head>

<body>
    <fieldset>
        <legend class='h2'>Add Product</legend>
        <form action="actions/a_create.php" method="post" enctype="multipart/form-data">
            <table class='table'>
                <tr>
                    <th>title</th>
                    <td><input class='form-control' type="text" name="title" placeholder="title" /></td>
                </tr>
                <tr>
                    <th>ISBN code</th>
                    <td><input class='form-control' type="number" name="ISBN_code" placeholder="ISBN" step="any" /></td>
                </tr>
                <tr>
                    <th>short_description</th>
                    <td><input class='form-control' type="text" name="short_description" placeholder="description" /></td>
                </tr>
                <tr>
                    <th>author first name</th>
                    <td><input class='form-control' type="text" name="author_first_name" placeholder="author first name" /></td>
                </tr>
                <tr>
                    <th>author last name</th>
                    <td><input class='form-control' type="text" name="author_last_name" placeholder="author last name" /></td>
                </tr>
                <tr>
                    <th>publisher name</th>
                    <td><input class='form-control' type="text" name="publisher_title" placeholder="publisher name" /></td>
                </tr>
                <tr>
                    <th>publisher address</th>
                    <td><input class='form-control' type="text" name="publisher_address" placeholder="publisher address" /></td>
                </tr>
                <tr>
                    <th>publish date</th>
                    <td><input class='form-control' type="text" name="publish_date" placeholder="publish date" /></td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="image" /></td>
                </tr>
                <tr>
                    <td><button class='btn btn-success' type="submit">Insert Product</button></td>
                    <td><a href="index.php?page=home"><button class='btn btn-warning' type="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>

</html>