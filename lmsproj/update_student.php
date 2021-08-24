<?php
    include 'connect.php';

    if (isset($_POST['update'])) {
        # code...
        echo "hehehheh";
        $id=$_GET['id'];
        $student_name = $_POST['student_name'];
        $student_email = $_POST['student_email'];
        $student_phone = $_POST['student_phone'];
        $student_department = $_POST['student_department'];
        $student_lmsid= $_POST['student_lmsid'];
        $query= "UPDATE `students_data` SET `student_email` = '$student_email', `student_department` = '$student_department', `student_lmsid` = '$student_lmsid', `student_phone` = '$student_phone', `student_name` = '$student_name' WHERE `student_id` = $id;";
        $result=mysqli_query($conn, $query) or die (mysqli_error($conn));
        header('location: student.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student info</title>
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
        $query_select = "SELECT * FROM students_data where student_id=$id;";
        $result_select = mysqli_query($conn, $query_select) or die(mysqli_error($conn));
        if(mysqli_num_rows($result_select));
        {
        $row = mysqli_fetch_assoc($result_select);
    ?>
    <form action="#" method="post" id="insert_form">
                    <div class="modal-body">
                              <label>Student Name:</label>
                              <input type="text" name="student_name" id="student_name" class="form-control" value="<?php echo $row['student_name'] ?>" />
                              <br />
                              <label>Email Adress:</label>
                              <input type="email" name="student_email" id="student_email" class="form-control" value="<?php echo $row['student_email'] ?>"/>
                              <br />
                              <label>Phone Number:</label>
                              <input type="text" name="student_phone" id="student_phone" class="form-control" value="<?php echo $row['student_phone'] ?>"/>
                              <label>Department</label>
                              <input type="text" name="teacher_department" id="teacher_department" class="form-control" value="<?php echo $row['student_department'] ?>"/>
                              <br />
                              <label>LMS ID</label>
                              <input type="text" name="student_lmsid" id="student_lmsid" class="form-control" value="<?php echo $row['student_lmsid'] ?>"/>
                              <br />
                              <input type="hidden" name="student_id" id="student_id" />
                              <input type="submit" name="update" id="insert" value="Update" class="btn btn-success" />
                              <div class="btn-group ">
                              <button class="btn btn-danger "><a href="student.php" class="text-white">Cancel & go back</a></button>
                              </div>
                    </div>
                </form>
    <?php
        }
    ?>
</body>
</html>
