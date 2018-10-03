<?php 
error_reporting(0);

include_once('conexao.php');

		$iwquery = $bd->query("SELECT 
			SAB.id,
			FAB.nome AS fabricante_nome,
			SAB.sabor,
			SAB.preco_sugerido,
			SAB.created,
			SAB.updated
			FROM sabores SAB 
			INNER JOIN fabricantes FAB ON FAB.id = SAB.fabricante_id");
		foreach($iwquery as $key=>$iw){
			$arrayIn[$key] = array(
			str_pad($iw["id"],4,'0',STR_PAD_LEFT),
			$iw["fabricante_nome"],
			$iw["sabor"],
			$iw["preco_sugerido"],
			date('d/m/Y', strtotime($iw["created"])),
			date('d/m/Y', strtotime($iw["updated"]))
			);			
		}
		
		echo json_encode(array("data" => $arrayIn));