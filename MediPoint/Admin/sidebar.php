

    
    <!-- Favicon -->
        <link rel="icon" href="img/favicon.png">
  <aside class="main-sidebar sidebar-dark-primary elevation-4 collapsed">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="color:white;">
            <img src="../img/favicon.png"   alt="Venkateshwara Traders" class="brand-image img-circle elevation-3" style="opacity: 3; margin-left: 20%;">
      <span class="brand-text font-weight-light"><b>Medi</b>Point</span>
    </a>


<?php



$sql = "SELECT * FROM tbl_user where fld_Id='$login_session' ";

        $result = mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);


                      while($row = mysqli_fetch_assoc($result)) {


?>










    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 ">
        <div class="image">
         
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['fld_Firstname']." ".$row['fld_Lastname'];  ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="Order_Monitoring.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart" style="color:teal"></i>
              <p>
                Order Monitoring
                
              </p>
            </a>
          </li>


                 <li class="nav-item">
            <a href="Appointments.php" class="nav-link">
              <i class="nav-icon fas fa-calendar" style="color:teal"></i>
              <p>
                Appointments
                
              </p>
            </a>
          </li>

                 <li class="nav-item">
            <a href="Messages.php" class="nav-link">
              <i class="nav-icon fas fa-envelope" style="color:teal"></i>
              <p>
                Messages
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="Stocks_Management.php" class="nav-link">
              <i class="nav-icon fas fa-lemon fa-2x" style="color:teal;"></i>
              <p>
                Stocks Management
              
              </p>
            </a>
          </li>




           <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off" style="color:teal"></i>
              <p>
                Logout
               
              </p>
            </a>
          </li>
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>




    <?php 


  }

  ?>
    <!-- /.sidebar -->
  </aside>