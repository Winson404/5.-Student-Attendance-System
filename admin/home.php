<!DOCTYPE html>
<?php
	require_once 'validator.php';
	require_once 'account.php'; 
?>
<html lang = "eng">
	<head>
		<title>Simple Attendance Record System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" href = "css/bootstrap.css" />
	</head>
	<body style="background-color:#e6f2ff;">
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<p class = "navbar-text pull-right">Student Attendance System</p>
				</div>
				<ul class = "nav navbar-nav navbar-right">
					<li class = "dropdown">
						<a href = "#" class = "dropdown-toggle" data-toggle = "dropdown"><i class = "glyphicon glyphicon-user"></i> <?php echo htmlentities($admin_name)?> <b class = "caret"></b></a>
						<ul class = "dropdown-menu">
							<li><a href = "logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container-fluid" style = "margin-top:70px;">
			<ul class = "nav nav-pills">
				<li class = "active"><a href = "home.php"><span class = "glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
				<li class = "dropdown">
					<a class = "dropdown-toggle" data-toggle = "dropdown" href = "#"><span class = "glyphicon glyphicon-cog"></span> Accounts <span class = "caret"></span></a>
					<ul class = "dropdown-menu">
						<li><a href = "admin.php"><span class = "glyphicon glyphicon-user"></span> Admin</a></li>
						<li><a href = "student.php"><span class = "glyphicon glyphicon-user"></span> Student</a></li>
					</ul>
				</li>
				<li><a href = "record.php"><span class = "glyphicon glyphicon-book"></span> Attendance record</a></li>
			</ul>
			<br />
			<div class = "well col-lg-12" style="background-color: white;">

				<div class="row" style="display: flex;justify-content: space-around;" >
					<?php

						$sql = mysqli_query($conn, "SELECT admin_id FROM admin");
						$row = mysqli_num_rows($sql);

						$sql2 = mysqli_query($conn, "SELECT student_id FROM student");
						$row2 = mysqli_num_rows($sql2);
					 ?>
					<div class="col-lg-2 alert-info" style="padding:  40px 40px;">
						 <h3 class="text-center">Administrators</h3>
						 <h3 class="text-center"><b><?php echo $row; ?></b></h3>
					</div>
					<div class="col-lg-2 alert-info"style="padding: 40px;">
						<h3 class="text-center">Student</h3>
						<h3 class="text-center"><b><?php echo $row2; ?></b></h3>
					</div>
				</div>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-right" style="margin-top: 15px;">&copy; Student Attendance System 2022</label>
			</div>	
		</div>	
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	
</html>