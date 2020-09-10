<!DOCTYPE html>
<html>
<head>
	<title>Login Page - Fee Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body translate="no">




	<div class="wrapper">

		<form class="form-signin" action="login_check.php" method="POST">
            <Div id="login_result"></Div>
			<h2 class="form-signin-heading"> Please Login </h2>
			<input type="text" name="email" placeholder="Enter Your Email" class="form-control" id="email" required \>
			<input type="password" name="password" placeholder="Enter Your Password"  class="form-control" id="password" required \>
			<label class="checkbox">
			<input type="checkbox" name="remember Me"> Remember Me
			</label>

			<input type="button" name="submit" value="Login" class="btn btn-success" id="login-btn">

		</form>

	</div>		


    <script src="js/main.js"></script>

</body>
</html>