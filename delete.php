<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE  FROM `tbltodo` WHERE id = $id";
    $delete_query_result = mysqli_query($con, $delete_query);
    if ($delete_query_result) {
        header("location: index.php");
    } else {
        echo "Not deleted";
    }
}


?>