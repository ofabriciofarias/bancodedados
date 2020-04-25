<?php

//Excluir dado armazenado no banco de dados

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = :ID");

$id = 9;


$stmt->bindParam(":ID", $id);


$stmt->execute();

echo "Dados Apagados com Sucesso!";

?>