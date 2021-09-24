<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
	

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pengeluaran') ?>">
				<!-- load Topbar -->


				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('pengeluaran/export') ?>" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
						<a href="<?= base_url('pengeluaran/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah</a>
					</div>
				</div>
				<hr>
				
				<div class="card shadow">
					<div class="card-header"><strong>Daftar Pengeluaran</strong></div>
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
									<?php foreach ($all_pengeluaran as $pengeluaran): ?>
										<tr>
											<td><?= $pengeluaran->id ?></td>
											<td><?= $pengeluaran->nomor ?></td>
											<td><?= $pengeluaran->tanggal ?></td>

											<td>Rp <?= number_format($pengeluaran->nominal, 0, ',', '.') ?></td>
											<td>
												<a href="<?= base_url('pengeluaran/detail/' . $pengeluaran->nomor) ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
												<a onclick="return confirm('apakah anda yakin?')" href="<?= base_url('pengeluaran/hapus/' . $penerimaan->nomor) ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
</html>