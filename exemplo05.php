<?php

//Alterando arquivo armazenado no banco de dados

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuario SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

$id = 2;
$login = "NovoLogin";
$senha = "123";

$stmt->bindParam(":ID", $id);
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);


$stmt->execute();

echo "Dados Alterados com Sucesso!";

?>