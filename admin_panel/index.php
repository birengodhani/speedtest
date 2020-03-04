<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="shortcut icon" href="../images/if_developer-api-coding-screen_532707.png" type="image/x-icon"/>
		<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
		<link href='css_js/custom.css' rel='stylesheet' type='text/css'>
		<link href='css_js/custom.js' rel='stylesheet' type='text/css'>
		<link href='../css/bootstrap.css' rel='stylesheet' type='text/css'>
		<link href='../js/bootstrap.js' rel='stylesheet' type='text/css'>
		<link href='../js/jquery.mobile.custom.min.js' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	</head>
	<body style="background-color: #D3D6D6; background-size: 100% 110%;">
		<?php
			if(isset($_SESSION['err'])){
		?>
		<p style=" color: red; ">
			<?php
				echo($_SESSION['err']);
			?>
		</p>
		<?php
			unset($_SESSION['err']);
		}
		?>
		<div class="login" align="center">
			<div class="login-header">
				<h1 style="padding-top:27%;color: black;">Login</h1>
			</div>
			<div class="login-form">
				<form action="con_Login.php" method="post">
					<h3 style="color: black;">Username:</h3>
					<input type="text" name="txtUserName"><br/>
					<h3 style="color: black;">Password:</h3>
					<input type="password" name="txtPassword"><br/>
					<br>
					<input type="submit" value="Login" class="btn btn-primary"/>
					<br>
				</form>
			</div>
		</div>
		
	</body>
</html>