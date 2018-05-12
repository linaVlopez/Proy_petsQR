<?= form_open("/contmascota/recibirdatos") ?>

<?php
	//$idmascota = array();
	$nombre = array();
	$edad = array();
	$raza = array();
	$genero = array();
	$color = array();
	$iddueno = array();	
?>

	<div class="container">		
			<h1>Formulario de inscripcion de mascotas</h1>
		
			<div class="form-group">
								
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre de la mascota" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="date" class="form-control" name="edad" placeholder="Edad" required="yes"/>
				</div>				
				<div class="form-group">
					<input type="text" class="form-control" name="raza" placeholder="Raza del perro" required="yes"/>
				</div>
				<div class="form-group">
					<select class="form-control" name="genero" required="yes"/>						
					  	<option>Macho</option>
					  	<option>Hembra</option>					  
					</select>
				</div>
				<!--
				<div class="form-group">
					<input type="text" class="form-control" name="genero" placeholder="Genero de la mascota"/>
				</div>
				-->
				<div class="form-group">
					<input type="text" class="form-control" name="color" placeholder="Color de la mascota" required="yes"/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="iddueno" placeholder="Numero del Id del dueno" required="yes"/>
				</div>			
			</div>
			<input type="submit" class="btn btn-default value="Enviar"/>
			<?= form_close() ?>		
		</div>
	</div>






</body>
</html>