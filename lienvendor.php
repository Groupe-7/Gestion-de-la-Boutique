<?php
	try{
		$pdo = new PDO('mysql:dbname=vendor; host=localhost', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}catch (Exception $e){


		$pdo = new PDO('mysql: host=localhost', 'root', '');
		$req = 'CREATE DATABASE vendor';
		$pdo->query($req);

		$pdo = new PDO('mysql:dbname=calendar; host=localhost', 'root', '');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		echo '
			<H1>Bienvenue</H1><br>
			<p>Veillez Cliquer <a href="vendor/index.php">ici</a> pour installer</p>
		';
		die();
	}
	?>
