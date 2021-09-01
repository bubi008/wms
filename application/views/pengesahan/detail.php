<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('pengesahan') ?>">
				<!-- load Topbar -->
				

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('pengesahan/export_detail/' . $penerimaan->nomor) ?>" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export</a>
						<a href="<?= base_url('pengesahan') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php elseif($this->session->flashdata('error')) : ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('error') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="card shadow">
					<div class="card-header"><strong>Nota Penerimaan - <?= $penerimaan->nomor ?></strong></div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<table class="table table-borderless">
									<tr>
										<td><strong>Nomor Nota Penerimaan</strong></td>
										<td>:</td>
										<td><?= $penerimaan->nomor ?></td>
									</tr>
									<tr>
										<td><strong>Tanggal Nota</strong></td>
										<td>:</td>
										<td><?= $penerimaan->tanggal_nota ?> </td>
									</tr>
									<tr>
										<td><strong>Jenis</strong></td>
										<td>:</td>
										<td><?= $penerimaan->jenis_nota ?> </td>
									</tr>
								</table>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<td><strong>No</strong></td>
											<td><strong>Idcsv</strong></td>
											<td><strong>Tanggal Rekening</strong></td>
											<td><strong>Uraian</strong></td>
											<td><strong>Nominal</strong></td>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($all_detail_penerimaan as $detail_penerimaan): ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $detail_penerimaan->bank_idcsv ?></td>
												<td><?= $detail_penerimaan->tanggal_idcsv ?></td>
												<td><?= $detail_penerimaan->uraian ?></td>
												<td>Rp <?= number_format($detail_penerimaan->nominal, 0, ',', '.') ?></td>


											</tr>
										<?php endforeach ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4" align="right"><strong>Total : </strong></td>
											<td>Rp <?= number_format($penerimaan->nominal, 0, ',', '.') ?></td>
										</tr>
									</tfoot>
								</table>
							</div>
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