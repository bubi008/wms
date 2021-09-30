<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<link href="" rel="stylesheet">
</head>

<body>
	<div class="row">
		<div class="col text-center">
			<h3 class="h3 text-dark"><?= $title ?></h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<td>Nomor Nota</td>
					<td>Tanggal</td>
					<td>Jenis</td>
					<td>Nominal</td>
					<td>Total</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($all_pengeluaran as $pengeluaran) : ?>
					<tr>
						<td><?= $pengeluaran->nomor ?></td>
						<td><?= $pengeluaran->tanggal_nota ?></td>
						<td><?= $pengeluaran->jenis_nota ?></td>
						<td>Rp <?= number_format($pengeluaran->nominal, 0, ',', '.') ?></td>
				
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>

</html>