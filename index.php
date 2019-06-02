<?php session_start();?>
<?php error_reporting(E_ALL);?>
<?php ini_set("display_errors", 1);?>

<!DOCTYPE html>
<html>
<head>
	<title>Fitness & Awareness Web Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php include "includes/db.php";?>
<body>
	<div class="header">
		<nav>
			<a class="logo" href="index.php"><img src="images/logo1.png"/></a>
			<ul class="main-nav">
				<li><a href="contact.php">Contact</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
			</ul>
		</nav>
	</div>
<div class="img">
<img src="images/fitness.jpg" alt="Background image" border="3">
</div>
<div class="home-button">
<h2 style="color: white;">Keep Track with Fitness & Awareness Web Application </h2>
<h2 style="color: white;">The easiest way to keep fit</h2>
<br />
<a style="color:white; background-color:#3CB371;font-weight: bolder;" href="register.php">Register Today</a><!-- 
<a  class="login" href="login.php">Login</h4> -->
</div>
<div class="about">
<h1 style="color: black;">Reach your goals</h1>
<p>All through the vast majority of human history, the way our    bodies looked was controlled by our battle to survive, not by a cognisant decision to look a specific way. Not any longer. Today, we the way to shape our bodies as we see fit. So, the program is designed to improve your physique and help you build a body that actually worthy of history. Beside, this four week program will make you become more stronger, leaner, and more fit.</p>
<h1 style="color: black;"">Develop healthy diets</h1>
<p>All through the vast majority of human history, the way our    bodies looked was controlled by our battle to survive, not by a cognisant decision to look a specific way. Not any longer. Today, we the way to shape our bodies as we see fit. So, the program is designed to improve your physique and help you build a body that actually worthy of history. Beside, this four week program will make you become more stronger, leaner, and more fit. anim id est laborum.</p>
</div>
<footer>
<div class="footer">
<h2 style="color: darkgrey;">Get Social</h2>
<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
<a href="https://www.twitter.com/" class="fa fa-twitter"></a>
<a href="https://www.google.com/" class="fa fa-google"></a>
<p><small>Copyright&copy<?php echo date('Y');?></small></p>
</div>
</footer>

</body>
</html>