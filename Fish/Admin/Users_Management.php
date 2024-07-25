<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FM Fish Company Admin Panel</title>

    <link rel="icon"  href="../logo.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<?php



include('session.php');

include('../config.php');
?>


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php

  include('sidebar.php');

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        

<div align="right">

         <button type="button" class="btn mb-1 btn-success" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
           Add User</button>



         </div>




          <div class=" modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="defaultModalLabel">Sign Up</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>

                            </div> 





                           <form method="POST" action="Add_User.php" enctype="multipart/form-data" >  
                            <div class="modal-body">




                       <div class="form-group row">

              
                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Firstname</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" name="fld_Firstname" required="required">
                        </div>
                      </div>

                      

                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Lastname</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" name="fld_Lastname" required="true" >
                        </div>
                      </div>


                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="email" name="fld_Username" required="true" >
                        </div>
                      </div>



                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Password</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="Password" name="fld_Password" required="true" >
                        </div>
                      </div>


                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Phone Number</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="text" name="fld_Phone" required="true" >
                        </div>
                      </div>



                      <div class="form-group row">

                  
                        <label for="disabledInput" class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="Password" name="fld_Address" required="true" >
                        </div>
                      </div>

                      


    








 </div>

                  
                            <div class="modal-footer">
                              <input type="submit" class="btn mb-2 btn-primary"  name="add" value="Sign Up">
                            </div> </form>
                          </div>
                        </div>
                      </div>
        
       
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>User Level</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                    
                  
                  </tr>
                  </thead>
                  <tbody>




<?php



$sql = "SELECT * FROM tbl_user  ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?>




                  <tr>
                      <td><?php echo $row['fld_Firstname'] ?></td>
                    <td><?php echo $row['fld_Lastname'] ?></td>
                       <td><?php echo $row['fld_User_Level'] ?></td>
                     <td><?php echo $row['fld_Username'] ?></td>
                     <td><?php echo $row['fld_Password'] ?></td>
                    
                    <td id="stat<?php echo  $row['fld_Id'] ?>">
                      <?php echo $row['fld_Status'] ?>

                     <button class="btn-sm btn-warning" onclick="ed<?php echo  $row['fld_Id'] ?>()"><i class="fa fa-pencil-alt"></i>Edit</button>
                  

                     <script type="text/javascript">
                       

                      function ed<?php echo  $row['fld_Id'] ?>(){

                        document.getElementById('edit<?php echo  $row['fld_Id'] ?>').hidden=false;
                        document.getElementById('stat<?php echo  $row['fld_Id'] ?>').hidden=true;
                        document.getElementById('stat').hidden=true;
                        document.getElementById('Action').hidden=false;
                      }

                        function can<?php echo  $row['fld_Id'] ?>(){

                        document.getElementById('edit<?php echo  $row['fld_Id'] ?>').hidden=true;
                        document.getElementById('stat<?php echo  $row['fld_Id'] ?>').hidden=false;
                        document.getElementById('stat').hidden=false;
                        document.getElementById('Action').hidden=true;
                      }



                     </script>
                       
                          </td>
                          <td id="edit<?php echo  $row['fld_Id'] ?>" hidden>
                                <form action="#" method="POST" >

                                  <input type="hidden" name="fld_Id" value="<?php echo  $row['fld_Id'] ?>">
                                 
                            <select class="form-control" id="change<?php echo  $row['fld_Id'] ?>" name="fld_Status" onchange="this.form.submit()">

                              <?php

                              if($row['fld_Status']=='Active'){
                                ?>
                                 <option  value="Active">Active</option>
                                   <option value="Inactive">Inactive</option>
                                     

                                <?php
                              }else if($row['fld_Status']=='Inactive'){

                              ?>
                                <option value="Inactive">Inactive</option>
                               <option value="Active">Active</option>
                              <?php 

                            }

                            ?>

                              

                            </select>

                           

                          </form>
                            <button class="btn-block btn-danger" onclick="can<?php echo  $row['fld_Id'] ?>()"><i class="fa fa-ban">Cancel</i></button>

                          <?php 

                         if(isset($_POST['fld_Status'])){
                          

                          $fld_Status=$_POST['fld_Status'];

                          $fld_Id=$_POST['fld_Id'];


    $sqlq ="UPDATE tbl_user SET fld_Status='$fld_Status' WHERE fld_Id='$fld_Id'";




  



if ($conn->query($sqlq) === TRUE) {



?>
 <script type="text/javascript">
window.onload = function(){
     



$(document).ready(function () {
    // Handler for .ready() called.
    window.setTimeout(function () {
        location.href = "Users_Management.php";
    }, 4000);

            Swal.fire(
 'User Status Successfully Updated',
    '',
  'success'
)
});

} </script>

     <?php



}else{



      echo "<td>Error Updating record: " . mysqli_error($conn);
}

}


  
?>


      </td>                 










                     
                    
                  </tr>


     <?php 
     

     }

     ?>             
                </tbody>
                   
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
       
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
   <strong>Copyright &copy; 2023 <a href="../index.php">FM Fish Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->



  <script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
