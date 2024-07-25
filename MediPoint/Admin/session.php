<?php
   include('../config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from tbl_user where fld_Id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['fld_Id'];
    $fld_Id = $row['fld_Id'];
   
   if(!isset($_SESSION['login_user'])){



echo "<script>txt = alert('Session Expired' ); window.location = '../Admin.php'</script>";
      die();
   }
?>