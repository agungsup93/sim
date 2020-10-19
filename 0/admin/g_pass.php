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
				 <strong><i class="fa fa-key"></i> Ganti Password</strong>
				 <p>
					<?php
						include '../../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE id = '$_GET[id]'"));
					?>
					<?php echo "
					<form action='' method='post'>
					<div class='input-group mb-3'>
					  <input type='hidden' name='id' value='$data[id]'>
					  <input id='password' type='password' name='password' value='$data[password]' class='form-control' placeholder='New Password'>
					  <div class='input-group-append'>
						<div class='input-group-text'>
						  <span id='mybutton' onclick='change()'><i class='far fa-eye'></i></span>
						</div>
					  </div>
					</div>
					
					<div class='input-group mb-3'>
					  <input id='password1' type='password' name='pass' value='$data[pass]' class='form-control' placeholder='rePassword'>
					  <div class='input-group-append'>
						<div class='input-group-text'>
						  <span id='mybutton1' onclick='change1()'><i class='far fa-eye'></i></span>
						</div>
					  </div>
					</div>	
					<div class='row'>
					  <div class='col-12'>
						<button type='submit' name='update' id='new-pass' class='btn btn-success btn-block'>Ganti&nbsp;&nbsp;<span class='fas fa-check'></span></button>
					  </div>
					</div>
				  </form>";?>
				 </p>
              </div>
            </div>
          </section>
		  <section class="col-lg-9 connectedSortable">


          </section>
        </div>
      </div>
    </section>
  </div>
  

<?php
	include '_controller/footer.php';
?>
<?php
include "../../koneksi.php";
	$id 	= $_GET['id'];
	if (isset($_POST['update'])) {
		$password		= md5($_POST['password']);
		$pass			= $_POST['pass'];
		$update			= mysqli_query($koneksi, "UPDATE superadmin SET password = '$password', pass = '$pass' WHERE id ='$id'") or die (mysql_error());
			echo "<script language = 'javascript'> alert ('Selamat Password baru anda terupdate'); window.location='dashboard'</script>";
	}
?>
