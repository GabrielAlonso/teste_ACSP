<?php

include_once('conexao.php');

$sqlEmployees = "DELETE FROM sabores WHERE id = :ApontId";
$stmtEmployees = $bd->prepare($sqlEmployees);
$stmtEmployees->bindParam(':ApontId', $_GET['id'], PDO::PARAM_STR);   
$stmtEmployees->execute();

header('Location: index.php');
?>