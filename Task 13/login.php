<?php

session_start();

if (isset ($_POST['uname']) && isset($_POST['psw']) ) {
	$_SESSION['uname'] = 'uname';
	$_SESSION['psw'] = 'psw';
	header("location: dashboard.php");
}

print_r($_SESSION);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="login.php" method="post">
	  <div class="container">
	    <label for="uname"><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>

	    <button type="submit">Login</button>
	    <label>
	      <input type="checkbox" checked="checked" name="remember"> Remember me
	    </label>
	  </div>
	  <div class="container" style="background-color:#f1f1f1">
	    <button type="button" class="cancelbtn">Cancel</button>
	    <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>
</body>
</html>