<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
          <h3> <?php echo $total_bank ?> </h3>
            <p class="card-text mb-0">Verifikator</p>
          </div>
          <div class="card-footer p-2">
            <a href="<?= base_url('bank/index'); ?>" class="btn btn-sm btn-outline-success">Data Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h2><?php echo $total_nota_penerimaan ?></h2>
            <p class="card-text mb-0">Otorisator</p>
          </div>
          <div class="card-footer p-2">
            <a href="<?= base_url('otorisator'); ?>" class="btn btn-sm btn-outline-success">Data Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h2>50</h2>
            <p class="card-text mb-0">Bendahara</p>
          </div>
          <div class="card-footer p-2">
            <a href="<?= base_url('bendahara'); ?>" class="btn btn-sm btn-outline-success">Data Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h2>1.287</h2>
            <p class="card-text mb-0">Load Master</p>
          </div>
          <div class="card-footer p-2">
            <a href="<?= base_url('load-master'); ?>" class="btn btn-sm btn-outline-success">Data Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>