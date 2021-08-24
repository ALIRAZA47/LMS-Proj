<?php
    $connection = mysqli_connect("localhost", "root", "", 'crudoperation');
    #mysqli_select_db($connection, );

    if (isset($_POST['insertdata'])) {
        # code...
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $query = "INSERT INTO userdata (`firstname`, `lastname`) VALUES ('$fname', ' $lname');";
        $query_run = mysqli_query($connection, $query);

        if ($query_run)
        {
            echo '<script> alert("data saved"); </script>';
            header('location:teacher_add.php');
            # code...
        }
        else{
            echo '<script> alert("data not saved"); </script>';
        }
    }

?>