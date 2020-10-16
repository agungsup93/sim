<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Inventory</title>
  <link rel="shortcut icon" href="template/img/logo.png">
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script type="text/javascript"> 
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(0);
    };
 </script>

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <?php include "template/nav.php";?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="template/img/logo1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inventory</span>
    </a>
<?php include "template/menu.php"; ?>
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-database"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Stock On Hand Inventory</span>
                <span class="info-box-number">
                  <?php
						include "../koneksi.php";
						$sqlCommand = "SELECT COUNT(*) FROM stock"; 
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
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-exchange-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Transaksi In & Out</span>
                <span class="info-box-number">41,410</span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Stock On Hand Tools</span>
                <span class="info-box-number">760</span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Transaksi In & Out</span>
                <span class="info-box-number">2,000</span>
              </div>
            </div>
          </div>
        </div>
		<br><br><br><br><br><br>
		<marquee>
			<h3>Program Aplikasi ini masih dalam tahap pengembangan Developer</h3>
		</marquee>

    </section>
  </div>
<?php include "template/footer.php";?>
</div>
<?php include "template/foot.php"; ?>