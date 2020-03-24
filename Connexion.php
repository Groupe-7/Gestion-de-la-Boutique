<?php 
$conn = mysqli_connect("localhost","root","","tbutilisateur");

if($conn)
	{
		echo "Connecté";
	}
		else
	{
		echo "Echec de connecxion"; 
	}
//https://waytolearnx.com/2020/01/formulaire-dauthentification-login-mot-de-passe-avec-php-et-mysql.html
?>
