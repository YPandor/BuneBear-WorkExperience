<?php 
	session_start();

	if(isset($_SESSION)) {
		echo "Congratulations! You are successfully logged in.";
	}

	print_r($_SESSION);	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>Welcome to Dashboard</h1>

</body>
</html>
