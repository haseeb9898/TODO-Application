<?php
include('config.php');

header('location:index.php');
if (isset($_POST['add'])) {
    $list = $_POST['list'];
    $insert = "INSERT INTO `tbltodo`(`list`)  VALUES ('$list')";
    $insert_query = mysqli_query($con, $insert);
    if ($insert_query) {
        header("location: index.php");
    } else {
        echo "Error";
    }
}
