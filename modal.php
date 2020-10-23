<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 15 : Membuat Modal dengan Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
</head>
<body>
   <div class="container">		
	<center><h1>CLIENT</h1></center>
	<br/>
	<!-- Tombol untuk menampilkan modal-->
	<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Klik Disini Untuk Melihat</button>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
					<h4 class="modal-title">Client Kami</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
					<p>bagian body modal.</p>
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>
   </div>
</body>
</html>