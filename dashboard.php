<?php
	session_start();
	if(isset($_GET['logout'])){
	$email = $_SESSION["email"];
	$password= $_SESSION["password"];
	echo $email.'<br>'.$password;
}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Deshboard</title>
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div class="container">
				<h1 class="h3 mb-3">Deshboard</h1>
				<nav>
				
				</nav>
			</div>
		</header>
		
		<main>
		</main>
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6"><p>&copy; 2020-2021</p></div>
					<div class="col-sm-6">
						<a class="Register" href="checked.php?id=logout">Logout </a>
						<a class="Register" href="signup.php" name="btnSubmit">Sign Up ?</a>
					</div>
				</div>				
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	</body>
</html>