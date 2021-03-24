<?php
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['register'])){
		$regno=$_POST['regno'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$cohort=$_POST['cohort'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE regno = '$regno' || firstname = '$fname'") or die(mysqli_errno());
		$row = $result->fetch_array();
		$numberOfRows = $result->num_rows;	
		if ($numberOfRows > 0){
			
			$update = $conn->query("UPDATE voters SET password = '$password' WHERE regno = '$regno' && firstname ='$fname' && `status` = 'Unvoted'&& `account` = 'active'") or die(mysqli_errno());
			header('location:login.php');
		}
		else{
			echo "<br><center><font color= 'red' size='3'>The Reg No. is not Valid <br> Contact the EC team on 0701407936<br>for clarification</center></font>";
		}	
		
	}
?>