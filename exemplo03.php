<?php

//Conexão com o PDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuario ORDER BY deslogin");

$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($resultados);

echo "<br>";

foreach ($resultados as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" . $key . "</strong> " .  $value . "<br>"; 
	}

	echo "============================================================<br>";
}

?>