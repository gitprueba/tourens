<html>
<head>
<title>TourEns</title>
</head>
<body>

<form action="login.php" method= "post">
Usuario <input type="text" name="user" required><br>
Password <input type="password" name="pass" required><br>
<input type="submit" value="Enviar">
</form><br>



<?php 

	session_start();
	
	if(isset($_SESSION['ses'])){
		
		$nombre = $_REQUEST['user'];
		echo 'Bienvenido '."<br>";
		echo '<a href="logout.php">Logout</a>';
	}

?>


</body>
</html>