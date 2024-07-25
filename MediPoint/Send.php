<?php 

include('config.php');





if ($_SERVER["REQUEST_METHOD"] == "POST") {






	$fld_Name=addslashes($_POST['fld_Name']);
	$fld_Email=addslashes($_POST['fld_Email']);
		
				$fld_Date=date('Y-m-d');
			$fld_Message=addslashes($_POST['fld_Message']);





$sqlq = "INSERT INTO tbl_transaction (fld_Name, fld_Email,fld_Date,fld_Message,fld_transaction) 
    VALUES ('$fld_Name', '$fld_Email', '$fld_Date','$fld_Message','Message') ;";
  



          
if ($conn->query($sqlq) === TRUE) {




     echo "<script>alert('Submitted'); window.location='Contact.php';</script>";


}else{



      echo "<td>Error updating record: " . mysqli_error($conn);
}


}
		

	?>









?>