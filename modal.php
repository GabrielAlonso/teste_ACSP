<div id="myModal" class="modal fade" role="dialog" style="z-index:99999;" >
  <div class="modal-dialog modal-lg" style="width: 60%;height:700px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h2 style="float:left;">Sorvete</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
	  
	  <form id="demand_new" name="demand_new" action="salvar_sabor.php" method="post">
	   
      <div class="modal-body" style="height:300px;">	
	
		<div class="col-xs-12">

		
			<div class="col-xs-6">			
			<label for="input-@gray-base">Fabricante</label>				
			    <?php
				    $fabr = $bd->query("SELECT * FROM fabricantes");
				    echo '<select class="form-control" id="fabricante" name="fabricante" data-var="@gray-base">';
				    foreach($fabr as $fb){
				      echo '<option value="'.$fb["id"].'">'.$fb["nome"].'</option>'; 
				    }
				    echo '</select>';
			    ?>
			</div>
			
			<div class="col-xs-6">			
			<label for="input-@gray-base">Sabor</label>
				<input class="form-control" type="text" id="sabor" name="sabor" data-var="@gray-base">
			</div>

			<div class="col-xs-6">			
			<label for="input-@gray-base">Preço</label>
				<input class="form-control" type="text" id="preco" name="preco" data-var="@gray-base">
			</div>
		  	
		</div>			
		
      </div>


	  
	  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		<input type="submit" class="btn btn-success" id="bt-add-demand" name="bt-add-demand" value="Salvar Sabor">
      </div>
	  
	  </form>

    </div>

  </div>
</div>