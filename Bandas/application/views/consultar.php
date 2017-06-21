<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Administração de Bandas</title>
        	<?php
	    	echo link_tag("assets/css/bootstrap.min.css");
		echo link_tag("assets/css/estilo.css");
        	?>
        	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.0.min.js'?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
		</head>
	<body>
    <div class="row">
	    <div id="menucadalt" class="col-md-10 col-md-offset-1">
            <div id="corpo1">
                <?php
                      echo anchor(base_url("administracao"),"Home").anchor(base_url("administracao/cadastrar"),"Cadastro").
                      anchor(base_url('administracao/consultar'),"Consulta").anchor(base_url('administracao/gerenciar'),"Gerenciar").
                      anchor(base_url("pdf/gerar_pdf"),"Gerar PDF").anchor(base_url("fazer_login/logout"),"Logout").br();
                 ?>
            <h2 id="title">Consultar</h2>
            </div>
		<div id="corpoform">
		 <?php
	          foreach($bandas as $post){
	          echo  "Banda: ". $post->Nome." - "."Data de fundação: ".date("d/m/Y", strtotime($post->Data_Fundacao)). 
                  " - "." Número de integrantes: ".$post->Quant_Integrantes.br();
                  }
           	 ?>
		</div>
        </div>
    </div>
    </body>
</html>
