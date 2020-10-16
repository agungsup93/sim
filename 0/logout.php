<?php
	session_start();
	unset($_SESSION['email']);
	session_unset();
	session_destroy();
	echo "<script language='javascript'> alert ('Trimakasih Silahkan Login Kembali'); window.location = 'login?pesan=logout'</script>";
?>