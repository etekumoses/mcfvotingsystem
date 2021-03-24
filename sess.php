<?php
	require 'admin/dbcon.php';
	session_start(); 
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if (!isset($_SESSION['voters_id']) || (trim($_SESSION['voters_id']) == '')) { ?>
		<script>
			window.location = "index.php";
		</script>
<?php 
	}
		$session_id=$_SESSION['voters_id'];
		$user_query = $conn->query("SELECT * FROM voters WHERE voters_id = '$session_id'") or die(mysqli_errno());
		$user_row = $user_query->fetch_array();
		$user_username = $user_row['firstname']." ".$user_row['lastname'];
?>