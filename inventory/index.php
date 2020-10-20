<!DOCTYPE html>
<?php session_start()?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory</title>
  <link rel="shortcut icon" href="template/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<br>
  <div class="login-logo">
    <a href="#"><b>Login</b> Inventory</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login</p>
		<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "
						<div class='alert alert-danger alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-ban'></i> Uppsss..!</h6>
							  Cek dulu mungkin ada yang salah
						</div>";
				}else if($_GET['pesan'] == "logout"){
					echo "
						<div class='alert alert-success alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-check'></i> Yeeeahh...!</h6>
							  Anda Berhasil Logout
						</div>";
				}else if($_GET['pesan'] == "belum_login"){
					echo "
						<div class='alert alert-warning alert-dismissible'>
							<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
							<h6><i class='icon fas fa-exclamation-triangle'></i> Uppsss..!</h6>
							  Silahkan Login Kembali
						</div>";
				}
			}
		?>
      <form action="cekinven" method="post">
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
			<center>
				<img src="captcha">
			</center>
		<br>
			<div class="form-group">
				<input type="text" class="form-control" name="captcha" required="required" placeholder="captcha harus di isi" autocomplete="off">
			</div>
		<br>	
        <div class="row">
          <div class="col-6">
		  <a href="../index">
            <button type="button" class="btn btn-danger btn-block"><span class="fas fa-backspace"></span>&nbsp;&nbsp;Back</button>
          	<br>		
		  </div>
		  </a>
		  <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Sign In&nbsp;&nbsp;<span class="fas fa-external-link-alt"></span></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="template/plugins/jquery/jquery.js"></script>
<script src="template/plugins/jquery/jquery.min.js"></script>
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	  <script type="text/javascript">
         function change()
         {
            var x = document.getElementById('password').type;
 
            if (x == 'password')
            {
               document.getElementById('password').type = 'text';
               document.getElementById('mybutton').innerHTML = '<i class="far fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('password').type = 'password';
               document.getElementById('mybutton').innerHTML = '<i class="far fa-eye"></i>';
            }
         }
      </script>
	  </body>
</html>
