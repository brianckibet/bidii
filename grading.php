<!DOCTYPE html>
<html>
<head>
	<title>Grading System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<br><br><br><br>
<h2>Grading System</h2>
<body style="background-color: #b8b894">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" style="font-family: URW-Chancery-L;">BIDII SCHOOL</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php">Login</a></li>
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="grading.php">Grading</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
		</div>
	</nav>
	<br><br><br>

	<div class="container">
		
		<form method="_GET">
			Maths:<br>
			<input class="form-control" type="text" name="mao" placeholder="Enter  score" required="">
			<br>
			English:<br>
			<input class="form-control" type="text" name="ngoso" placeholder="Enter score" required="">
			<br>
			Kiswahili:<br>
			<input class="form-control" type="text" name="swa" placeholder="Enter  score" required="">
			<br>
			Chemistry:<br>
			<input class="form-control" type="text" name="chem" placeholder="Enter  score" required="">
			<br>
			Physics:<br>
			<input class="form-control" type="text" name="phyc" placeholder="Enter  score" required="">
			<br>
			Computer:<br>
			<input class="form-control" type="text" name="comp" placeholder="Enter  score" required="">
			<br>
			<br>
			<br>
			<button class="btn-success" type="submit">SUBMIT</button>
			<button class="btn-danger" type="reset">RESET</button>
			<?php 
			$Maths=$_GET['mao'];
			$English=$_GET['ngoso'];
			$Kiswahili=$_GET['swa'];
			$Chemistry=$_GET['chem'];
			$Physics=$_GET['phyc'];
			$Computer=$_GET['comp'];

			$total=$Maths+$English+$Kiswahili+$Chemistry+$Physics+$Computer;
			$meanscore=$total/6;

			if (isset($_GET['grade']))	 {
			# code...

			$grade=$_GET['grade'];
		} 

		if ($meanscore>=90) {
		# code...
		echo "<strong>Scored A</strong>";

	} 
	elseif ($meanscore>=80) {
	# code...
	echo " <strong>Scored A-</strong>";
}

elseif ($meanscore>=70) {
# code...
echo "<strong>Scored B+</strong>";

}

elseif($meanscore>=60) {
# code...
echo "<strong>Scored grade B</strong>";

}

elseif($meanscore>=50) {
# code...

echo "<strong>Scored grade B-</strong>";

}

elseif ($meanscore>=40) {
# code...
echo "<strong>Scored grade C</strong>";
}



else {

# code...
echo "Pull up your socks";

}

?>



</form>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<fieldset>

		<div style="background-color: #000000; text-align: center;"><p style="color: white;">Copyright&copy; BRIANKIBET 2018-Student emobilis</p><br></div>



	</fieldset>

</body>
</html>