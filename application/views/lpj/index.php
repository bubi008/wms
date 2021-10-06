<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
	

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('lpj') ?>">
				<!-- load Topbar -->
				<div class="container">
	<div class="row" style="margin-top: 50px;">
		<div class="col-md-12" style="margin-bottom: 20px">
		<form method="get" action="<?php echo base_url('lpj/index') ?>">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Filter Tanggal</label>
                        <div class="input-group">
                            <input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal" autocomplete="off">
                            <span class="input-group-addon"> s/d </span>
                            <input type="date" format="Y-m-d" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="filter" value="true" class="btn btn-primary">TAMPILKAN</button>
            <?php
            if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                echo '<a href="'.base_url('lpj/index').'" class="btn btn-default">RESET</a>';
            ?>
				  </div>
				</div>
			</div>
		</div>

		
					</div>
				
				</div>
				<hr>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<div class="card shadow">
					<div class="card-header"><strong>Buku Kas Umum (Detail)</strong></div>
					<div class="card-body">
						<div class="table-responsive">
							<table  class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
								<thead>
									<tr>
                                    

                                        </tr>
										<td>No</td>
										<td>Tanggal</td>
										<td>Nomor Bukti</td>
										<td>Uraian</td>
										<td>Debit</td>
										<td>Kredit</td>
										<td>Saldo</td>
									</tr>
								</thead >
								<tbody class="tbody">
									<?php 
									$no=1;
									foreach ($query3 as $row): ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $row->tanggal_nota;?></td>
											<td><?php echo $row->nota_penerimaan_id;?></td>
											<td><?php echo $row->jenis_penerimaan;?></td>
											<td class="receipt" name="payment" id ="payment" align="right"><?php echo $row->nominal;?></td>
											<td class="payment" name ="receipt" id ="receipt" align="right"><?php echo $row->nominal_lpj;?></td>
											<td class="balance" id="balance" align="right"></td>


										
										
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
</body>
<script>
	
	 $(document).ready(function() {
	var currentBalance = 0;
	$('table tbody tr').each(function() {             //Loop thru each row


  var payment = -$(this).find('.payment').text(); //Get the value of payment and make the value negative number
  var receipt = +$(this).find('.receipt').text(); //Get the value of receipt and make the value positive number

  currentBalance += payment + receipt;           //Just add the values

  $(this).find('.balance').text(currentBalance); //Update .balance

  });
})

</script>
</html>