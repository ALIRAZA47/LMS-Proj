
  <?php  
  include 'connect.php';
 $connect =$conn;  
 if(isset($_POST['student_name']))  
 {  
      $output = '';  
      $message = '';  
      $student_name = mysqli_real_escape_string($connect, $_POST["student_name"]);  
      $student_email = mysqli_real_escape_string($connect, $_POST["student_email"]);  
      $student_phone = mysqli_real_escape_string($connect, $_POST["student_phone"]);  
      $student_department = mysqli_real_escape_string($connect, $_POST["student_department"]);
      $student_lmsid = mysqli_real_escape_string($connect, $_POST["student_lmsid"]);  
      $query = "  
       INSERT INTO `students_data` ( `student_email`, `student_department`, `student_lmsid`, 
      `student_phone`, `student_name`) VALUES ( '$student_email', '$student_department', '$student_lmsid', '$student_phone', '$student_name');  
      ";  
        $message = 'Data Inserted';  
      $a=mysqli_query($connect, $query) or die(mysqli_error($connect)); 
      header('location: student.php');
     
 }  
 ?>
