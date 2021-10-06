<!doctype html>
<html lang="en">
<head>
   
</head>
<body>
    
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="card easion-card">
                        <div class="card-header">
                            <div class="easion-card-icon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <div class="easion-card-title"> Input Rincian Penerimaan Uang Hasil Lelang</div>
                        </div>
                        <div class="card-body">
                            <form action="rphl/input_data" method="post">
                                <?php for ($i=0; $i<4; $i++) { ?>  
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Jumlah </label>             
                                        <input class="col-sm-4" type="text" name="jumlah_transaksi[]" class="form-control" > 
                                </div> 
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >No NP </label>             
                                        <input class="col-sm-4" type="text" name="nota_penerimaan_id[]" class="form-control" > 
                                        </div> 
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Tanggal NP </label>             
                                        <input class="col-sm-4" type="date" name="tanggal_nota[]" class="form-control" value="<?= date('Y/m/d') ?>">
                                </div> 
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Uraian </label>             
                                        <input class="col-sm-4" type="text" name="uraian[]" class="form-control" >
                                    </div> 
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Kode Lelang </label>             
                                        <input class="col-sm-4" type="text" name="kode_lelang[]" class="form-control" id="va" onkeyup="copytextbox();"/>
                                    </div> 
                                    <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >No VA </label>             
                                        <input class="col-sm-4" type="text" name="virtual_account_penerimaan[]" class="form-control" id="va" onkeyup="copytextbox();"/>
                                    </div>                             
                                <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Jenis </label>              
                                    <select class="col-sm-4" name="jenis_penerimaan[]" id="nama_jenis" class="form-control">
													<option value="">Jenis</option>
                                                    <option value="Kekurangan Hasil Bersih Lelang">Kekurangan Hasil Bersih Lelang</option>
                                                     <option value="Bea Lelang Penjual">Bea Lelang Penjual</option>
                                                    <option value="Bea Lelang Pembeli">Bea Lelang Pembeli</option>
                                                    <option value="PPh">PPh</option>
                                            <select>
                                    </div>
                                <div class="form-group">                                    
                                    <div class="input-group col-sm-8">
                                    <label class="col-sm-2" >Nominal </label>             
                                        <input class="col-sm-4" type="text" name="nominal[]" class="form-control">
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
                            <br> 
                            <div class="col-sm-5">
                                <table class="table table-bordered">
                                   <tr>
                                       <th>No</th>
                                       <th>Jenis Penerimaan</th>
                                       <th>Nominal</th>  
                                       <th>No VA</th>
                                       <th>Kode Lelang</th>                                 
                                   </tr>
                                   <?php 
                                    $no = 1;
                                   foreach ($master_penerimaan as $key ): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $key->jenis_penerimaan; ?></td>
                                        <td><?php echo $key->nominal; ?></td> 
                                        <td><?php echo $key->virtual_account_penerimaan; ?></td> 
                                        <td><?php echo $key->kode_lelang; ?></td> 

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
    <script>
function copytextbox() {
    document.getElementById('va[]').value = document.getElementById('va').value;
}
</script>   
</body>
</html>

