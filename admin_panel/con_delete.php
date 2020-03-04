<?php
	extract($_GET);
    $con = mysqli_connect("localhost","root","","speedtest");
	$sql = "DELETE FROM speedtest_users WHERE speedtest_users.id = $id";
	$result = mysqli_query($con,$sql);
	header("Location: List.php");
?>
