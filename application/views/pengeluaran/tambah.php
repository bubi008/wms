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
							<a href="<?= base_url('pengeluaran') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Pengeluaran Dibawah Ini!</strong></div>
								<div class="card-body">
									<form action="<?= base_url('pengeluaran/proses_tambah') ?>" id="form-tambah" method="POST">
										<h5>Jenis Transaksi</h5>
										<hr>
										<div class="form-row">
											<div class="form-group col-2">
												<label>Nomor Nota</label>
												<input type="text" name="nomor" value="<?= mt_rand(1, 10000) ?>" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Tanggal</label>
												<input type="text" name="tanggal" value="<?= date('Y/m/d') ?>" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Jenis</label>
												<label for="jenis_pengeluaran"></label>
												<select name="nama_jenis" id="nama_jenis" class="form-control">
													<option value="">Jenis</option>
													<?php foreach ($all_jenis as $jenis) : ?>
														<option value="<?= $jenis->nama_jenis ?>"><?= $jenis->nama_jenis ?></option>
													<?php endforeach ?>
												</select>
											
											</div>
										</div>
										<h5>Data Transaksi</h5>
										<hr>
										<div class="form-row">
											<div class="form-group col-3">
												<label for=uraian>Uraian</label>
												<select name="uraian" id="id_master" class="form-control">
													<option value="">Pilih Transaksi Penerimaan</option>
													<?php foreach ($all_master_penerimaan as $master) : ?>
														<option value="<?= $master->uraian ?>"><?= $master->uraian ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group col-2">
												<label>Id Master Penerimaan</label>
												<input type="text" name="id_master" value="" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Tgl Nota Penerimaan</label>
												<input type="text" name="tanggal_nota" value="" readonly class="form-control">
											</div>
											<div class="form-group col-2">
												<label>Nominal</label>
												<input type="number" name="nominal" value="" data-a-sign="Rp. " data-a-dec="," data-a-sep="." class="form-control" readonly>
											</div>
											<div class="form-group col-1">
												<label for="">&nbsp;</label>
												<button type="button" class="btn btn-success btn-block" id="tambah"><i class="fa fa-plus"></i></button>
											</div>
											<input type="hidden" name="transaksi" value="">
										</div>
										<div class="form-row">
										<div class="form-group col-1">
												<label>Nomor NP</label>
												<input type="text"  name="nota_penerimaan_id" value="" class="form-control" readonly>
													</div>
										<div class="form-group col-3">
												<label>Jenis Penerimaan</label>
												<input type="text"  name="jenis_penerimaan" value="" class="form-control" readonly>
											</div>
										<div class="form-group col-3">
												<label>Rekening Tujuan</label>
												<input type="text"  name="rek_tujuan" value="" class="form-control" >
												</div>
										<div class="form-group col-1">
												<label>Jumlah</label>
												<input type="text"  name="jumlah_pengeluaran" value="" class="form-control" readonly>

											</div>
											</div>
										<div class="keranjang">
											<h5>Detail Nota Pengeluaran</h5>
											<hr>
											<table class="table table-bordered" id="keranjang">
												<thead>
													<tr>
													<td width="10%">Uraian</td>	
													<td width="15%">Tanggal_Nota</td>
													<td width="10%">Nomor Nota Penerimaan</td>
													<td width="10%">Jenis Nota Penerimaan</td>
													<td width="15%">Nominal</td>
													<td width="10%">Rekening Tujuan</td>

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
<script src="<?= base_url('sb-admin') ?>/js/autoNumeric.js"></script>

	<script>
		$(document).ready(function() {
			$('tfoot').hide()

			$(document).keypress(function(event) {
				if (event.which == '13') {
					event.preventDefault();
				}
			})

			$('#id_master').on('change', function() {

			if ($(this).val() == '') reset()
				else {
					const url_get_all_master_penerimaan = $('#content').data('url') + '/get_all_master_penerimaan'
					$.ajax({
						url: url_get_all_master_penerimaan,
						type: 'POST',
						dataType: 'json',
						data: {
							uraian: $(this).val()
						},
						success: function(data) {
							$('input[name="uraian"]').val(data.uraian)
							$('input[name="id_master"]').val(data.id_master)
							$('input[name="tanggal_nota"]').val(data.tanggal_nota)
							$('input[name="nota_penerimaan_id"]').val(data.nota_penerimaan_id)
							$('input[name="nominal"]').val(data.nominal)
							$('input[name="jenis_penerimaan"]').val(data.jenis_penerimaan)
							$('input[name="jumlah_pengeluaran"]').val(1)
							$('input[name="max_hidden"]').val(data.jumlah_transaksi)



							$('button#tambah').prop('disabled', false)

						
							$('input[name="nominal"]').on('keydown keyup change blur', function() {
								$('input[name="jumlah_pengeluaran"]').val($('input[name="nominal"]').val() * $('input[name="uraian"]').val())
												})
											}
					})
				}
			})

			$(document).on('click', '#tambah', function(e) {
				const url_keranjang_transaksi = $('#content').data('url') + '/keranjang_transaksi'
				const data_keranjang = {
					uraian: $('select[name="uraian"]').val(),
					id_master: $('input[name="id_master"]').val(),
					tanggal_nota: $('input[name="tanggal_nota"]').val(),
					jenis_penerimaan: $('input[name="jenis_penerimaan"]').val(),
					nota_penerimaan_id: $('input[name="nota_penerimaan_id"]').val(),
					nominal: $('input[name="nominal"]').val(),
					jumlah_pengeluaran: $('input[name="jumlah_pengeluaran"]').val(),
					rek_tujuan: $('input[name="rek_tujuan"]').val(),

				}

				if (parseInt($('input[name="max_hidden"]').val()) <= parseInt(data_keranjang.jumlah)) {
					alert('data tidak tersedia! stok tersedia : ' + parseInt($('input[name="max_hidden"]').val()))
				} else {
					$.ajax({
						url: url_keranjang_transaksi,
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
				$('select[name="tanggal_nota"]').prop('disabled', true)
				$('input[name="nota_penerimaan_id]').prop('disabled', true)
				$('input[name="jenis_penerimaan]').prop('disabled', true)
				$('input[name="virtual_account"]').prop('disabled', true)
				$('input[name="nominal"]').prop('disabled', true)
				$('input[name="jumlah_pengeluaran"]').prop('disabled', true)
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
				$('input[name="tanggal_nota"]').val('')
				$('input[name="jenis_penerimaan"]').val('')
				$('input[name="virtual_account"]').val('')
				$('input[name="nominal"]').val('')
				$('input[name="jumlah"]').prop('readonly', true)
				$('button#tambah').prop('disabled', true)
			}
		})
	</script>
</body>

</html>