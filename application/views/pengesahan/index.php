<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
	

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('penerimaan') ?>">
				<!-- load Topbar -->


				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('pengesahan/export') ?>" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
						
					</div>
				</div>
				<hr>
				
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Penerimaan</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
								<thead>
									<tr>
										<td>Nomor Nota</td>
										<td>Tanggal</td>
										<td>Jenis Nota</td>
										<td>Nominal</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_penerimaan as $penerimaan): ?>
										<tr>
											<td><?= $penerimaan->nomor ?></td>
											<td><?= $penerimaan->tanggal_nota ?></td>
											<td><?= $penerimaan->jenis_nota ?></td>

											<td>Rp <?= number_format($penerimaan->nominal, 0, ',', '.') ?></td>
											<td>
												<a href="<?= base_url('pengesahan/detail/' . $penerimaan->nomor) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
												<form action="<?= base_url('pengesahan/update') ?>"  method="POST">
												<input type="text" name="tanggal_pengesahan" value="<?= date('Y-m-d') ?>" readonly class="form-control">
												<button type="submit" class="btn btn-outline-success"><i class="fa fa-save">Setuju</button>
											</form>	
											</td>
												
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>				
				</div>
				</div>
			</div>
			<!-- load footer -->
	
		</div>
	</div>


</body>

<script>

$('button[type="submit"]').on('click', function() {
				$('input[name="tanggal_pengesahan"]').prop('disabled', true)
			
</script>
</html>