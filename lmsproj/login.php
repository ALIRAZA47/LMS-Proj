<?php
session_start();
include 'connect.php';
$error="";
if(isset($_POST['username'])){
  $uname = $_POST['username'];
  $upass = $_POST['pass'];


  $query = "SELECT *  FROM users where user_id='$uname' AND user_password='$upass'";

  $result =mysqli_query($conn, $query) or die(mysqli_error($conn))    ;
  $row = mysqli_fetch_assoc($result);
if($result->num_rows===1)
{
    $_SESSION['name']=$uname;
    $_SESSION['id']=$row['user_name'];
    header('location:dashboard.php');
    
    //header('location:sidebar\index.html');
}
  else{
    $error="Username or Password Incorrect ";

  }
}
?>

<html lang="en">

<head>
    <title>My LMS Login</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/all.css" rel="stylesheet" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</head>


<body>
    <div class="backgimage" style="background-image:url('img/cover4.jpg')">
    <h1>Learning Management
        System Login</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <form action="#" method="POST">

            <div class=" w3l-form-group"> 
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Username" required="required" name="username"/>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Password" required="required" name="pass"/>
                </div>
            </div>
            
            <button type="submit" name="submit">Submit</button>
        </form>
        <p class=" w3l-register-p">Don't have an account?<a href="#" class="register"> Register</a></p>
    </div>
</body>

</html>