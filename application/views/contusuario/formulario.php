<?php

$varAtributo = array('onsubmit' => 'return validarUsu();');
?>
<?= form_open("/contusuario/recibirdatos", $varAtributo) ?>



<?php
		$identificacion = array();
		$nombre = array();
		$apellidos = array();
		$ciudad = array();
		$barrio = array();
		$direccion = array();
		$telefono = array();
		$email = array();
		$password = array();
		$password2 = array();
?>

<div class="container">
		
			<h1>Formulario de inscripcion de usuarios</h1>
		
			<div class="form-group">

				<div class="form-group">
					<input type="text" class="form-control" name="identificacion" placeholder="Identificacion" required="yes"/> 
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="apellidos" placeholder="Apellido" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required="yes"/>
				</div>				
				<div class="form-group">				
					<input type="text" class="form-control" name="barrio" placeholder="Barrio" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="direccion" placeholder="Direccion" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="telefono" placeholder="Telefono" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="email" placeholder="Email" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Contrasena" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="password" class="form-control" name="password2" placeholder="Contrasena" required="yes"/>
				</div>				
			</div>
			<input type="submit" class="btn btn-default value="Enviar"/>
			<?= form_close() ?>	
		
		</div>
	</div>
	
	</body>
</html>