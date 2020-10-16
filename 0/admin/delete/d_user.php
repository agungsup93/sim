<?php
include "../../../koneksi.php";
mysqli_query($koneksi, "DELETE from user WHERE id='$_GET[id]'");
echo "<script language='javascript'> alert ('Data User Berhasil Dihapus'); window.location = '../data-user'</script>";
?>