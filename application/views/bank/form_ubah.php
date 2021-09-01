<html>
  <head>
    <title>Form Ubah - APIK</title>
  </head>
  <body>
    <h1>Form Ubah Data Bank</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("bank/ubah/".$bank->idcsv); ?>
      <table cellpadding="8">
        <tr>
          <td>idcsv</td>
          <td><input type="text" name="input_idcsv" value="<?php echo set_value('input_idcsv', $bank->idcsv); ?>" readonly></td>
        </tr>
        <tr>
          <td>Tanggal/td>
          <td><input type="date" name="input_tanggal" value="<?php echo set_value('input_tanggal', $bank->tanggal); ?>"></td>
        </tr>
        </tr>
        <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama', $bank->nama); ?>"></td>
        <tr>
          <td>Nominal</td>
          <td><input type="number" name="input_nominal" value="<?php echo set_value('input_nominal', $bank->nominal); ?>"></td>
        </tr>
        <tr>
          <td>Uraian</td>
          <td><input type="text" name="input_uraian" value="<?php echo set_value('input_uraian', $bank->uraian); ?>"></td>
        </tr>
        <td>Virtual Account</td>
          <td><input type="text" name="input_virtual_account" value="<?php echo set_value('input_virtual_account', $bank->virtual_account); ?>"></td>
          <tr>
          </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url('bank'); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>

