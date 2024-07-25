<?php 

include('config.php');





if ($_SERVER["REQUEST_METHOD"] == "POST") {






	$fld_Name=addslashes($_POST['fld_Name']);
	$fld_Email=addslashes($_POST['fld_Email']);
		$fld_Phone=addslashes($_POST['fld_Phone']);
			$fld_Service=addslashes($_POST['fld_Service']);
				$fld_Date=addslashes($_POST['fld_Date']);
			$fld_Message=addslashes($_POST['fld_Message']);





$sqlq = "INSERT INTO tbl_transaction (fld_Name, fld_Email,fld_Phone,fld_Service,fld_Date,fld_Message,fld_transaction) 
    VALUES ('$fld_Name', '$fld_Email', '$fld_Phone','$fld_Service','$fld_Date','$fld_Message','Appointment') ;";
  



          
if ($conn->query($sqlq) === TRUE) {




     echo "<script>alert('Submitted'); window.location='Appointment.php';</script>";


}else{



      echo "<td>Error updating record: " . mysqli_error($conn);
}


}
		

	?>









?>