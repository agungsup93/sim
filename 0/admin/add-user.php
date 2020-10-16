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
            <h1 class="m-0 text-dark">Add User</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <section class="col-lg-2 connectedSortable">
          </section>
<!----------------------------------------------ISI-------------------------------------------->
		  <section class="col-lg-8 connectedSortable">
			<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Add User</h3>
              </div>

              <form name='input' method='POST' action='save/add.php' class='form-horizontal'>
				  <div class="card-body">
					  <div class="row">
						  <div class="col-md-6">
							<div class="form-group">
								<label>NIK</label>
								<input type="text" class="form-control" name="id" hidden>
								<input type="text" class="form-control" name="nik" placeholder="NIK">
							</div>
							<div class="form-group">
								<label>Nama Depan</label>
								<input type="text" class="form-control" name="nm_dpn" placeholder="Depan">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input id="password" type="password" name="password" class="form-control" placeholder="Password">
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span id="mybutton" onclick="change()"><i class="far fa-eye"></i></span>
									</div>
								  </div>
							</div>
							<div class="form-group">
								<label>Jabatan</label>
								<input type="text" class="form-control" name="jbtn" placeholder="Jabatan">
							</div>
						  </div>
						  <!-- /.col -->
						  <div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label>Nama Belakang</label>
								<input type="text" class="form-control" name="nm_blk" placeholder="Belakang">
							</div>
							<div class="form-group">
								<label>rePassword</label>
								<input id="password1" type="repass" name="pass" class="form-control" placeholder="Password">
								  <div class="input-group-append">
									<div class="input-group-text">
									  <span id="mybutton1" onclick="change1()"><i class="far fa-eye"></i></span>
									</div>
								  </div>
							</div>
							<div class="form-group">
								<label>Telepone</label>
								<input type="number" name="tlp" class="form-control" placeholder="+62">
								  <div class="input-group-append">
								  </div>
							</div>
						  </div>
					  </div>
					 <div class="card card-warning">
					 <div class="card-header">
				     <h3 class="card-title"><b>Level Login</b></h3>
					 </div>
					 </div>
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary1" name="level" value="2">
						<label for="radioPrimary1"> Direksi</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary2" name="level" value="3">
						<label for="radioPrimary1"> HRD</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary3" name="level" value="4">
						<label for="radioPrimary1"> Sales</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary3" name="level" value="5">
						<label for="radioPrimary1"> Sales Admin</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary4" name="level" value="6">
						<label for="radioPrimary1"> Purchasing</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary4" name="level" value="7">
						<label for="radioPrimary1"> Warehouse</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary4" name="level" value="8">
						<label for="radioPrimary1"> Head. Engg</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary4" name="level" value="9">
						<label for="radioPrimary1"> Engineering</label>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="icheck-primary d-inline">
						<input type="radio" id="radioPrimary5" name="level" value="10">
						<label for="radioPrimary1"> User</label>
                    </div>
					<div class="card-footer">
					  <button type="submit" name="save" class="btn btn-primary">Submit</button>
					</div>
              </div>
              </form>
            </div>
		  </section>
<!-----------------------------------------END ISI----------------------------------------->
		  <section class="col-lg-2 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>
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
<?php
	
	include '_controller/footer.php';
	
?>