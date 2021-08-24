<?php
    include 'connect.php';
    #mysqli_select_db($connection, );

    if (isset($_POST['insertdata'])) {
        # code...
        $teacherid = $_POST['teacherid'];
        $teachername = $_POST['teachername'];
        $teacheremail = $_POST['teacheremail'];
        $teacherphone = $_POST['teacherphone'];
        $teacherqualif = $_POST['teacherqualif'];
        $query = "INSERT INTO `teachers` (`Teacher_id`, `Teacher_Name`,`email_id`, `phone_no`,`qualification`) VALUES ('$teacherid', '$teachername','$teacheremail' , '$teacherphone', '$teacherqualif');";
        $query_run = mysqli_query($conn, $query);

        if ($query_run)
        {
            echo '<script> alert("data saved"); </script>';
            header('location:teacher.php');
            # code...
        }
        else{
            echo '<script> alert("data not saved"); </script>';
        }
    }

?>