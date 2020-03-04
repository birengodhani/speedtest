<?php
include_once('telemetry_settings.php');

$ip=($_SERVER['REMOTE_ADDR']);
$dl=($_POST["dl"]);
$ul=($_POST["ul"]);
$ping=($_POST["ping"]);
$jitter=($_POST["jitter"]);



		
$con = mysqli_connect("localhost","root","","speedtest");
$sql = "INSERT INTO speedtest_users (ip,dl,ul,ping,jitter) VALUES ('$ip','$dl','$ul','$ping','$ping')";
mysqli_query($con,$sql);
?>
