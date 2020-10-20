<?php
include "../session/limit.php";
if(!isset($_SESSION['email'])){ 
  header("location: ../index?pesan=logout.php");
}
?>
<?php
include "_controller/head.php";
include "_controller/aside.php";
?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			<div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#mat" data-toggle="tab">Material</a></li>
                  <li class="nav-item"><a class="nav-link" href="#mas" data-toggle="tab">Masuk</a></li>
                  <li class="nav-item"><a class="nav-link" href="#kel" data-toggle="tab">Keluar</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
				  <!----------------------------------------------------------------Material---------------------------------------------------->
                  <div class="active tab-pane" id="mat">
					<form name='input' method='POST' action='../save/s_stock.php' class='form-horizontal'>
					<div class="card-body">
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Part NO</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="part_no" name="part_no" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Matrial</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="material" name="material" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Qty</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" id="qty" name="qty" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Satuan</label>
						<div class="col-sm-10">
							<select name='satuan' class='form-control' required>
								<option value=''>--Pilih--</option>
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
						  <input type="number" class="form-control" id="harga" name="harga" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="lokasi" name="lokasi" autocomplete='off'>
						</div>
					  </div>
					<div class="form-group row">
							<div class="offset-sm-2 col-sm-10">
							<button type="submit" name='save' id='clear' class="btn btn-danger">
								<i class="nav-icon fa fa-save" style="color:white;"></i> Simpan</button>
							</div>
						  </div>
					</form>
				  </div>
				  </div>
				  <!----------------Kategori-------------------->
				  <div class="tab-pane" id="mas">
					<form name='input' method='POST' action='../save/s_stock.php' class='form-horizontal'>
					<div class="card-body">
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
							<select onchange="check()" id="part_no" name="part_no" class='form-control'>
								<option value='' selected>- Pilih -</option>
									<?php
										include "../../koneksi.php";
										$in_brg = mysqli_query($koneksi,"SELECT * FROM stock");
										while ($row = mysqli_fetch_array($in_brg)) {
											echo "<option value='$row[part_no]'>$row[part_no]</option>";
										}
									?>
							</select>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Request</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="rfp" name="rfp" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Tanggal</label>
						<div class="col-sm-10">
						  <input type="date" class="form-control" id="tgl" name="tgl" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Material</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="material" name="material" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Qty</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="qty" name="qty" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Satuan</label>
						<div class="col-sm-10">
						  <input type="number" class="form-control" id="satuan" name="satuan" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="lokasi" name="lokasi" autocomplete='off'>
						</div>
					  </div>
					<div class="form-group row">
							<div class="offset-sm-2 col-sm-10">
							<button type="submit" name='save' id='clear' class="btn btn-danger">
								<i class="nav-icon fa fa-save" style="color:white;"></i> Simpan</button>
							</div>
						  </div>
					</form>
				  </div>
				  </div>
				  <!----------------Kategori-------------------->
				  <div class="tab-pane" id="kel">
				  
				  </div>

                  
                </div>
              </div>
            </div>
          </div>
		  </div>
        </div>
      </div>
    </section>
  </div>
  
<?php include "_controller/footer.php"; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    function check(){
        var part_no = $("#part_no").val();
        $.ajax({
            url: '../save/in_s-masuk.php',
            data:"part_no="+part_no ,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
			$('#material').val(obj.material);
			$('#satuan').val(obj.satuan);
			$('#lokasi').val(obj.lokasi);
        });
    }
</script>
<script>