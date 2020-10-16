 <aside class="main-sidebar sidebar-dark-success elevation-4">
    <a href="dashboard" class="brand-link">
      <img src="../template/images/global1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Super Admin</span>
    </a>    
	<div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><center>
			<?php
				include '../../koneksi.php';
				$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email ='$_SESSION[email]'"));
					echo "<b> $data[nama] </b>";
			?></center>
		  </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="add-user" class="nav-link">
              <i class="nav-icon fas fa-user-plus"></i>
              <p>
                Add Data User
              </p>
            </a>
          </li>
		  <li class="nav-item has-treeview">
            <a href="data-user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
</aside>
