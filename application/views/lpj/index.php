<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
	

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('lpj') ?>">
				<!-- load Topbar -->


		
					</div>
				
				</div>
				<hr>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<div class="card shadow">
					<div class="card-header"><strong>Buku Kas Umum</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table  class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
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
								</thead >
								<tbody class="tbody">
									<?php 
									$no=1;
									foreach ($query as $row): ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->tanggal_nota;?></td>
											<td><?php echo $row->nota_penerimaan_id;?></td>
											<td><?php echo $row->pengeluaran_lpj;?></td>
											<td class="payment" name="payment" id ="payment" align="right"><?php echo number_format($row->nominal, 0, ',', '.');?></td>
											<td class="receipt" name ="receipt" id ="receipt" align="right"><?php echo number_format($row->nominal_lpj, 0, ',', '.');?></td>
											<td class="balance" id="balance"></td>


										
										
											<td>
											
											</td>
										</tr>
									<?php endforeach ?>
										<td></td>
										<td></td>
										<td></td>
										
										<td></td>
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
	var currentBalance = 0;
	$('table tbody tr').each(function() {             //Loop thru each row

  var payment = -$(this).find('.payment').text(); //Get the value of payment and make the value negative number
  var receipt = +$(this).find('.receipt').text(); //Get the value of receipt and make the value positive number

  currentBalance += payment + receipt;           //Just add the values

  $(this).find('.balance').text(currentBalance); //Update .balance

  });

</script>
</html>