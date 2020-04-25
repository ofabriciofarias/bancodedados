<?php

//Insert para cadastrar informações no banco de dados
//Conexão com o PDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

//Evitar colocar aspas simples para evitar ataques de sql injection
//O PDO vai identificar se é texto ou número ou etc.
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES(:LOGIN,:SENHA)");

//$stmt = $conn->prepare("INSERT INTO tb_usuario(deslogin, dessenha) VALUES('root3', '1234')");

$login = "usuario01";
$senha = "12345";

//Juntar o parametro com o dado
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);

$stmt->execute();


echo "<br>Cadastrado com Sucesso!";



?>