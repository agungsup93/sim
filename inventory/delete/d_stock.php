<?php
include "../../koneksi.php";
mysqli_query($koneksi, "DELETE from stock WHERE id='$_GET[id]'");
echo "<script language='javascript'> alert ('Data Material Berhasil Dihapus'); window.location = '../stock.php'</script>";
?>