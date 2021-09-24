<html>
    <!-- Display status message -->
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    
    <div class="row">
        <div class="col-md-12 search-panel">
            <!-- Search form -->
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="searchKeyword" class="form-control" placeholder="Cari data transaksi..." value="<?php echo $searchKeyword; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-outline-secondary" value="Search">
                        <input type="submit" name="submitSearchReset" class="btn btn-outline-secondary" value="Reset">
                    </div>
                </div>

<section class="content">
  <div class="container-fluid">

  <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">

          <div class="card-header">
          <a href="<?php echo base_url("import/index"); ?>" class="btn btn-sm btn-outline-success float-left"></span>Import</a> <br><br>
          <a href="<?php echo base_url("bank/tambah"); ?>" class="btn btn-sm btn-outline-success float-left"></span>Tambah</a> <br><br>
          <div>
            
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered table-hover">
              <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">

    

                <thead>
                  <tr class="text-center">
                    <th>idcsv</th>
                    <th>tanggal</th>
                    <th>nama</th>
                    <th>nominal</th>
                    <th>uraian</th>
                    <th>virtual_account</th>
                    <th>Kode Lelang</th>
					            <th>Aksi</th>
                      <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                
    <?php if(!empty($bank)){ foreach($bank as $row){ ?>
      <tr>
          <td><?php echo $row['idcsv']; ?></td>
          <td><?php echo $row['tanggal']; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nominal']; ?></td>
          <td><?php echo $row['uraian']; ?></td>
          <td><?php echo $row['virtual_account']; ?></td>
          <td><?php echo $row['kode_lelang']; ?></td>

          

          
<td>

          <a href="<?php echo site_url('bank/ubah/'.$row['idcsv']); ?>" class="btn btn-primary">Ubah</a></td>
      <td>    <a href="<?php echo site_url('bank/hapus/'.$row['idcsv']); ?>" class="btn btn-warning">Hapus</a></td>
          </tr>
                <?php } }else{ ?>
                <tr><td colspan="7">No data found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
    
        <!-- Display pagination links -->
<table>
        <nav aria-label="Page navigation">

            <?php echo $this->pagination->create_links(); ?>
        </nav>
        </div>
    </div>
</div>
</html>