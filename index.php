<html>
<head>
<title>TourEns</title>
</head>
<body>
<?php 

	session_start();
	
	if(isset($_SESSION['admin'])){
		
		//$nombre = $_REQUEST['user'];
		echo 'Bienvenido '."<br><br>";
		echo '<a href="admin.php">Admin</a><br><br>';
		echo '<a href="logout.php">Logout</a><br>';
	} else{
		echo '<form action="login.php" method= "post">
			  Usuario <input type="text" name="user" required><br>
			  Password <input type="password" name="pass" required><br>
			  <input type="submit" value="Enviar">
			  </form><br>';
	}
	
	if(isset($_SESSION['user'])){
		echo 'Bienvenido';
	
	}
	
	echo '<br>Tours: <br>';
	$con = mysqli_connect('localhost','root','','mydb');
	$sql = mysqli_query($con,'select nombre, precio from tour');
	
	echo "<table border=1>";

	echo "<tr><th> Tour <th> precio";

   while($celda = mysqli_fetch_row($sql)){

    echo "<tr><td> $celda[0] <td> $celda[1]";
   }
 
	echo "</table>";
	
	

?>






</body>
</html>