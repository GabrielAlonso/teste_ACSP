<?php
//phpinfo();
error_reporting(1);
include_once('conexao.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    <script>

    function deletar(id_sabor){

      $.ajax({
        type: "get",
        url: "deletar_sabor.php?id="+id_sabor,
      });
    }


    </script>
  </head>
  <body>
  <?php
    include_once('modal.php');
    include_once('modalFabr.php');
    include_once('modalSab.php');
  ?>

    <div style="padding:20px;">
    <h2 style="text-align:center;">Teste ACSP - Gabriel Alonso</h2>

    <hr class="my-4">

      <button type="button" class="btn btn-success pull-right"  data-toggle="modal" data-target="#myModal">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Sabor
      </button>

      <button type="button" class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModalFabr">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Fabricante
      </button>
    <hr class="my-4">


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fabricante</th>
      <th scope="col">Sabor</th>
      <th scope="col">Preço</th>
      <th scope="col">Criado</th>
      <th scope="col">Alterado</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody id="subs_div">
    <?php
    $iwquery = $bd->query("SELECT 
      SAB.id,
      FAB.nome AS fabricante_nome,
      FAB.cnpj AS fabricante_cnpj,
      SAB.sabor,
      SAB.preco_sugerido,
      SAB.created,
      SAB.updated
      FROM sabores SAB 
      INNER JOIN fabricantes FAB ON FAB.id = SAB.fabricante_id");
    foreach($iwquery as $iw){
      echo '<tr>';
      echo '<td>'.str_pad($iw["id"],4,'0',STR_PAD_LEFT).'</td>';
      echo '<td>'.$iw["fabricante_nome"].' - '.$iw["fabricante_cnpj"].'</td>';
      echo '<td>'.$iw["sabor"].'</td>';
      echo '<td>'.$iw["preco_sugerido"].'</td>';
      echo '<td>'.date('d/m/Y H:i:s', strtotime($iw["created"])).'</td>';
      echo '<td>'.date('d/m/Y', strtotime($iw["updated"])).'</td>';
      echo '<td><a href="deletar_sabor.php?id='.$iw["id"].'" >X</a></td>';
      echo '</tr>';   
    }
    ?>
  </div>
  </tbody>
</table>


   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>