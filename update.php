<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<?php
include 'config.php';


if (isset($_GET['id'])){
    $id = $_GET['id'];
    $fetch  = "SELECT * FROM `tbltodo` WHERE id = $id";
    $fetch_data = mysqli_query($con,$fetch);
    $row = mysqli_fetch_assoc($fetch_data);
}








?>

<body class="bg-info">
    <form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary">Update </h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $row['list'];?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button  class="btn btn-outline-primary">Update</button>
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                </div>
            </div>
        </div>
    </form>
</body>

</html>