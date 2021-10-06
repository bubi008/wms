<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	
</head>
<body>
	<div class="row">
		<div class="col text-center">
			<h3 align="center" class="h3 text-dark"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<table class="table table-borderless">
            <tr>
										<td><strong>Nomor Nota Pengeluaran</strong></td>
										<td>:</td>
										<td><?= $pengeluaran->nomor ?></td>
									</tr>
									<tr>
										<td><strong>Tanggal Nota</strong></td>
										<td>:</td>
										<td><?= $pengeluaran->tanggal ?> </td>
									</tr>
									<tr>
										<td><strong>Jenis</strong></td>
										<td>:</td>
										<td><?= $pengeluaran->jenis_pengeluaran ?> </td>
									</tr>
								</table>
							</div>

						</div>
						<hr>
						<div>Dikeluarkan uang sejumlah Rp<?= number_format($pengeluaran->nominal, 0, ',', '.') ?> pada nomor rekening xxxx tanggal <?= $pengeluaran->tanggal ?> dengan rincian sebagai berikut: </div>
						<hr>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-bordered">
									<thead>
										<tr>
											<td><strong>No</strong></td>
											<td><strong>Nomor Nota Penerimaan</strong></td>
											<td><strong>Tanggal Penerimaan</strong></td>
											<td><strong>Uraian</strong></td>
											<td><strong>Nominal</strong></td>
											<td><strong>Rekening Tujuan</strong></td>


										</tr>
									</thead>
									<tbody>
										<?php foreach ($all_detail_pengeluaran as $detail_pengeluaran): ?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $detail_pengeluaran->nota_penerimaan_id ?></td>
												<td><?= $detail_pengeluaran->tanggal_penerimaan ?></td>
												<td><?= $detail_pengeluaran->uraian ?></td>
												<td>Rp <?= number_format($detail_pengeluaran->nominal_pengeluaran, 0, ',', '.') ?></td>
												<td><?= $detail_pengeluaran->rekening_tujuan ?></td>


											</tr>
										<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="4" align="right"><strong>Total : </strong></td>
						<td>Rp <?= number_format($pengeluaran->nominal, 0, ',', '.') ?></td>
					</tr>
				</tfoot>
			</table>
		</div>
		<div>
			<br>
			<br>
			<style>
table, td, th {
  border: 0;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 200px;
}
</style>
</head>
<body>



<table>
  <tr>
    <th>Verifikator</th>
    <th></th>
    <th>Kepala Seksi Hukum dan Informasi</th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td align="center">Andi Jacob</td>
    <td></td>
    <td align="center">Martin De Miral</td>
  </tr>
</table>
</body>
</html>