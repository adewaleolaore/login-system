<?php
	if( isset($_POST['submit'])) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		$file = file_get_contents("files/usertable.json");
		$users_array = json_decode($file, true);
		var_dump($users_array);
		
		/* if ($users_array['username'] = $username ) {
			session_start();
			
			$username = $_POST['username'];
		}
		
		header("Location: ./index.php");
    	exit(); */

	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP File Login System -  Login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrapper">
		<h1>Login</h1>
		<form action="" method="post">
			<input type="text" name="username" placeholder="Username"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="submit" name="submit" value="Login &raquo;" class="btn"> <br><br>
			<a href="register.php">Register</a> | <a href="passwordreset.php">Reset password</a>
		</form>
	</div>
	
</body>
</html>