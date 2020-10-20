<?php
include "../session/limit.php";
if(!isset($_SESSION['email'])){ 
  header("location: ../index?pesan=logout.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory</title>
  <link rel="shortcut icon" href="../template/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<script>
	/* break back button */                                                                        
	window.onload=function(){                                                                      
	  var i=0; var previous_hash = window.location.hash;                                           
	  var x = setInterval(function(){                                                              
		i++; window.location.hash = "/noop/" + i;                                                  
		if (i==10){clearInterval(x);                                                               
		  window.location.hash = previous_hash;}                                                   
	  },10);
	}
	</script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" href="../logout.php">
          <i class="far fa-bell"></i> Logout
        </a>
      </li>
    </ul>
  </nav>
<?php include "_controller/aside.php";?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include "_controller/footer.php"; ?>