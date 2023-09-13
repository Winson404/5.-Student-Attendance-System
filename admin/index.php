<!DOCTYPE html>
<?php
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location: home.php');
	}
?>
<html lang = "eng">
	<head>
		<title>Simple Attendance Record System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body style="background-color: #e6ffff;">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<a href="../index.php" class = "navbar-text pull-right" style="color: lightblue;">Student login</a>
					<p class = "navbar-text pull-right">Student Attendance System</p>
				</div>
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row">
				<div class="col-lg-3"></div>
				<div class = "col-lg-6" >
					<div class = "panel panel-primary">
						<div class = "panel-heading">
							<h5>Admin Login</h5>
						</div>
						<div class = "panel-body" >
							<img src="images/user.png" width="75" style="display: block;margin-right: auto;margin-left: auto;">
							<div id = "result"></div>
							<form enctype = "multipart/form-data"  style="padding: 0 40px;margin-bottom: 50px;">
								<br />
								<div id = "username_warning" class = "form-group text-center">
									<input type = "text" id = "username" class = "form-control text-center" placeholder="Enter username" />
									<label class = "control-label">Username</label>
								</div>
								<div id = "password_warning" class = "form-group text-center">
									<input type = "password" maxlength = "12" id = "password" class = "form-control text-center" placeholder="Enter password" />
									<label class = "control-label">Password</label>
								</div>
								<button type = "button" class = "btn btn-primary btn-block" id = "login_admin">Admin login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-primary" style="background-color: #b3d9ff;">
			<div class = "container-fluid">
				<label class = "pull-right" style="margin-top: 15px;">&copy; Student Attendance System 2022</label>
			</div>	
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>