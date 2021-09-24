

<svg xmlns="http://www.w3.org/2000/svg" class="icon mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 11l2 2l4 -4" /></svg>
Selamat Datang <?php echo ucwords ($this->session->userdata('nama_lengkap'));?> Sebagai <?php echo ucwords ($this->session->userdata('role'));?>

<div>
<div class="row">
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
            <a href="<?= base_url('pengesahan'); ?>" class="btn btn-sm btn-outline-success">Data Selengkapnya</a>
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