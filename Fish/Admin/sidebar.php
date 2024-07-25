


  <aside class="main-sidebar sidebar-dark-primary elevation-4 collapsed">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="color:white;">
      <img src="../logo.png"   alt="FM Fish Company Logo" class="brand-image img-circle elevation-3" style="opacity: 3">
      <span class="brand-text font-weight-light">FM Fish Company</span>
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
              <i class="nav-icon fas fa-shopping-cart" style="color:orange"></i>
              <p>
                Order Monitoring
                
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="Stocks_Management.php" class="nav-link">
              <i class="nav-icon fas fa-lemon fa-2x" style="color:yellow"></i>
              <p>
                Stocks Management
              
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="Messages.php" class="nav-link">
              <i class="nav-icon fas fa-envelope" style="color:gold"></i>
              <p>
                Messages
              
              </p>
            </a>
          </li>



           <li class="nav-item">
            <a href="Users_Management.php" class="nav-link">
              <i class="nav-icon fa fa-user-tie" style="color:green"></i>
              <p>
                Users Management
               
              </p>
            </a>
          </li>


           <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off" style="color:navy"></i>
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