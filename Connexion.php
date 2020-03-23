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

?>