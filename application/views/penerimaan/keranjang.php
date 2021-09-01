<tr class="row-keranjang">
	<td class="uraian">
		<?= $this->input->post('uraian') ?>
		<input type="hidden" name="uraian_hidden[]" value="<?= $this->input->post('uraian') ?>">
	</td>
	<td class="idcsv">
		<?= $this->input->post('idcsv') ?>
		<input type="hidden" name="idcsv_hidden[]" value="<?= $this->input->post('idcsv') ?>">
	</td>
	<td class="tanggal">
		<?= $this->input->post('tanggal') ?>
		<input type="hidden" name="tanggal_hidden[]" value="<?= $this->input->post('tanggal') ?>">
	</td>
	<td class="nama">
		<?= $this->input->post('nama') ?>
		<input type="hidden" name="nama_hidden[]" value="<?= $this->input->post('nama') ?>">
        </td>
		<td class="nominal">
		<?= strtoupper($this->input->post('nominal')) ?>
		<input type="hidden" name="nominal_hidden[]" value="<?= $this->input->post('nominal') ?>">
	</td>
	<td class="virtual_account">
		<?= $this->input->post('virtual_account') ?>
		<input type="hidden" name="virtual_account_hidden[]" value="<?= $this->input->post('virtual_account') ?>">
	</td>
	<td class="jumlah">
		<?= $this->input->post('jumlah') ?>
		<input type="hidden" name="jumlah_hidden[]" value="<?= $this->input->post('jumlah') ?>">
	</td>
	<td class="aksi">
		<button type="button" class="btn btn-danger btn-sm" id="tombol-hapus" data-uraian="<?= $this->input->post('uraian') ?>"><i class="fa fa-trash"></i></button>
	</td>
</tr>