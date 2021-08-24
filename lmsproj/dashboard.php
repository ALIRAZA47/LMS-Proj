<?php
//starting session
    session_start();
    include 'connect.php';

?>

<html lang="en">
<head>
    <title>Dashboard</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/dashboard.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/all.css" rel="stylesheet" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- tags for responsive image grid -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link href="css/xopixel.css" rel="stylesheet" type="text/css">


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
        <!-- Image Grid-->
    <div class="xop-section">
		<ul class="xop-grid">
			<li>
				<div class="xop-box xop-img-1">
					<a href="teacher.php">
					<div class="xop-info">
						<h3 >Teachers</h3>
					</div></a>
				</div>
			</li>
			<li>
				<div class="xop-box xop-img-2">
					<a href="student.php">
					<div class="xop-info">
						<h3>Students</h3>
					</div></a>
				</div>
			</li>
		</ul>
    </div>
     <!--end of image grid-->




    <footer>&copy LMS by Ali Raza Khan</footer>

    </body>
</html>
