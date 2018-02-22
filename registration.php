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
				<li><a href="index.php">Login</a></li>
				<li><a href="home.php" class="active">Home</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="grading.php">Grading</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact us</a></li>
			</ul>
		</div>
	</nav>

	<form action="#" name="StudentRegistration" method="GET">

		<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
		cellspacing="2">

		<tr>
			<td colspan=2>
				<center><font size=4><b>Student Registration Form</b></font></center>
			</td>
		</tr>
		<br>

		<tr>
			<td>Name</td>
			<td><input type=text name=textnames size="30"></td>
		</tr>
		<br>

		<tr>
			<td>Postal Address</td>
			<td><input type="text" name="paddress" size="30"></td>
		</tr>
		<br>

		<tr>
			<td>Personal Address</td>
			<td><input type="text" name="personaladdress" size="30"></td>
		</tr>
		<br>
		<tr>
			<td>Sex</td>
			<td><input type="radio" name="sex" value="male" size="10">Male
				<input type="radio" name="sex" value="Female" size="10">Female</td>
			</tr>
			<br>

			<tr>
				<td>City</td>
				<td><select name="City">
					<option value="-1" selected>select..</option>
					<option value="Nairobi">Nairobi</option>
					<option value="Mombasa">Mombasa</option>
					<option value="Kisumu">Kisumu</option>
					<option value="Wajir">Wajir</option>
				</select></td>
			</tr>
			<br>

			<tr>
				<td>Class</td>
				<td><input type="text" name="class" size="30"></td>

			</tr>
			<br>


			<tr>
				<td>Stream</td>
				<td><input type="text" name="stream" size="30"></td>

			</tr>
			<br>
			<tr>
				<td>EmailId</td>
				<td><input type="text" name="emailid" size="30"></td>
			</tr>
			<br>

			<tr>
				<td>DOB</td>
				<td><input type="text" name="dob" size="30"></td>
			</tr>
			<br>

			<tr>
				<td>MobileNo</td>
				<td><input type="text" name="mobileno" size="30"></td>
			</tr>
			<br>
			<tr>
				<td><input type="reset"></td>
				<td colspan="2"><input type="submit" value="Submit Form" /></td>
			</tr>
		</table>
	</form>
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