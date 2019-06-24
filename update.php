<?php
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    require 'DB.php';
    $sql="select * from crud where task_id=$id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    extract($row);
}
if(isset($_POST["task_name"]))
{

    $status=$_REQUEST["status"];
    $id=$_REQUEST["id"];
    require 'DB.php';
    $sql="update crud set task_name=$taskname,status=$status where task_id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    header("location:view.php");
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update task</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card">
                <div class="card-header">
                    updating task

                </div>


                    <?php
                    if (isset($message))
                        echo "<p class='text-danger'>$message</p>"
                    ?>

                    <form action="update.php" method="post" >

                        <input type="hidden" name="id" value="<?=$task_id?>">

                        <div class="form-group">
                            <lable for="quantity">status</lable>
                            <input min="1" value="" type="text" class="form-control" name="status" required>
                        </div>

                        <button class="btn btn-info btn-block">Update task</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</body>