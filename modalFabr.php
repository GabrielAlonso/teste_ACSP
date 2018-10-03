<div id="myModalFabr" class="modal fade" role="dialog" style="z-index:99999;" >
  <div class="modal-dialog modal-lg" style="width: 60%;height:700px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	 <h2 style="float:left;">Fabricante</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
	  
	  <form id="demand_new" name="demand_new" action="salvar_fabricante.php" method="post">
	   
      <div class="modal-body" style="height:200px;">
      
	
		<div class="col-xs-12">

			</div>
			
			<div class="col-xs-6">			
			<label for="input-@gray-base">Nome Fabricante</label>
				<input class="form-control" type="text" id="nome" name="nome" data-var="@gray-base">
			</div>

			<div class="col-xs-6">			
			<label for="input-@gray-base">CNPJ</label>
				<input class="form-control" type="text" id="cnpj" name="cnpj" data-var="@gray-base">
			</div>
		  	
		</div>			
		


	  
	  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
		<input type="submit" class="btn btn-success" id="bt-add-demand" name="bt-add-demand" value="Salvar Fabricante">
      </div>
	  
	  </form>

    </div>

  </div>
</div>