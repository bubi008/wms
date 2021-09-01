<html>
  <head>
    <title>Form Tambah - CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Form Tambah Data Bank</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("bank/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>idcsv</td>
          <td><input type="text" name="input_idcsv" value="<?php echo set_value('input_idcsv'); ?>"></td>
        </tr>
        <tr>
          <td>tanggal</td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal'); ?>"></td>
        </tr>
        <tr>
          <td>nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>nominal</td>
          <td><input type="number" name="input_nominal" value="<?php echo set_value('input_nominal'); ?>"></td>
        </tr>
        <tr>
          <td>uraian</td>
          <td><input type="text" name="input_uraian" value="<?php echo set_value('input_uraian'); ?>"></td>
        </tr>
        <td>virtual account</td>
        <td><input type="text" name="input_virtual_account" value="<?php echo set_value('input_virtual_account'); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url('bank'); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>