<?php
    include "../../koneksi.php";
	$id		= htmlspecialchars($_GET['id']);
	$modal	= mysqli_query($koneksi,"SELECT * FROM stock WHERE id='$id'");
	while($data=mysqli_fetch_array($modal)){
?>

		<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h4 class="modal-title">Edit Data <i>(Matrial)</i></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form name='input' method='POST' action="../edit/e_stock" class='form-horizontal'>
					<div class="card-body">
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Part NO</label>
						<div class="col-sm-10">
						  <input type="hidden" name="id"  class="form-control" value="<?php echo $data['id']; ?>" />
						  <input type="text" readonly name="part_no"  class="form-control" value="<?php echo $data['part_no']; ?>"/>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Matrial</label>
						<div class="col-sm-10">
						  <input type="text" name="material" class="form-control" value="<?php echo $data['material']; ?>" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Qty</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" name="qty" value="<?php echo $data['qty'];?>" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Satuan</label>
						<div class="col-sm-10">
							<select name='satuan' class='form-control' value='<?php echo $data['satuan'];?>' autocomplete='off'>
								<option value='Mtr'>Mtr</option>
								<option value='Pcs'>Pcs</option>
								<option value='Lt'>Lt</option>
								<option value='Kg'>Kg</option>
								<option value='Btg'>Btg</option>
							</select>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Harga</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" name="harga" value="<?php echo $data['harga'];?>" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="lokasi" value="<?php echo $data['lokasi'];?>" autocomplete='off'>
						</div>
					  </div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
							<i class="nav-icon fas fa-reply" style="color:white;"></i> Cancel</button>
						<button type="submit" name='save' id='clear' class="btn btn-primary">
							<i class="nav-icon fa fa-save" style="color:white;"></i> Simpan</button>
					</div>
              </form>
			  <?php } ?>
            </div>
          </div>
        </div>
      </div>
	 	  