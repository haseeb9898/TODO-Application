<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary">TODO LIST</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control" required>
                </div>
                <div class="col-2">
                    <button name="add" class="btn btn-outline-primary">ADD</button>
                </div>
            </div>
        </div>
    </form>

    <?php
    include('config.php');
    $fetch = "SELECT * FROM tbltodo";
    $fetch_query = mysqli_query($con, $fetch);
    $counter = 1;
    if (mysqli_num_rows($fetch_query) > 0) {
?>
   <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
            <table class="table table-hover">

                <tbody>
                    <?php
                     while ($row = mysqli_fetch_assoc($fetch_query)) {


                    ?>
                    <tr>
                    <th scope="row"><?php echo $counter; ?></th>
                    
                       <td><?php echo $row['list']; ?></td>
                        <td style="width: 10%;"><a href="delete.php? id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">delete</a></td>
                        <td style="width: 10%;"><a href="update.php? id=<?php echo $row['id']; ?>"  class="btn btn-outline-success">update</a></td>

                    </tr>
                    <?php
                     $counter++;
                     }

                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?

       
    ?>
           
    <?php
   
        
    }


    ?>

 




</body>

</html>