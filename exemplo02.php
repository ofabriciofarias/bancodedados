<?php

//conexão com o banco de dados
$conn  = new mysqli("localhost", "root", "root", "dbphp7");

//tratamento de erro na conexão com o banco
if($conn->connect_error){
		echo "Error:   " . $conn->connect_error;
		exit;
}

$resultado = $conn->query("SELECT * FROM tb_usuario ORDER BY deslogin");

//Enquanto houver dado na linha, armazena em row e apresenta.
//Quando não tem mais end of file (EOF)
//MYSQLI_ASSOC traz só os nomes associativos

//Para converter para json
$data = array();

while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
	//Adiciono os elementos em meu array data
	array_push($data, $row);
	//var_dump($row);

}
//echo "<br>";
echo json_encode($data);


?>