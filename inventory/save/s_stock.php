<?php
error_reporting(0);
include '../../koneksi.php';
if (isset($_POST['save'])){
$part_no	= htmlspecialchars($_POST['part_no']);
$material	= htmlspecialchars($_POST['material']);
$qty		= htmlspecialchars($_POST['qty']);
$satuan		= htmlspecialchars($_POST['satuan']);
$harga		= htmlspecialchars($_POST['harga']);
$lokasi		= htmlspecialchars($_POST['lokasi']);
$no			= htmlspecialchars($_POST['no']);
$kategory	= htmlspecialchars($_POST['kategory']);
//Validasi jika ada Part_NO ada yang sama
$cek		= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM stock WHERE part_no='$part_no'"));
//melakukan perulangan
if ($cek > 0){
echo "<script language = 'javascript'> alert ('Maaf Cek Kembali Part No Tidak Boleh Sama'); window.location='../admin/stock'</script> ";
}else { 	
$query = mysqli_query($koneksi, "INSERT INTO stock (part_no, material, qty, satuan, harga, lokasi, no, kategory)
VALUES ('".$part_no."','".$material."','".$qty."','".$satuan."','".$harga."','".$lokasi."','".$no."','".$kategory."')");

echo "<script language = 'javascript'> alert ('Berhasil ditambahkan'); window.location='../admin/stock'</script> ";
mysqli_query($query);
}
}
?>