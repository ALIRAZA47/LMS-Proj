<?php
    include 'connect.php';
    $id= $_GET['id'];
    $query = "DELETE FROM students_data WHERE student_id='$id'; ";
    $resut = mysqli_query($conn, $query) or die(mysqli_error($conn));

    header('location: student.php');
?>