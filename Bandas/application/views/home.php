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
        <div class="col-md-6 col-md-offset-3">
        <div id="corpohome">
		<div id="hh">
			<?php
    			echo anchor(base_url("administracao"),"Home");
			?>
		</div>
		<div id="hca">
			<?php
			echo anchor(base_url("administracao/cadastrar"),"Cadastro");
			?>
		</div>
		<div id="hco">
			<?php
            		echo anchor(base_url('administracao/consultar'),"Consulta");
			?>
		</div>
		<div id="hge">
			<?php
			echo anchor(base_url('administracao/gerenciar'),"Gerenciar");
			?>
		</div>
		<div id= "hpdf">
			<?php
            		echo anchor(base_url("pdf/gerar_pdf"),"Gerar PDF");
			?>
		</div>
		<div id="hlog">
			<?php
			echo anchor(base_url("fazer_login/logout"),"Logout");
			?>
		</div>
        </div>
        </div>
        </div>
	</body>
</html>
