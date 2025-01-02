<?php
include ('config.php');

if (isset($_POST['id'])) {
    $list = $_POST['list'];
    $id = $_POST['id'];

    $update = "UPDATE `tbltodo` SET `list`='$list' WHERE id =$id";

    $update_query = mysqli_query($con, $update);

    if ($update_query) {
        header("location: index.php");
    } else {
        echo "Failed to update";
    }
}

?>