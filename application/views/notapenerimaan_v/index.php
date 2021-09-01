<!DOCTYPE html>
<html>
<head>

    <!--Load CSS File-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/dist/css/bootstrap-select.css');?>">
</head>
<body>
    <div class="container">
     <section>

     </section>
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewModal">Buat Nota Penerimaan</button><br/>
       
        </section>
        <table class="table table-striped">
            <thead>
                 
                <tr>
                    <th>#</th>
                    <th>Nomor Nota Penerimaan</th>
                    <th>Tanggal</th>
                    <th>Jumlah Transaksi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $count=0;
                    foreach ($nota_penerimaan->result() as $row) :
                        $count++;
                ?>
                <tr>
                    <td><?php echo $count;?></td>
                    <td><?php echo $row->id_np;?></td>
                    <td><?php echo $row-> tanggal;?></td>
                    <td><?php echo $row->item_bank.' Transaksi Rekening';?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm update-record" data-id_np="<?php echo $row->id_np;?>" data-tanggal="<?php echo $row->tanggal;?>">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm delete-record" data-id_np="<?php echo $row->id_np;?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
             
        </table>
    </div>
 
    <!-- Modal Add New Package-->
    <form action="<?php echo site_url('Notapenerimaan/create');?>" method="post">
        <div class="modal fade" id="addNewModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Nota Penerimaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nota Penerimaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="nota_penerimaan" class="form-control" placeholder="Nomor Nota Penerimaan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Product</label>
                    <div class="col-sm-10">
                        <select class="bootstrap-select" name="bank[]" data-width="100%" data-live-search="true" multiple required>
                            <?php foreach ($bank->result() as $row) :?>
                                <option value="<?php echo $row->idcsv;?>"><?php echo $row->uraian;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm">Save</button>
              </div>
            </div>
          </div>
        </div>
    </form>
 
    <!-- Modal Update Package-->
    <form action="<?php echo site_url('Notapenerimaan/update');?>" method="post">
        <div class="modal fade" id="UpdateModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Nota Penerimaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nota Penerimaan</label>
                    <div class="col-sm-10">
                      <input type="text" name="nota_penerimaan_edit" class="form-control" placeholder="Nota Penerimaan Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Bank</label>
                    <div class="col-sm-10">
                        <select class="bootstrap-select strings" name="bank_edit[]" data-width="100%" data-live-search="true" multiple required>
                            <?php foreach ($bank->result() as $row) :?>
                                <option value="<?php echo $row->idcsv;?>"><?php echo $row->uraian;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>
 
              </div>
              <div class="modal-footer">
                <input type="hidden" name="edit_id" required>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm">Update</button>
              </div>
            </div>
          </div>
        </div>
    </form>
 
 
    <!-- Modal Delete Package-->
    <form action="<?php echo site_url('package/delete');?>" method="post">
        <div class="modal fade" id="DeleteModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
 
                <h4>Are you sure to delete this package?</h4>
 
              </div>
              <div class="modal-footer">
                <input type="hidden" name="delete_id" required>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-success btn-sm">Yes</button>
              </div>
            </div>
          </div>
        </div>
    </form>
 
    <!--Load JavaScript File-->
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery-3.4.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/bootstrap.bundle.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/bootstrap-select.js');?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.bootstrap-select').selectpicker();
 
            //GET UPDATE
            $('.update-record').on('click',function(){
                var id_np = $(this).data('id_np');
                var tanggal = $(this).data('tanggal');
                $(".strings").val('');
                $('#UpdateModal').modal('show');
                $('[name="edit_id"]').val(id_np);
                $('[name="nota_penerimaan_edit"]').val(tanggal);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('Notapenerimaan/get_bank_by_nota_penerimaan');?>",
                    method: "POST",
                    data :{id_np:id_np},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');
 
                        });
                    }
                     
                });
                return false;
            });
 
            //GET CONFIRM DELETE
            $('.delete-record').on('click',function(){
                var id_np = $(this).data('id_np');
                $('#DeleteModal').modal('show');
                $('[name="delete_id"]').val(id_np);
            });
 
        });
    </script>