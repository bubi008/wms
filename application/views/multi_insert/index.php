<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/font-awesome/css/font-awesome.min.css')?>">     
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/easion.css');?>">       
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/dist/css/bootstrap.min.css')?>"/> 
    <title>Indonetsource - Date format Codeigniter</title>
</head>
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#" class="menu-toggle">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="https://www.indonetsource.com/" class="easion-logo" target="_blank" ><img width="30px" src="<?php echo base_url('bootstrap/images/indonetsource.png') ?>"><span>&nbspIndonetsource</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="https://www.indonetsource.com/input-multiple-data-dengan-insert_batch-codeigniter/" target="_blank" class="dash-nav-item">
                    <i class="fa fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fa fa-server"></i> Example</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="<?php echo base_url('multi_insert') ?>" class="dash-nav-dropdown-item">Input Data Multiple</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#" class="menu-toggle">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fa fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fa fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fa fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <a href="#!" class="tools-item">
                        <i class="fa fa-bell"></i>                        
                    </a>
                    <div class="dropdown">
                        <a href="#" class="tools-item" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#">hello...!!</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="card easion-card">
                        <div class="card-header">
                            <div class="easion-card-icon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="easion-card-title"> Input Data Multiple</div>
                        </div>
                        <div class="card-body">
                            <form action="multiple_insert/input_data" method="post">
                                <?php for ($i=0; $i<3; $i++) { ?>                                 
                                <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Nama </label>              
                                        <input class="col-sm-4" type="text" name="nama[]" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Alamat </label>             
                                        <input class="col-sm-5" type="text" name="alamat[]" class="form-control">
                                    </div>
                                </div>                      
                                <br/>
                                <?php
                                    }
                                ?>  
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  btn-sm submit-reset">Simpan </button>                                                
                                </div>  
                            </form>  
                            <div class="col-sm-5">
                                <table class="table table-bordered">
                                   <tr>
                                       <th>No</th>
                                       <th>Nama</th>
                                       <th>Alamat</th>                                   
                                   </tr>
                                   <?php 
                                    $no = 1;
                                   foreach ($karyawan as $key ): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $key->nama; ?></td>
                                        <td><?php echo $key->alamat; ?></td>                                    
                                    </tr>
                                   <?php endforeach ?>
                               </table>
                           </div>                    
                        </div>
                     </div>
                </div>
            </main>
        </div>
    </div>
    <script src="<?php echo base_url('bootstrap/js/jquery-3.3.1.slim.min.js')?>" ></script>
    <script src="<?php echo base_url('bootstrap/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/easion.js')?>"></script>    
</body>
</html>