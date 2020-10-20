<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="../template/img/logo1.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Inventory</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">
			<?php
				include '../../koneksi.php';
				$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE email ='$_SESSION[email]'"));
				echo "<h4><b>$data[nm_dpn] $data[nm_blk]</b></h4>";
			?>
		  </a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		 <li class="nav-item">
            <a href="dashboardad" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Material
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="tambah" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Tambah Data</p>
                </a>
              </li> 
			  <li class="nav-item">
                <a href="kategory" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Kategori</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="stock" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Stock On Hand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Laporan Masuk</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Laporan Keluar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Tools Workshop
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Stock On Hand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=".404" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Transaksi</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Tools Gudang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="404" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Stock On Hand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="404" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Transaksi</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="404" class="nav-link">
                  <i class="far fa-angle-left"></i>
                  <p>Tools Rusak</p>
                </a>
              </li>
            </ul>
          </li>
		  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Update
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>