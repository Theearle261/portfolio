<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MediPoint - Your Path to Health and Wellness | Log in</title>


      <link rel="icon"  href="img/favicon.png" >

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php" style="color:black"><img src="img/logo.png" width="250" height="70"><br/><b style="color:black"> </b> Your Path to Health and Wellness</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>

      <form action="admin\login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" required class="form-control" name="fld_Username" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" required name="fld_Password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


      <div class="social-auth-links text-center mb-3">
        
        <button type="submit" class="btn btn-block btn-primary">
          <i class="fab fa-arrow mr-2"></i> Login
        </button> 
<br/>
<!-- 
         <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">
           Sign Up</button>    -->   
      </div>        
      </form>
      <!-- /.social-auth-links -->


<!-- 
           <div class=" modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="defaultModalLabel">Sign Up</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>

                            </div> 





                           <form method="POST" action="Sign_Up.php" enctype="multipart/form-data" >  
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
                          <input class="form-control" type="text" name="fld_Address" required="true" >
                        </div>
                      </div>

                      


    








 </div>

                  
                            <div class="modal-footer">
                              <input type="submit" class="btn mb-2 btn-primary"  name="add" value="Sign Up">
                            </div> </form>
                          </div>
                        </div>
                      </div> -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
<style type="text/css">
  

body{
    width: 100%;
    height: 100%;
    background-size: 100% ;
  background-image: url("images/banner2.jpg");



}


</style>