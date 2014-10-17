<?php 

	session_start();
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	$con = mysqli_connect('localhost','root','','mydb');
    
	$sql = "select * from usuarios where idusuarios='$user' and contrasena='$pass' and admin=1";
    
	$query = mysqli_query($con,$sql);
    
	$numrows = mysqli_num_rows($query);
	
	if($numrows!=0){
		$_SESSION['admin'] = $user;
		header('Location: index.php');
	} else{
		
    
		$sql2 = "select * from usuarios where idusuarios='$user' and contrasena='$pass' and admin=0";
    
		$query2 = mysqli_query($con,$sql2);
    
		$numrows2 = mysqli_num_rows($query2);
		
		$_SESSION['user'] = $user;
		
		if($numrows2 !=0){
			$_SESSION['user'] = $user;
			header('Location: index.php');
		}
		
		}



?>