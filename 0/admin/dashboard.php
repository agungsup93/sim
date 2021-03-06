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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-3 connectedSortable">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Nama</strong>
                <p class="text-muted">
					<?php
						include '../../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email ='$_SESSION[email]'"));
						echo "$data[nama]";
					?>
                </p>
                <hr>
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Email</strong>
                <p class="text-muted">
					<?php
						include '../../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email ='$_SESSION[email]'"));
						echo "$data[email]";
					?>
				</p>
                <hr>
                <strong><i class="far fa-file-alt mr-1"></i> Level Login</strong>
                <p class="text-muted">
					<?php
						include '../../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email ='$_SESSION[email]'"));
						echo "$data[level]";
					?>
				</p>
				<hr>
              </div>
            </div>
          </section>
		  <section class="col-lg-9 connectedSortable">
			<div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="ion ion-person-add"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total User</span>
                <span class="info-box-number">
                  <?php
						include "../../koneksi.php";
						$sqlCommand = "SELECT COUNT(*) FROM user"; 
						$query = mysqli_query($koneksi, $sqlCommand) or die (mysqli_error()); 
						$rows = mysqli_fetch_row($query);
						echo "" . $rows[0] . ""; 
						mysqli_free_result($query); 
					?>
                  <small>Items</small>
                </span>
              </div>
            </div>
          </div>
		  <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="ion ion-pie-graph"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Input Data Terakhir</span>
                <span class="info-box-number">
                  <?php function format_indo($date){
						$BulanIndo = array("Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agst", "Sept", "Okt", "Nov", "Des");
						$tahun = substr($date, 0, 4);               
						$bulan = substr($date, 5, 2);
						$tgl   = substr($date, 8, 2);
						$result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
						return($result);
					}
					?>
					<?php 
						include "../../koneksi.php";
						$query=mysqli_query($koneksi, "SELECT * FROM user ORDER by id DESC Limit 1");
						while($data=mysqli_fetch_assoc($query)) { ?>
						 <?php echo format_indo($data['tgl']); ?>
						 <?php
						}
					?>
                </span>
              </div>
            </div>
          </div>


          </section>
        </div>
      </div>
    </section>
  </div>
  

<?php
	include '_controller/footer.php';
?>