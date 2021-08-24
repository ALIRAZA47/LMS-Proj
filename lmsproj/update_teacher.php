<?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        # code...
        $id=$_GET['id'];
        $teacher_name = $_POST['teacher_name'];
        $teacher_email = $_POST['teacher_email'];
        $teacher_phone = $_POST['teacher_phone'];
        $teacher_qualification = $_POST['teacher_qualification'];
        $query = "UPDATE `teachers` SET `teacher_name` = '$teacher_name', `teacher_email` = '$teacher_email', `teacher_phone` = '$teacher_phone', `teacher_qualification` = '$teacher_qualification' WHERE `teachers`.`teacher_id` = $id;";
        $result=mysqli_query($conn, $query) or die (mysqli_error($conn));
        header('location: teacher.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher info</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/teacher.css" rel="stylesheet" />
    <!-- tags for responsive image grid -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
	  <meta charset="UTF-8">
	  <meta content="width=device-width, initial-scale=1" name="viewport">
	  <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--nav bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="dashboard.php" class="navbarbrand">
            <img src="img/logo.png" alt="" style="width:50px;">
        </a>
        <ul class="navbar-nav mr-auto">
            <div style="color:white; text-align: right;">
                <h2>   Welcome to My LMS</h1>
            </div>
        </ul>
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <img src="img/logo.png" style="width:35px;" alt="">
        </button>
        <div class="dropdown-menu" aria-labellebdy="dropdownMenuLink" >
            <a href="login.php" style="color:black;">Log Out</a>
        </div>
        </div>

    </nav>
</head>
<body>
<?php
        $id=$_GET['id'];
        echo $id;
        $query_select = "SELECT * FROM teachers where teacher_id=$id;";
        $result_select = mysqli_query($conn, $query_select) or die(mysqli_error($conn));
        if(mysqli_num_rows($result_select));
        {
        $row = mysqli_fetch_assoc($result_select);
    ?>
    <form action="#" method="post">

        <div class="modal-body">
          <label>Teacher Name:</label>
          <input type="text" name="teacher_name" id="teacher_name" class="form-control" value="<?php echo $row['teacher_name'] ?>" />
          <br />
          <label>Email Adress:</label>
           <input type="email" name="teacher_email" id="teacher_email" class="form-control" value="<?php echo $row['teacher_email'] ?>" />
          <br />
          <label>Phone Number:</label>
          <input type="text" name="teacher_phone" id="teacher_phone" class="form-control" value="<?php echo $row['teacher_phone'] ?>"/>
           <label>Enter Qualification</label>
           <input type="text" name="teacher_qualification" id="teacher_qualification" class="form-control" value="<?php echo $row['teacher_qualification'] ?>" />
          <br />
           <input type="hidden" name="teacher_id" id="teacher_id" />
          <button type="submit" class="btn btn-success" name="submit">Update</button>
        </div>
    </form>
    <?php
        }
    ?>
</body>
</html>
