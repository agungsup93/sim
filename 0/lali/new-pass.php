<?php
error_reporting(0);
include "../../koneksi.php";
if(isset($_POST["new_pass"])){
    $email 		= $_POST["email"];
    $password 	= md5($_POST["password"]);
    $pass 		= htmlspecialchars($_POST["pass"]);
    $query 		= mysqli_query($koneksi, "UPDATE superadmin SET password = '$password', pass = '$pass' WHERE email = '$email'");
    if($query){
                mysqli_query($koneksi, "DELETE FROM reset_password WHERE email = '$email'");
    }
    echo "<script language = 'javascript'> alert ('Selamat Password baru anda terupdate'); window.location='../login'</script> ";
}
?>