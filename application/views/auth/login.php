
<!doctype html>

<html lang="en">
  <head>

	<title>APIK - Aplikasi Penatausahaan Internal Kas</title>
	<link rel="shortcut icon" href="<?= base_url(); ?>assets/img/rcs_logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <head>
  <div class="position-relative overflow-hidden p-3 p-md-1 m-md-3 text-center">
			<div class="col-md-6 p-lg-5 mx-auto my-5">
				<img src="<?= base_url(); ?>assets/img/rcs_welcome_logo.png" alt="User Image" width="70%">
			
  </head>    
        <form class="card card-md" action="<?php echo base_url(); ?>auth/ceklogin" method="POST" autocomplete="off">
          <div class="card-body">
            <h2 class="card-title text-center mb-2">Silakan Login</h2>
           <h4><?php echo $this->session->flashdata('msg'); ?></h4>
            <div class="mb-1">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="username">
            </div>
            <div class="mb-1">
              <label class="form-label">
                Password
              </label>
              <div class="input-group input-group-flat">
                <input type="text" name="password" class="form-control"  placeholder="password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-toggle="tooltip"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-success w-100">Login</button>
            </div>
          </div>
        
                </a></div>
            </div>
          </div>
        </form>
    </div>
    <!-- Libs JS -->
    <script src="<?php echo base_url(); ?>assetsdist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?php echo base_url(); ?>assetsdist/js/tabler.min.js"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>