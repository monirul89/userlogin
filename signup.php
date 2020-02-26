<?php 
	session_start();
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="container">
			<div class="form-signin text-center">
				<form class="form-signin" method="POST" action="checked.php">
				
					<div class="login-box">
						<h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
						
						<div class="form-group">
							<label for="fullName" class="sr-only">Your Name : </label>
							<input type="text" id="fullName" name="fullName" class="form-control"
								placeholder="Name" required>
						</div>
						
						<div class="form-group">
							<label for="email" class="sr-only">Email address : </label>
							<input type="email" id="email" name="email" class="form-control"
								placeholder="Email address" required>
						</div>
						
						<div class="form-group">
							<label for="password" class="sr-only">Password : </label>
							<input type="password" id="password" name="password" class="form-control"
								placeholder="Password" required>
						</div>
						
						<div class="form-group">
							<label for="confirmPassword" class="sr-only">Confirm Password : </label>
							<input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
								placeholder="Retype Password" required>
						</div>
						
						<div class="form-group">
							<a class="Register" href="login.php" name="btnSubmit">Sign in?</a>
							<button class="btn" name="login-submit" type="submit">Sign Up</button>					
						</div>
						
					</div>
					<p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
					
				</form>
			</div>
		</div>
	</body>
</html>