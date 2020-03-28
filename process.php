<?php

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	
	$username = stripcslashes($user);
	$password = stripcslashes($pass);
	$user = mysql_real_escape_string($user);
	$user = mysql_real_escape_string($pass);


	mysql_connect("localhost","root","");
	mysql_select_db("login");
	
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'") 
		or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password)	{
		echo"login success, Welcome " .$row['username'];
		}
		else{
		echo"Faild to login !";
		}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		
		<link rel="stylesheet" href="style_process.css">
	</head>
	<body>
		
		
	</body>
</html>
