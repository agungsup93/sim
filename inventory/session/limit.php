<?php
	session_start();
	$timeout = 1; // setting timeout dalam menit
	$logout = "../index?pesan=belum_login"; // redirect halaman logout
 
	$timeout = $timeout * 600; // menit ke detik
	if(isset($_SESSION['start_session'])){
		$elapsed_time = time()-$_SESSION['start_session'];
		if($elapsed_time >= $timeout){
			session_destroy();
			echo "<script type='text/javascript'>alert('Waktu login telah habis, jika tidak ada aktivitas..!!klik OK untuk Login kembali');window.location='$logout'</script>";
		}
	}
 
	$_SESSION['start_session']=time();
 
?>