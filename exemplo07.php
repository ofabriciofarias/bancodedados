<?php

//Transações em Banco de Dados
//Commit confirmar
//Rollback para cancelar

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$conn->beginTransaction();

//Ao invés do :ID e fazer o bind, pode mudar para ? e usar um array ao invés do bind.
$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE idusuario = ?");

$id = 4;

//Saí o bind e muda para o execute recebendo o array
//$stmt->bindParam(":ID", $id);
$stmt->execute(array($id));

//Cancela uma transação
$conn->rollback();

//Confirma uma transação
//$conn->commit();

//Vamos aprofundar no try catch

echo "Dados Apagados com Sucesso!";

?>