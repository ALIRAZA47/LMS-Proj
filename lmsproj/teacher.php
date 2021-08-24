<?php
//starting session
    session_start();
    include 'connect.php';
    $connect=$conn;
    $query = "SELECT * FROM teachers";
    $result = mysqli_query($connect, $query)  or die(mysqli_error($connect));

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

    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/teacher.css" rel="stylesheet" />
    <!-- tags for responsive image grid -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <!--  -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <script src="js/sweetalert2.all.min.js"></script>

	  <meta charset="UTF-8">
	  <meta content="width=device-width, initial-scale=1" name="viewport">
	  <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--nav bar-->
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
<br /><br />
           <div class="container" style="width:700px;">
                <br />
                <div class="table-responsive">
                     <div align="right">
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning btn-lg">Add</button>
                     </div>
                     <br />
                     <div id="employee_table">
                          <table class="table table-bordered">
                               <tr class="bg-dark text-white">
                                    <th width="72%">Teacher Name</th>
                                    <th width="28%"></th>

                               </tr>
                               <?php
                               while($row = mysqli_fetch_array($result))
                               {
                               ?>
                               <tr>
                                    <td><?php echo $row["teacher_name"]; ?></td>
                                    <td>
                                    <div class="btn-group btn-group-sm" role="group" >
                                      <input type="button" name="view" value="View" id="<?php echo $row["teacher_id"]; ?>" class="btn btn-white view_data" />
                                      <button class="btn btn-success " ><a href="update_teacher.php?id=<?php echo $row['teacher_id']; ?>" class="text-white">Update</a></button>
                                      <button type="button" class="btn btn-danger " ><a href="delete_teacher.php?id=<?php echo $row['teacher_id']; ?>" class="text-white btn-del">Delete</a></button>
                                     </div>
                                    </td>
                               </tr>
                               <?php
                               }
                               ?>
                          </table>
                     </div>
                </div>
           </div>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      </body>
 </html>
<div id="dataModal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Teacher Details</h4>
                </div>
                <div class="modal-body" id="employee_detail">
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>
<div id="add_data_Modal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Teacher Add/Update</h4>
                </div>
                <form action="edit.php" method="post" id="insert_form">
                    <div class="modal-body">
                              <label>Teacher Name:</label>
                              <input type="text" name="teacher_name" id="teacher_name" class="form-control" />
                              <br />
                              <label>Email Adress:</label>
                              <input type="email" name="teacher_email" id="teacher_email" class="form-control" />
                              <br />
                              <label>Phone Number:</label>
                              <input type="text" name="teacher_phone" id="teacher_phone" class="form-control" />
                              <label>Enter Qualification</label>
                              <input type="text" name="teacher_qualification" id="teacher_qualification" class="form-control" />
                              <br />
                              <input type="hidden" name="teacher_id" id="teacher_id" />
                              <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

                    </div>
                </form>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
</div>
<!-- ###############              Edit Modal                      ################################################## -->
<script>

 $(document).ready(function(){
      $('#add').click(function(){
           $('#insert').val("Insert");
           $('#insert_form')[0].reset();
      });
     /* $(document).on('click', '.edit_data', function(){
           var teacher_id = $(this).attr("id");
           console.log("hi babe");
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{teacher_id:teacher_id},
                dataType:"json",
                success:function(data){
                     $('#teacher_name').val(data.name);
                     $('#teacher_email').val(data.address);
                     $('#teacher_phone').val(data.gender);
                     $('#teacher_qualification').val(data.destination);
                     $('#insert').val("Update");
                     $('#add_data_Modal').modal('show');
                }
           });
     });  */
      $('#insert_form').on("submit", function(event){
           event.preventDefault();
           if($('#teacher_name').val() == "")
           {
                alert("Teacher Name is required");
           }
           else if($('#teacher_qualification').val() == '')
           {
                alert("Teacher Qualification is required");
           }
           else if($('#teacher_phone').val() == '')
           {
                alert("Phone No. is required");
           }
           else
           {
                $.ajax({
                     url:"insert.php",
                     method:"POST",
                     data:$('#insert_form').serialize(),
                     beforeSend:function(){
                          $('#insert').val("Inserting");
                     },
                     success:function(data){
                          $('#insert_form')[0].reset();
                          $('#add_data_Modal').modal('hide');
                     }
                });
           }
      });
      $(document).on('click', '.view_data', function(){
           var teacher_id = $(this).attr("id");
           if(teacher_id != '')
           {
                $.ajax({
                     url:"select.php",
                     method:"POST",
                     data:{teacher_id:teacher_id},
                     success:function(data){
                        console.log(teacher_id);
                          $('#employee_detail').html(data);
                          $('#dataModal').modal('show');
                     }
                });
           }
      });
      $('.servdeletion').click(function(e){
          e.preventDefaults();
          alert('Hi');
      });

 });
</script>



<script>
          $('.btn-del').on('click', function(e){
               e.preventDefault();
               const href= $(this).attr('href')
               console.log(href);
               Swal.fire({
               title: 'Are you sure?',
               text: "You won't be able to revert this!",
               icon: 'warning',
               timer: 2000,
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, delete it!',

               })
               .then((result) => {
               if (result.value) {
               document.location.href = href;
               Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success',
                    '20000'
               )
               }
               })


          });
     </script>
