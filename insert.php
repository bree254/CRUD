<?php
if (isset($_POST["taskname"]))
{
    extract($_POST);

    require 'DB.php';

    $sqlinsert="INSERT INTO `tasks`(`task_id`, `task_name`, `date_todo`, `status`) VALUES
                                (null,'$taskname','$datetodo','$status')";

    mysqli_query($conn,$sqlinsert) or die(mysqli_error($conn));

    header("location:view.php");
}

/*if (mysqli_query($conn,$sqlinsert)){
    echo 'success';

}else
{
    //error msg
    echo "failed";


}*/

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    Insert Task
                </div>
                <div class="card-body">
                    <form action="insert.php" method="post" enctype="multipart/form-data"   >


                        <div class="form-group">
                            <label for="title">Task Name</label>
                            <input type="text" class="form-control" name="taskname" required>
                        </div>
                        <div class="form-group">
                            <label for="title">date todo</label>
                            <input type="date" class="form-control" name="datetodo" required>
                        </div>
                        <div class="form-group">
                            <label for="title">status</label>
                            <input type="text" class="form-control" name="status" required>
                        </div>
                        <button class="btn btn-info btn-block">Add Task</button>



                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>