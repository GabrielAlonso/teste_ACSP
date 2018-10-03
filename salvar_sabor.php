<?php

include_once('conexao.php');

$qlCont = "INSERT INTO sabores(fabricante_id, sabor, preco_sugerido, created)VALUES(:fabricante_id, :sabor, :preco_sugerido, :created)";

$stmt = $bd->prepare($qlCont);                                       
$stmt->bindParam(':fabricante_id', $_POST['fabricante'], PDO::PARAM_STR);
$stmt->bindParam(':sabor', $_POST['sabor'], PDO::PARAM_STR);
$stmt->bindParam(':preco_sugerido', $_POST['preco'], PDO::PARAM_STR);
$stmt->bindParam(':created', date('Y-m-d H:i:s'), PDO::PARAM_STR);

$stmt->execute();

header('Location: index.php');
?>