<?php

session_start();

if(!isset($_SESSION['username'])){
	echo "You are logged out";
	header('location:index1.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>BeFit</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="p5.js"></script>
    <script src="ml5.min.js"></script>
    <script src="p5.sound.min.js"></script>

</head>
<body>


	<section class="header">
			<style>
			body {
  					background-image:  url("banner.jpeg");
  					background-position: center;
					background-size: cover;
					position: relative;
				}
		</style>

		<nav>
			<a href="index.html"><img src="images/logo.jpeg"></a>
			<div class="nav-links">
				<ul>
					<li><a href="">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="yoga.html">YOGA</a></li>
					<li><a href="workout.html">WORKOUTS</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
					
				</ul>
			</div>


		</nav>

		<div class="text-box">
			<h1>BeFit - Your fitness companion</h1> <br>
			<h1>Welcome <?php echo $_SESSION['username'];?></h1> <br><br><br>
			<p>TE Project by -<br>
				Manoj Ayyappan<br>
				Tanvi Shetty<br>
				Aashish Nagpal<br>
				Gurudatt Gaonkar<br><br>
				Mentor - Prof. Richard Joesph
			</p>
		</div>

	</section>
</body>
</html>