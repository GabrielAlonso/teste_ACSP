<?php

include_once('conexao.php');

$qlCont = "INSERT INTO fabricantes(nome, cnpj, created)VALUES(:nome, :cnpj, :created)";

$stmt = $bd->prepare($qlCont);                                       
$stmt->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
$stmt->bindParam(':cnpj', $_POST['cnpj'], PDO::PARAM_STR);
$stmt->bindParam(':created', date('Y-m-d H:i:s'), PDO::PARAM_STR);

$stmt->execute();

header('Location: index.php');
?>