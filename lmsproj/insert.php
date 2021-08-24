
  <?php  
  include 'connect.php';
 $connect =$conn;  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $teacher_name = mysqli_real_escape_string($connect, $_POST["teacher_name"]);  
      $teacher_email = mysqli_real_escape_string($connect, $_POST["teacher_email"]);  
      $teacher_phone = mysqli_real_escape_string($connect, $_POST["teacher_phone"]);  
      $teacher_qualification = mysqli_real_escape_string($connect, $_POST["teacher_qualification"]);  
      if($_POST["teacher_id"] != '')  
      {  
           $query = "  
           UPDATE tbl_employee   
           teacher_name='$teacher_name',   
           teacher_email='$teacher_email',   
           teacher_phone='$teacher_phone',   
           teacher_qualification = '$teacher_qualification',
           WHERE id='".$_POST["teacher_id"]."'";  
           $message = 'Data Updated';  
      }     
      else  
      {  
           $query = "  
           INSERT INTO teachers(teacher_name, teacher_email, teacher_phone, teacher_qualification)  
           VALUES('$teacher_name', '$teacher_email', '$teacher_phone', '$teacher_qualification');  
           ";  
           $message = 'Data Inserted';  
      }  
      if($a=mysqli_query($connect, $query) or die(mysqli_error($connect)))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM teachers";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Teacher Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["teacher_name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["teacher_id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["teacher_id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
