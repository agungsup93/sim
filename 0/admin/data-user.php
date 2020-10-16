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



          </section>
        </div>
      </div>
    </section>
  </div>
<?php
	
	include '_controller/footer.php';
	
?>