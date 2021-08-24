<?php  
include 'connect.php';
 if(isset($_POST["student_id"]))  
 {  
      $output = '';  
      $connect = $conn;  
      $query = "SELECT * FROM students_data WHERE student_id = '".$_POST["student_id"]."'";  
      $result = mysqli_query($connect, $query) or die(mysqli_error($connect));  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
          echo mysqli_error($connect);
           $output .= '  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%">'.$row["student_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["student_email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone No.</label></td>  
                     <td width="70%">'.$row["student_phone"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Department</label></td>  
                     <td width="70%">'.$row["student_department"].'</td>  
                </tr>
                <tr>  
                    <td width="30%"><label>LMS Id</label></td>  
                    <td width="70%">'.$row["student_lmsid"].'</td>  
                </tr>       
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
