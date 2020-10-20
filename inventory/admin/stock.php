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
            <h1>Stock On Hand</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <section class="content">
			<div class="container-fluid">
			 <div class="card">
				  <div class="card-header">
					<h3 class="card-title">
						<button type="button" class="btn bg-gradient-success btn-sm"><a href="tambah">
							<i class="nav-icon fas fa-plus" style="color:white;"></i> <font color="white">Tambah Data</font></a>
						</button>
					</h3>
				  </div>
				  <div class="card-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
						  <th>NO</th>
						  <th>Part NO</th>
						  <th>Matrial</th>
						  <th>Qty</th>
						  <th>Satuan</th>
						  <th>Harga</th>
						  <th>Total</th>
						  <th>Lokasi</th>
						  <th>Action</th>
						</tr>
					</thead>
					<tbody>
					 <?php 
						include "../../koneksi.php";
						$no = 1;
						$total = 0;
						$tot_bayar = 0;
						$query=mysqli_query($koneksi, "SELECT * FROM stock ORDER by id ASC");
						while($data=mysqli_fetch_assoc($query)) {
							$total = $data['harga'] * $data['qty'];
							$tot_bayar += $total;
					?>
						<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['part_no']; ?></td>
						<td><?php echo $data['material']; ?></td>
						<td><?php echo $data['qty']; ?></td>
						<td><?php echo $data['satuan']; ?></td>
						<td><?php echo "Rp. " .number_format($data['harga']).",-"; ?></td>
						<td><?php echo "Rp. ".number_format($total).",- ";?></td>
						<td><?php echo $data['lokasi']; ?></td>
						<td>
							<center>
								<button type="button" class="btn bg-gradient-info btn-xs">
									<a href="#" class="modal-edit" id="<?php echo $data['id']; ?>">
										<i class="nav-icon far fa-edit" style="font-size:100%;color:white;" title="Edit Data"></i>
									</a>
								</button>
								<button type="button" class="btn bg-gradient-danger btn-xs">
									<a href="#" onclick="confirm_modal('../delete/d_stock.php?&id=<?php echo $data['id'];?>');">
										<i class="nav-icon far fa-trash-alt" style="font-size:100%;color:white;" title="Hapus Data"></i>
									</a>
								</button>
							</center>
						</td>
						<?php 
						}
						?>
						</tbody>
						
					<tfoot>
					  <tr style="background-color:orange">
						  <th colspan="6"><center>TOTAL SEMUA ASET</center></th>
						  <th colspan="3"><?= "Rp. ".number_format($tot_bayar).",-" ?></th>
						 
						 
					  </tr>
					  </tfoot>
					</table>
				 </div>
				 </div>
				</section>
			</div>
        </div>
      </div>
    </section>
  </div>
  
  
  
  
  
  <!--------------------------------------Tambah data----------------------------------->
	<div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Input Data <i>(Matrial)</i></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form name='input' method='POST' action='../save/s_stock.php' class='form-horizontal'>
					<div class="card-body">
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
						  <select onchange="check()" id="id" name="id" class='form-control'>
							<option value='' selected>- Pilih -</option>
								<?php
									include "../../koneksi.php";
									$in_add = mysqli_query($koneksi,"SELECT * FROM kategory");
									while ($row = mysqli_fetch_array($in_add)) {
										echo "<option value='$row[id]'>$row[id]</option>";
									}
								?>
						</select>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">ID</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="no" name="no" autocomplete='off'>
						</div>
					  </div>
					  <div class="form-group row">
						<label for="input" class="col-sm-2 control-label">Kategori</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" id="kategory" name="kategory" autocomplete='off'>
						</div>
					  </div>
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
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
							<i class="nav-icon fas fa-reply" style="color:white;"></i> Cancel</button>
						<button type="submit" name='save' id='clear' class="btn btn-primary">
							<i class="nav-icon fa fa-save" style="color:white;"></i> Simpan</button>
					</div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
	  
<!--------------------------------------Edit data----------------------------------->
	<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


	</div>

<!-------------------------------------Delete Data---------------------------------->
	<div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger">
              <h4 class="modal-title">Hapus Data<i>(Matrial)</i></h4>
              </button>
            </div>
			
			<div class="modal-body" style="margin:0px; border-top:0px; text-align:center;">
				<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
				<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
			</div>

          </div>
        </div>
    </div>

  
  
<?php include "_controller/footer.php"; ?>


<script type="text/javascript">
   $(document).ready(function () {
   $(".modal-edit").click(function(e) {
      var m = $(this).attr("id");
		   $.ajax({
    			   url: "ed_stock.php",
    			   type: "GET",
    			   data : {id: m,},
    			   success: function (ajaxData){
      			   $("#ModalEdit").html(ajaxData);
      			   $("#ModalEdit").modal('show',{backdrop: 'true'});
      		   }
    		   });
        });
      });
</script>

<script type="text/javascript">
    function confirm_modal(delete_url)
    {
      $('#modal-delete').modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href' , delete_url);
    }
</script>