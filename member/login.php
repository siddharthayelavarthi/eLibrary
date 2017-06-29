<?php
	if (isset($_POST['submit'])){
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM member WHERE username='$username' AND password='$password";
	$result = mysql_query($query)or die(mysql_error());
	$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		$status=$row['status'];
		if( $num_row > 0 && $status=='Active') {
			header('location:dashboard.php');
			$member_id=$row['member_id'];
			$_SESSION['id']=$row['member_id'];
		}
		else{ ?>
			<div class="alert alert-danger">Access Denied</div>		
		<?php
		}
		setcookie("member_id", $member_id, time()+10000000, "/", "example.com");
	}
?>