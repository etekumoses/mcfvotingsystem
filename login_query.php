<?php
	require_once 'admin/dbcon.php';
	
	if(isset($_POST['login'])){
		$regno=$_POST['regno'];
		$password=$_POST['password'];
	
		$result = $conn->query("SELECT * FROM voters WHERE regno = '$regno' && password = '$password' && `account` = 'active' && `status` = 'Unvoted'") or die(mysqli_errno());
		$row = $result->fetch_array();
		// checking if he/she voted
		$voted = $conn->query("SELECT * FROM `voters` WHERE regno = '$regno' && password = '$password' && `status` = 'Voted'")->num_rows;
		$numberOfRows = $result->num_rows;				
		
		
		if ($numberOfRows > 0){
			session_start();
			$_SESSION['voters_id'] = $row['voters_id'];
			header('location:vote.php');
		}
		
		if($voted == 1){
			echo " <br><center><font color= 'red' size='3'>You Can Only Vote Once</center></font>";
		}else{
			echo " <br><center><font color= 'red' size='3'>Invalid Details!<br>OR<br>Wait for Account Activation</center></font>";
		}
	
	}
?>