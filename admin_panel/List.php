<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="shortcut icon" href="../images/if_developer-api-coding-screen_532707.png" type="image/x-icon"/>
		<link href='../css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='../js/bootstrap.js' rel='stylesheet' type='text/css'>
		<link href='../js/jquery.mobile.custom.min.js' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body style="background-color:#D3D6D6;">
		<?php
				if($_SESSION['u'] == true)
				{
				}
				else
				{
				    header("Location: index.php");
				}
		?>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Admin Panel - Network Speedtest</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
				</ul>
				<a href="con_Logout.php" class="btn btn-danger navbar-right navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Log-Out</a>
			</div>
		</nav>
		<div class="table-responsive">
			<table class="table table-hover">
				<tr>
					<th>id</th>
					<th>timestamp</th>
					<th>ip</th>
					<th>dl</th>
					<th>ul</th>
					<th>ping</th>
					<th>jitter</th>
					
				</tr>
				<?php
						$con = mysqli_connect("localhost","root","","speedtest");
						$sql = "select * from speedtest_users";
						$result = mysqli_query($con,$sql);
						
						while($row = mysqli_fetch_assoc($result)){
				?>
				<tr>
					<td><?php echo($row['id']); ?></td>
					<td><?php echo($row['timestamp']); ?></td>
					<td><?php echo($row['ip']); ?></td>
					<td><?php echo($row['dl']); ?></td>
					<td><?php echo($row['ul']); ?></td>
					<td><?php echo($row['ping']); ?></td>
					<td><?php echo($row['jitter']); ?></td>
					<td><a href="con_delete.php?id=<?php echo($row['id']); ?>" class="btn btn-warning"> Delete</a></td>
				</tr>
				<?php
				}
				
				
				?>
			</table>
		</div>
	</body>
</html>