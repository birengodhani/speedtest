<?php
	session_start();
		extract($_POST);

        $con = mysqli_connect("localhost","root","","speedtest");
		$sql = "select * from login where username='$txtUserName' and password='$txtPassword'";

		$result = mysqli_query($con,$sql);

		if($row = mysqli_fetch_assoc($result)){
			$_SESSION['u'] = $txtUserName;
			header("Location: List.php");
		}
		else{
			$_SESSION['err'] = "Username/Password does not match";
			header("Location: index.php");
		}
?>