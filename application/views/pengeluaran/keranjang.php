<tr class="row-keranjang">
	<td class="uraian">
		<?= $this->input->post('uraian') ?>
		<input type="hidden" name="uraian_hidden[]" value="<?= $this->input->post('uraian') ?>">
	</td>
	<td class="tanggal_nota">
		<?= $this->input->post('tanggal_nota') ?>
		<input type="hidden" name="tanggal_nota_hidden[]" value="<?= $this->input->post('tanggal_nota') ?>">
	</td>
	<td class="nota_penerimaan_id">
		<?= $this->input->post('nota_penerimaan_id') ?>
		<input type="hidden" name="nota_penerimaan_id_hidden[]" value="<?= $this->input->post('nota_penerimaan_id') ?>">
	</td>
	<td class="jenis_penerimaan">
		<?= $this->input->post('jenis_penerimaan') ?>
		<input type="hidden" name="jenis_penerimaan_hidden[]" value="<?= $this->input->post('jenis_penerimaan') ?>">
        </td>
		<td class="nominal">
		<?= strtoupper($this->input->post('nominal')) ?>
		<input type="hidden" name="nominal_hidden[]" value="<?= $this->input->post('nominal') ?>">
	</td>
	<td class="rek_tujuan">
		<?= $this->input->post('rek_tujuan') ?>
		<input type="hidden" name="rek_tujuan_hidden[]" value="<?= $this->input->post('rek_tujuan') ?>">
		</td>
	<td class="id_master">
		<?= $this->input->post('id_master') ?>
		<input type="hidden" name="id_master_hidden[]" value="<?= $this->input->post('id_master') ?>">
	</td>
	<td class="jumlah_transaksi">
		<?= $this->input->post('jumlah_transaksi') ?>
		<input type="hidden" name="jumlah_transaksi_hidden[]" value="<?= $this->input->post('jumlah_transaksi') ?>">
		</td>
	<td class="jumlah_pengeluaran">
		<?= $this->input->post('jumlah_pengeluaran') ?>
		<input type="hidden" name="jumlah_pengeluaran_hidden[]" value="<?= $this->input->post('jumlah_pengeluaran') ?>">
	</td>
	<td class="aksi">
		<button type="button" class="btn btn-danger btn-sm" id="tombol-hapus" data-uraian="<?= $this->input->post('uraian') ?>"><i class="fa fa-trash"></i></button>
	</td>
</tr>