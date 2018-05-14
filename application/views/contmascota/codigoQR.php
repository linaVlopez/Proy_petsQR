<?= form_open("/contgeneracionqr/generarcodigoQR") ?>



		
<div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i>
		  Generar codigo QR
		  </div>
        <div class="card-body">

								
				<div class="form-group">
					<input type="text" class="form-control" name="nombre" placeholder="Nombre de la mascota" required="yes"/>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="iddueno" placeholder="Numero del Id del dueno" required="yes"/>
				</div>			
				<input type="submit" class="btn btn-default value="Generar"/>
				<?= form_close() ?>
</div>
        <div class="card-footer small text-muted"> <?php $Mensaje ?> </div>
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
	<script src="../static/js/ValidarUsuario.js"></script>
  </div>
</body>

</html>
				