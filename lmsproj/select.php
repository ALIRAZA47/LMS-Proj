<?php  
include 'connect.php';
 if(isset($_POST["teacher_id"]))  
 {  
      $output = '';  
      $connect = $conn;  
      $query = "SELECT * FROM teachers WHERE teacher_id = '".$_POST["teacher_id"]."'";  
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
                     <td width="70%">'.$row["teacher_name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Email</label></td>  
                     <td width="70%">'.$row["teacher_email"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Phone No.</label></td>  
                     <td width="70%">'.$row["teacher_phone"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Qualification</label></td>  
                     <td width="70%">'.$row["teacher_qualification"].'</td>  
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
