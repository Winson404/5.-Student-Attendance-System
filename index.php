<!DOCTYPE html>
<html lang = "eng">
	<head>
		<meta charset = "utf-8" />
		<title>Simple Attendance Record System</title>
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css"/>

		<style>
				.row {
					display: flex;
					align-items: center;
					justify-content: center;
				}
		</style>

	</head>
	<body class = "alert-info" style=" background-color: #e6ffff;">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<a class = "navbar-text pull-right" href="admin/index.php" style="color: lightblue;">Admin login</a>
					
					<p class = "navbar-text pull-right">Student Attendance System</p>
				</div>
			</div>
		</nav>
		<div class = "container-fluid" >
			<div class="row " >
			<div class = "col-lg-4 well" style="margin-top: 150px; background-color: white;">
				<h2 class="text-center">Student Login</h2>
				<img src="admin/images/user.png" alt="" width="60" style="display: block; margin-left: auto;margin-right: auto;">
				<div id = "error" class="text-center"></div>
				<div id = "result" class="text-center" ></div>
				<br />
			
				<form enctype = "multipart/form-data" style="padding: 0 25px;">
					<div class = "form-group text-center">
						
						<input type = "text" id = "student" class = "form-control text-center" required = "required" placeholder="Enter Student ID" />
						<label style="margin-top: 10px;">Student ID</label>
						<br />
						<br />
						<button type = "button" id = "login" class = "btn btn-primary btn-block"><span class = "glyphicon glyphicon-login"></span>Login</button>
					</div>
					<br>
				</form>
			</div>
			</div>
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>