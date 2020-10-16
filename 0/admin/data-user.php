<?php
include "../session/limit.php";
if( ! isset($_SESSION['email'])){ 
  header("location: ../login?pesan=logout.php");
}
?>

<?php 

	include '_controller/header.php';
	include '_controller/menu.php';

?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data User</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-12 connectedSortable">
			    <section class="content">
				  <div class="container-fluid">
					 <div class="card">
						  <div class="card-body">
						  <table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
								  <th><center>NO</center></th>
								  <th><center>NIK</center></th>
								  <th><center>Nama</center></th>
								  <th><center>Panjang</center></th>
								  <th><center>Password</center></th>
								  <th><center>Jabatan</center></th>
								  <th><center>Email</center></th>
								  <th><center>Telepone</center></th>
								  <th><center>Action</center></th>
								</tr>
							</thead>
							<tbody>
							 <?php 
								include "../../koneksi.php";
								$no = 1;
								$query=mysqli_query($koneksi, "SELECT * FROM user ORDER by id ASC");
								while($data=mysqli_fetch_assoc($query)) {
							?>
								<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nm_dpn']; ?></td>
								<td><?php echo $data['nm_blk']; ?></td>
								<td><?php echo $data['pass']; ?></td>
								<td><?php echo $data['jbtn']; ?></td>
								<td><?php echo $data['email']; ?></td>
								<td><?php echo $data['tlp']; ?></td>
								<td>
									<center>
										<button type="button" class="btn bg-gradient-danger btn-xs">
											<a href="#" onclick="confirm_modal('delete/d_stock.php?&id=<?php echo $data['id'];?>');">
												<i class="nav-icon far fa-trash-alt" style="font-size:100%;color:white;" title="Hapus Data"></i>
											</a><span>Hapus</span>
										</button>
									</center>
								</td>
								<?php 
								}
								?>
								</tbody>
							</table>
						 </div>
						 </div>
				</section>
          </section>
        </div>
      </div>
    </section>
  </div>
<?php
	
	include '_controller/footer.php';
	
?>