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

<div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>
		  Formulario de mascotas
		  </div>
        <div class="card-body">
			<!-- Aqui iria el contenido o tabla -->
			
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
			<input type="submit" class="btn btn-default value="Enviar"/>
			<?= form_close() ?>		
</div>
        <div class="card-footer small text-muted"> · </div>
      </div>
      
    </div>
    
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
	
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
	
	
    <!-- Bootstrap core JavaScript-->
    <script src="../static/vendor/jquery/jquery.min.js"></script>
    <script src="../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../staticvendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../static/vendor/chart.js/Chart.min.js"></script>
    <script src="../static/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../static/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../static/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../static/js/sb-admin-datatables.min.js"></script>
    <script src="../static/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
