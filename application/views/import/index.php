<!DOCTYPE html>
<html lang="en">
<head>

</head>
    <body>
<div class="container">
    <h2>Members List</h2>
	
    <!-- Display status message -->
    <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php }?>
    </div>
    <?php if(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
	
    <div class="row">
        <!-- Import link -->
        <div class="col-md-12 head">
            <div class="float-right">
                <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
            </div>
        </div>
		
        <!-- File upload form -->
        <div class="col-md-12" id="importFrm" style="display: none;">
            <form action="<?php echo base_url('Import/import'); ?>" method="post" enctype="multipart/form-data">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
        </div>
        
        <!-- Data list table -->
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>IDCSV</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Uraian</th>
                    <th>Virtual Account</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($bank)){ foreach($bank as $row){ ?>
                <tr>
                    <td><?php echo $row['idcsv']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['nominal']; ?></td>
                    <td><?php echo $row['uraian']; ?></td>
                    <td><?php echo $row['virtual_account']; ?></td>
                </tr>
                <?php } }else{ ?>
                <tr><td colspan="5">No member(s) found...</td></tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
</body>

</html>