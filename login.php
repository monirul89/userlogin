<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
		<link type="text/css" rel="stylesheet" charset="UTF-8" href="css/style.css" />
	</head>
	<body>
		<div class="container">
			<div class="form-signin text-center">
				<form class="form-signin" method="POST" action="checked.php">
				
					<div class="login-box">
					
						<h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
						
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
							<a class="Register" href="signup.php" name="btnSubmit">Sign Up ?</a>
							<button class="btn" name="login-submit" type="submit" >Sign in</button>
						</div>
					</div>
					<p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
					
				</form>
			</div>
		</div>
	</body>
</html>