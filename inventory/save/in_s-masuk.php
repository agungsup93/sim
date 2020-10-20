<?php
include "../../koneksi.php";
$in_brg = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM stok WHERE part_no='$_GET[part_no]'"));
$data_in_brg = array  ('material'   	=>  $in_brg['material'],
						'satuan'	  	=>  $in_brg['satuan'],
						'lokasi'	  	=>  $in_brg['lokasi'],);
 echo json_encode($data_in_brg);