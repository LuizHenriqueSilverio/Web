<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admnistração de Bandas</title>
		<?php
		echo link_tag("assets/js/jquery-ui.css");
		echo link_tag("assets/css/bootstrap.min.css");
		echo link_tag("assets/css/estilo.css");
		?>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.0.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-ui.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/datepicker-pt-BR.js'?>"></script>
        <style>
        </style>
	</head>
	<body>  
         <div class="row">
         <div id="menucadalt" class="col-md-6 col-md-offset-3">
        <div id="corpo1">
            <?php echo form_open('banco/inserir');
               echo anchor(base_url("administracao"),"Home").anchor(base_url("administracao/cadastrar"),"Cadastro").
               anchor(base_url('administracao/consultar'),"Consulta").anchor(base_url('administracao/gerenciar'),"Gerenciar").
               anchor(base_url("pdf/gerar_pdf"),"Gerar PDF").anchor(base_url("fazer_login/logout"),"Logout").br();
            ?>
            <h2 id="title">Cadastrar</h2>
        </div>
		<div id="corpoform">
			<form id="forms" method="post">
		    	<div class="form-group">
		        	<label for="text">Nome da Banda</label>
		        	<input type="text" class="form-control" name="banda" id="banda">
		        	<label for="text">Data</label>
		        	<input type="text"  class="form-control" name="data" id="data"/> 
		        	<label for="text">Quantidade de Integrantes</label>
		        	<input type="number" class="form-control" name="integrantes" id="integrantes">
		    	</div>
                <div id="botao">
			<button type="submit" class="btn btn-default">Cadastrar</button>
                </div>
			</form>
            <br>
			<script>
				$(function(){
					$("#data").datepicker();
				});
			</script>
            <?php echo form_close();?>
            </div>
            </div>
		</div>
	</div>     
	</body>
</html>
