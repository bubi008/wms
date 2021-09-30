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
							<a href="<?= base_url('penerimaan') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
								<div class="card-body">
									<form action="<?= base_url('penerimaan/proses_tambah') ?>" id="form-tambah" method="POST">
										<h5>Jenis Transaksi</h5>
										<hr>
										<div class="form-row">
											<div class="form-group col-2">
												<label>Nomor Nota</label>
												<input type="text" name="nomor" value="<?= mt_rand(1, 10000) ?>" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Tanggal</label>
												<input type="text" name="tanggal_nota" value="<?= date('Y/m/d') ?>" readonly class="form-control">
											</div>
											<div class="form-group col-3">
												<label>Jenis</label>
												<label for="nama_jenis"></label>
												<select name="nama_jenis" id="nama_jenis" class="form-control">
													<option value="">Jenis</option>
													<?php foreach ($all_jenis as $jenis) : ?>
														<option value="<?= $jenis->nama_jenis ?>"><?= $jenis->nama_jenis ?></option>
													<?php endforeach ?>
												</select>
												</div>
											<div class="form-group col-2">
												<label>Kode Lelang</label>
												<input type="text" name="kode_lelang" value="" class="form-control">
											</div>
											<div>
												
											</div>
											</div>
											<style>
    											.box{
       												 color: #fff;
        											padding: 10px;
       												 display: none;
       													 margin-top: 10px;
   											 }
   												 .Pelunasan_Lelang{ background: #E7E1ED; }
											</style>
											 <div class="Pelunasan_Lelang box"><div class="row"> 
											
  											<div class="col-sm-6">
												  <label>Rincian Penerimaan Uang Hasil Lelang</label>
   												 <div class="card">
      											<div class="card-body">
												  <form action="lelang_rphl/input_data" method="post">
										
												<div class="form-group">
                        	   					 <input type="number" id="virtual_account_rphl" value="" class="form-control" placeholder="virtual_account_rphl"name="virtual_account">
                        						</div>
												<div class="form-group">
                        	   					 <input type="number" id="hasil_bersih" value="" class="form-control" placeholder="hasil_bersih"name="hasil_bersih">
                        						</div>
                       						 <div class="form-group">
                      							      <input type="number" id="bea_penjual" class="form-control" placeholder="Bea Lelang Penjual" name="bea_lelang_penjual">
                       							 </div>
													<div class="form-group">
                      							      <input type="number" id="pph_final" class="form-control" placeholder="PPh Final" name="pph_final">
                       							 </div>
                        						<div class="form-group mb-0">
                           				 <input type="number" id="pokok_lelang" class="form-control" placeholder="Pokok Lelang" readonly="">
									</div>
									<div class="form-group">
                      							      <input type="text" id="jumlah" class="form-control" placeholder="Bea Lelang Penjual">
                       							 </div>
													<div class="form-group">
                      							      <input type="text" id="jumlah" class="form-control" placeholder="PPh Final">
                       							 </div>
                        						<div class="form-group mb-0">
                           				 <input type="text" id="" class="form-control" placeholder="" readonly="">
									</div>
												</div>			
						
     										 </div>
										</div>
											</div>
										</div>
										<h5>Data Transaksi</h5>
										<hr>
										<div class="form-row">
											<div class="form-group col-15">
												<label for=uraian>Uraian</label>
												<select name="uraian" id="idcsv" class="form-control">
													<option value="">Pilih Transaksi Bank</option>
													<?php foreach ($all_bank as $bank) : ?>
														<option value="<?= $bank->uraian ?>"><?= $bank->uraian ?></option>
													<?php endforeach ?>
												</select>
											</div>
											
											<div class="form-group col-2">
												<label>Tanggal</label>
												<input type="text" name="tanggal" value="" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Nama</label>
												<input type="text" name="nama" value="" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Virtual Account</label>
												<input type="number" name="virtual_account" value="" class="form-control" readonly>
											</div>
											<div class="form-group col-2">
												<label>Nominal</label>
												<input type="number" name="nominal" value="" class="form-control" readonly>
											</div>
									
										<div class="form-group col-1">
												<label>idcsv</label>
												<input type="number" name="idcsv" value="" class="form-control" readonly min='1'>
											</div>
											<div class="form-group col-1">
												<label>Jumlah</label>
												<input type="number" name="jumlah" value="2" class="form-control" readonly min='2'>
											</div>
											<div class="form-group col-1">
												<label for="">&nbsp;</label>
												<button type="button" class="btn btn-success btn-block" id="tambah"><i class="fa fa-plus"></i></button>
											</div>
											<input type="hidden" name="transaksi" value="">
										
											</div>
										<div class="keranjang">
											<h5>Detail Nota Penerimaan</h5>
											<hr>
											<table class="table table-bordered" id="keranjang">
												<thead>
													<tr>
														<td width="10%">Uraian</td>
														<td width="10%">IdCSV</td>
														<td width="15%">Tanggal</td>
														<td width="15%">Nama</td>
														<td width="10%">Nominal</td>
														<td width="10%">Virtual Account</td>
														<td width="10%">Jumlah</td>
														<td width="15%">Aksi</td>
													</tr>
												</thead>
												<tbody>

												</tbody>
												<tfoot>
													<tr>
														<td colspan="4" align="right"><strong>Total : </strong></td>
														<td id="total"></td>

														<td>
															<input type="hidden" name="total_hidden" value="">
															<input type="hidden" name="max_hidden" value="">
															<button type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
														</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- load footer -->

<script src="<?= base_url('sb-admin') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('sb-admin') ?>/js/sb-admin-2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('tfoot').hide()

			$(document).keypress(function(event) {
				if (event.which == '13') {
					event.preventDefault();
				}
			})

			$('#idcsv').on('change', function() {

			if ($(this).val() == '') reset()
				else {
					const url_get_all_bank = $('#content').data('url') + '/get_all_bank'
					$.ajax({
						url: url_get_all_bank,
						type: 'POST',
						dataType: 'json',
						data: {
							uraian: $(this).val()
						},
						success: function(data) {
							$('input[name="uraian"]').val(data.uraian)
							$('input[name="tanggal"]').val(data.tanggal)
							$('input[name="nama"]').val(data.nama)
							$('input[name="virtual_account"]').val(data.virtual_account)
							$('input[name="nominal"]').val(data.nominal)
							$('input[name="idcsv"]').val(data.idcsv)
							$('input[name="kode_lelang"]').val(data.kode_lelang)
							$('input[name="max_hidden"]').val(data.stok)
							$('input[name="jumlah"]').val(2)
							$('button#tambah').prop('disabled', false)

							
							$('input[name="nominal"]').on('keydown keyup change blur', function() {
								$('input[name="jumlah"]').val($('input[name="nominal"]').val() * $('input[name="uraian"]').val())
												})
											}
					})
				}
			})

			$(document).on('click', '#tambah', function(e) {
				const url_keranjang_bank = $('#content').data('url') + '/keranjang_bank'
				const data_keranjang = {
					uraian: $('select[name="uraian"]').val(),
					idcsv: $('input[name="idcsv"]').val(),
					tanggal: $('input[name="tanggal"]').val(),
					nama: $('input[name="nama"]').val(),
					nominal: $('input[name="nominal"]').val(),
					virtual_account: $('input[name="virtual_account"]').val(),
					jumlah: $('input[name="jumlah"]').val(),

				}

				if (parseInt($('input[name="max_hidden"]').val()) <= parseInt(data_keranjang.jumlah)) {
					alert('data tidak tersedia! stok tersedia : ' + parseInt($('input[name="max_hidden"]').val()))
				} else {
					$.ajax({
						url: url_keranjang_bank,
						type: 'POST',
						data: data_keranjang,
						success: function(data) {
							if ($('select[name="uraian"]').val() == data_keranjang.uraian) $('option[value="' + data_keranjang.uraian + '"]').hide()
							reset()

							$('table#keranjang tbody').append(data)
							$('tfoot').show()

							$('#total').html('<strong>' + hitung_total() + '</strong>') + '</number>'
							$('input[name="total_hidden"]').val(hitung_total())
						}
					})
				}

			})


			$(document).on('click', '#tombol-hapus', function() {
				$(this).closest('.row-keranjang').remove()

				$('option[value="' + $(this).data('idcsv') + '"]').show()

				if ($('tbody').children().length == 0) $('tfoot').hide()
			})

			$('button[type="submit"]').on('click', function() {
				$('input[name="uraian"]').prop('disabled', true)
				$('select[name="tanggal"]').prop('disabled', true)
				$('input[name="nama]').prop('disabled', true)
				$('input[name="virtual_account"]').prop('disabled', true)
				$('input[name="nominal"]').prop('disabled', true)
				$('input[name="jumlah"]').prop('disabled', true)
			})

			function hitung_total() {
				let total = 0;
				$('.nominal').each(function() {
					total += parseInt($(this).text())
				})

				return total;
			}

			function reset() {
				$('#uraian').val('')
				$('input[name="tanggal"]').val('')
				$('input[name="nama"]').val('')
				$('input[name="virtual_account"]').val('')
				$('input[name="nominal"]').val('')
				$('input[name="jumlah"]').prop('readonly', true)
				$('button#tambah').prop('disabled', true)
			}
		})

    $(document).ready(function() {
        $("#hasil_bersih, #bea_penjual, #pph_final").keyup(function() {
            var hasil_bersih  = $("#hasil_bersih").val();
			console.log(hasil_bersih.toLocaleString());
            var bea_penjual = $("#bea_penjual").val();
			var pph_final = $("#pph_final").val();

            var pokok_lelang = parseInt(hasil_bersih) + parseInt(bea_penjual) + parseInt(pph_final);
            $("#pokok_lelang").val(pokok_lelang);
        });

		$("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
		
    })

	$('#virtual_account').on('change', function() {

if ($(this).val() == '') reset()
	else {
		const url_get_all_lelang_rphl = $('#content').data('url') + '/get_all_lelang_rphl'
		$.ajax({
			url: url_get_all_lelang_rphl,
			type: 'POST',
			dataType: 'json',
			data: {
				id: $(this).val()
			},
			success: function(data) {
				$('input[name="hasil_bersih"]').val(data.hasil_bersih)
				$('input[name="bea_lelang_penjual"]').val(data.bea_lelang_penjual)

				
		
											}
					})
				}
			})
    });

	</script>
</body>

</html>