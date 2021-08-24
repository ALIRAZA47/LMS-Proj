<?php
   /* include 'connect.php';

    $teacher_id = $_POST['teacher_id'];
    $teacher_name = $_POST['teacher_name'];

    if (isset($_POST['teacher_id']) && isset($_POST['teacher_name'])) {
        # code...
        $query_sql="INSERT INTO `teachers` (`Teacher_id`, `Teacher_Name`) VALUES('$teacher_id', '$teacher_name');";
        myqli_query($conn, $query_sql)  or die(mysqli_error($conn));
    }
    else
    {
        echo '<br>'.'<br>'.'<br>'.'<br>'.'<br>'.'failed of set';
    }*/
?>

<html lang="en">
    <head>
        <title>Teachers Portal</title>
        <!-- meta tags -->
        <meta charset="UTF-8" />
        <!-- /meta tags -->
        <!-- custom style sheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" /> 
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <!-- Main css -->
        <link rel="stylesheet" href="css/teacheraddstyle.css">

        <!-- /custom style sheet -->
        <!-- fontawesome css -->

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/modal.js"></script>
        <script src="js/teacherindex.js"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>

        <!-- tags for responsive image grid -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/xopixel.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    

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
    <div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
</div>

    </body>


</html>