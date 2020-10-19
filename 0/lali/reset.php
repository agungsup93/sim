<?php
  include "../../koneksi.php";
  if(!isset($_GET["reset_pass"])){
    echo "<script language = 'javascript'> alert ('Maaf Halaman Ini Sudah Kadaluarsa'); window.location='../login'</script>";
  }
  $code = $_GET["reset_pass"];
  $query = mysqli_query($koneksi, "SELECT email FROM reset_password WHERE code = '$code' ");
  if(mysqli_num_rows($query)==0){
    echo "<script language = 'javascript'> alert ('Maaf Halaman Ini Sudah Kadaluarsa'); window.location='../../index'</script>";
  }
  $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<?php session_start()?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lupa Password</title>
  <link rel="shortcut icon" href="../template/images/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../template/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../template/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<br>
  <div class="login-logo">
    <a href="#"><b>Reset Password</b></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukan Password Baru Anda</p>
	  <form action="new-pass" method="post">
        <div class="input-group mb-3">
		  <input type="hidden" value="<?php echo $row["email"]?>" name="email">
          <input id="password" type="password" name="password" class="form-control" placeholder="New Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>
		
		<div class="input-group mb-3">
          <input id="password1" type="password" name="pass" class="form-control" placeholder="rePassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span id="mybutton1" onclick="change1()"><i class="far fa-eye"></i></span>
            </div>
          </div>
        </div>	
        <div class="row">
		  <div class="col-12">
            <button type="submit" name="new_pass" id="new-pass" class="btn btn-success btn-block">Ganti&nbsp;&nbsp;<span class="fas fa-check"></span></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../template/plugins/jquery/jquery.js"></script>
<script src="../template/plugins/jquery/jquery.min.js"></script>
<script src="../template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
	<script type="text/javascript">
         function change1()
         {
            var x = document.getElementById('password1').type;
 
            if (x == 'password')
            {
               document.getElementById('password1').type = 'text';
               document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye-slash"></i>';
            }
            else
            {
               document.getElementById('password1').type = 'password';
               document.getElementById('mybutton1').innerHTML = '<i class="far fa-eye"></i>';
            }
         }
    </script>
<script type="text/javascript">
        $(function () {
            $("#new-pass").click(function () {
                var password = $("#password").val();
                var confirmPassword = $("#password1").val();
                if (password != confirmPassword) {
                    alert("Password Tidak Sesuai");
                    return false;
                }
                return true;
            });
        });
</script>
	
	  </body>
</html>
