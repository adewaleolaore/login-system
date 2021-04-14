<?php
session_start();
	if (!empty ($_SESSION["userName"] )) {
		require_once './index.php';
	} else {
		require_once './login.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP File Login System</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
	
	</div>

</body>
</html>