<?php

	$db = new PDO('mysql:host=localhost;'.'dbname=uber_tandil;charset=utf8', 'root', '');
	

	$query = $db->prepare("SELECT * FROM usuarios");
	$result = $query->execute();

	$usuarios = $query->fetchAll(PDO::FETCH_OBJ);

	foreach($usuarios as $usuario) {
		echo "id: " . $usuario->id . " ; nombre: " . $usuario->nombre;
echo "<br>";
	}
