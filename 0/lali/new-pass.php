<?php
error_reporting(0);
include "../../koneksi.php";
if(isset($_POST["new_pass"])){
    $email 		= $_POST["email"];
    $pass 		= md5($_POST["password"]);
    $query 		= mysqli_query($koneksi, "UPDATE superadmin SET password = '$pass' WHERE email = '$email'");
    if($query){
                mysqli_query($koneksi, "DELETE FROM reset_password WHERE email = '$email'");
    }
    echo "<script language = 'javascript'> alert ('Selamat Password baru anda terupdate'); window.location='../login'</script> ";
}
?>