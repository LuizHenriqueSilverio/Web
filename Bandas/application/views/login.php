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
			<div id="loginadmin" class="col-md-12">
        		<div id="corpologin">
				<?php
					$atributos = array('name' => 'fazer_login', 'id' => 'fazer_login');
					echo form_open(base_url('fazer_login/login'), $atributos).
					form_label("Login: ","txt_usuario").br(). 
					form_input('txt_usuario').br(). 
					form_label("Senha: ","txt_senha").br(). 
					form_password('txt_senha').br().br().
					form_submit("btn_enviar", "Entrar").br().br().
					form_close();
				?>
        		</div>
    			</div>
    		</div>
	</body>
</html>
