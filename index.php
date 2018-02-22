<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #b8b894">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand" style="font-family: URW-Chancery-L;">BIDII SCHOOL</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="" class="active">Home</a></li>
			<li><a href="">About Us</a></li>
			<li><a href="">Contact us</a></li>
		</ul>
		</div>
	</nav>
	<br><br><br>

	<div class="container-fluid">
	<form action="home.php" method="POST" style="text-align: center;">
		<label>Name</label><span class="glyphicon glyphicon-user"></span><br><input type="text" name="name" placeholder="enter your name"><br><br>
		<label>Admission number</label><br><input type="text" name="adm" placeholder="enter your adm number"><br><br>
		<label><input type="checkbox" name="remember">Remember me</label><br>
		<input class="btn-success" type="submit" name="submition"> <button class="btn-danger">Resend</button>
		
	</form>
	</div>

</body>
</html>