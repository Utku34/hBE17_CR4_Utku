<?php 
$localhost = "localhost";

$user = "root";

$pass = "";

$db_name = "be17_cr4_utku_biglibrary";


try {
    $conn = mysqli_connect($localhost, $user, $pass, $db_name);

    // echo "Connected successfully";

} catch (Exception $e) {
    echo "Failed to connect: " . mysqli_connect_error();
}

function var_dump_pretty($var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}
?>