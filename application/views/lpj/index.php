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


		
					</div>
				
				</div>
				<hr>
				
				<div class="card shadow">
					<div class="card-header"><strong>Buku Kas Umum</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
								<thead>
									<tr>
                                    

                                        </tr>
										<td>No</td>
										<td>Tanggal</td>
										<td>Nomor Penerimaan</td>
										<td>Nomor Pengeluaran</td>
										<td>Debit</td>
										<td>Kredit</td>
										<td>Saldo</td>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no=1;
									foreach ($master_transaksi as $row): ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->tanggal_nota;?></td>
											<td><?php echo $row->nota_penerimaan_id;?></td>
											<td></td>
											<td><?php echo $row->nominal;?></td>



										
										
											<td>
											
											</td>
										</tr>
									<?php endforeach ?>
										<td></td>
										<td></td>
										<td></td>
										<td><?php echo $row->nota_pengeluaran_id;?></td>
										<td></td>
									<td><?php echo $row->nominal;?></td>
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