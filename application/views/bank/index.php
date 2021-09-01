<section class="content">
  <div class="container-fluid">

  <section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col">
        <div class="card">

          <div class="card-header">
          <a href="<?php echo base_url("import/index"); ?>" class="btn btn-sm btn-outline-success float-left"></span>Import</a> <br><br>
          <div class="card">
          <div class="card-header">
            <div></div>
          <a href="<?php echo base_url("bank/tambah"); ?>" class="btn btn-sm btn-outline-success float-left"></span>Tambah</a> <br><br>
          <div>
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered table-hover">
                <thead>
                  <tr class="text-center">
                    <th>idcsv</th>
                    <th>tanggal</th>
                    <th>nama</th>
                    <th>nominal</th>
                    <th>uraian</th>
                    <th>virtual_account</th>
					            <th>Aksi</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
      if( ! empty($bank)){ // Jika data tidak sama dengan kosong, artinya jika data  ada
        foreach($bank as $data){
          echo "<tr>
          <td>".$data->idcsv."</td>
          <td>".$data->tanggal."</td>
          <td>".$data->nama."</td>
          <td>".$data->nominal."</td>
          <td>".$data->uraian."</td>
          <td>".$data->virtual_account."</td>

          <td><a href='".base_url("bank/ubah/".$data->idcsv)."'>Ubah</a></td>
          <td><a href='".base_url("bank/hapus/".$data->idcsv)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data  kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?></tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>