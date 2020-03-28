<!Doctype html>
	<html>
		<head>
			<title>Connecting to a Database</title>		
		</head>
		<body>
			<?php
				$con = mysql_connect ('localhost','root','');
				$db = mysql_select_db('my_database');
				
				if($con){
					echo 'Connecté à la BD';
				}
				else {
					die('Erreur.');
				}
				if ($db){
					echo 'Base de données trouvée';
				}
				else {
					die ('Erreur. Base de donnéeS non trouvée');
				}
			?>
			
			<br/>
			<br/>
			
			<?php
				$query = mysql_query("select * FROM data");
				while($row = mysql_fetch_array($query)){
					$id = $row['id'];
					$name = $row['name'];
					echo $id . ': ' .$name . '<br/>';
				}
			?>
			
			
		</body>

	</html>
