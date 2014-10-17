<?php 

	session_start();
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	$con = mysqli_connect('localhost','root','','mydb');
    
	$sql = "select * from usuarios where idusuarios='$user' and contrasena='$pass'";
    
	$query = mysqli_query($con,$sql);
    
	$numrows = mysqli_num_rows($query);
	
	if($numrows!=0){
		$_SESSION['ses'] = $user;
		header('Location: index.php');
	}



?>