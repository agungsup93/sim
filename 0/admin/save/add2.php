<?php

include '../../../koneksi.php';
if (isset($_POST['save'])){
	$id			= htmlspecialchars($_POST['id']);
	$nik		= htmlspecialchars($_POST['nik']);
	$nm_dpn		= htmlspecialchars($_POST['nm_dpn']);
	$nm_blk		= htmlspecialchars($_POST['nm_blk']);
	$password	= md5($_POST['password']);
	$pass		= htmlspecialchars($_POST['pass']);
	$jbtn		= htmlspecialchars($_POST['jbtn']);
	$email		= htmlspecialchars($_POST['email']);
	$tlp		= htmlspecialchars($_POST['tlp']);
	$level		= htmlspecialchars($_POST['level']);
	$tgl		= htmlspecialchars($_POST['tgl']);
	$foto		= $_FILES['foto']['name'];
	$tmp		= $_FILES['foto']['tmp_name'];
	
	$fotobaru 	= date('dmYHis').$foto;
	
	$path = "../gambar/".$fotobaru;
	
	$cek		= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE nik='$nik' or email='$email'"));

		if ($cek > 0) {
			echo "<script language = 'javascript'> alert ('Maaf NIK atau Email Sudah terdaftar'); window.location='../add-user'</script>";
		}else{
			if(move_uploaded_file($tmp, $path)){
				$query  = "INSERT INTO user VALUES ('".$id."', '".$nik."', '".$nm_dpn."', '".$nm_blk."', '".$password."', '".$pass."', '".$jbtn."', '".$email."', '".$tlp."', '".$level."', '".$tgl."', '".$fotobaru."')";
				$sql	= mysqli_query($connect, $query);
				
			if ($query) {
			require '../../vendor/autoload.php';
			
			$mail = new PHPMailer\PHPMailer\PHPMailer();
			
				$mail->isSMTP();
				$mail->Host				= 'tls://smtp.gmail.com';
				$mail->SMTPAuth			= true;
				$mail->Username			= 'globalnine.ind@gmail.com';
				$mail->Password			= 'global95a';
				$mail->Port				= 587;
				
				$mail->setFrom('globalnine.ind@gmail.com', 'System Info');
				$mail->addAddress($_POST['email']);
				$mail->addReplyTo('no-reply@gmail.com');
				
				$url = 'http://' . $_SERVER['HTTP_HOST'];
				$mail->isHTML(true);
				$mail->Subject			= 'Aktifasi Akun';
				$mail->Body				= "<div style='	border: 2px #0022ff solid;
														width:50%;
														padding: 5px; 
														background-color: #94dbff; 
														text-align: left;'>
													<font face='century gothic'> 
													<h1>Pendaftaran Akun Baru</h1><br>
														Halo, ".$email." Akun anda telah aktif. Untuk masuk silahkan masukan<br>
														Email 		: ".$email."<br>
														Password	: ".$pass."<br>
														Klik <a href='$url'>DISINI</a> untuk langsung menuju ke program atau ketikan IP : 192.168.1.100 di Browswer yang tersedia.<br>
														Jika anda mengalami masalah, silahkan hubungi Administrator atau Developer Program.<br><br>
														<b>mohon untuk ganti password, untuk pencegahan tidakan penyalahgunakan akun.</b><br>
													</font>
													<font face='Tahoma'><br>
														<small><b><i>Pesan Ini Dikirim Menggunakan Server System, Mohon untuk tidak Membalas</i></b></small><br><br>
														<br><br>
														Best Regards<br><br>
														<b><i>System Info</i></b><br>
														____________________
													</font>
											</div>";
				;
				$mail->AltBody			= 'This is the body in plain text for non-HTML mail clients';
				if (!$mail->Send())
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "<script language = 'javascript'> alert ('Succes'); window.location='../data-user'</script> ";
				}
		} else {
			echo "<script language = 'javascript'> alert ('Gagal'); window.location='../add-user'</script> ";
		}
		}
}

			}
?>