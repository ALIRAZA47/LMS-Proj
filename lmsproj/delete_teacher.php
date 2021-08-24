<?php
    include 'connect.php';
    $id= $_GET['id'];
    $query = "DELETE FROM teachers WHERE teacher_id='$id'; ";
    $resut = mysqli_query($conn, $query) or die(mysqli_error($conn));

    header('location: teacher.php');
?>