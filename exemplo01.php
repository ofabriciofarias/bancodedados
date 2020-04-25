<?php

//conexão com o banco de dados
$conn  = new mysqli("localhost", "root", "root", "dbphp7");

//tratamento de erro na conexão com o banco
if($conn->connect_error){
		echo "Error:   " . $conn->connect_error;
		exit;
}

//Envio de dados para o banco usando o Insert
//$stmt = statement
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (?,?)");


//Informando que são duas strings, s e s.
$stmt->bind_param("ss", $login, $senha);


//Por vir depois, pois é o execute que verifica o que vai ser enviado ao banco.
$login = "user";
$senha = "12345";


//Método que executa e envia para o banco.
$stmt->execute();


$login = "root";
$senha = "54321";

$stmt->execute();

?>