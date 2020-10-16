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
	$cek		= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE nik='$nik' or email='$email'"));
		if ($cek > 0) {
			echo "<script language = 'javascript'> alert ('Maaf NIK atau Email Sudah terdaftar'); window.location='../add-user'</script>";
		}else{
			$query = mysqli_query($koneksi, "INSERT INTO user (id, nik, nm_dpn, nm_blk, password, pass, jbtn, email, tlp, level)
			VALUES ('".$id."', '".$nik."', '".$nm_dpn."', '".$nm_blk."', '".$password."', '".$pass."', '".$jbtn."', '".$email."', '".$tlp."', '".$level."')");

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
				$mail->Body				= "Selamat Aktifasi Akun Baru anda<br> Email :
									Klik <a href='$url'>disini</a> untuk masuk ke Program Aplikasi SIM dan masukan email serta password anda "
				;
				$mail->AltBody			= 'This is the body in plain text for non-HTML mail clients';
				if (!$mail->Send())
				{
					echo "Mailer Error: " . $mail->ErrorInfo;
				} else {
					echo "<script language = 'javascript'> alert ('Succes'); window.location='../add-user'</script> ";
				}
		} else {
			echo "<script language = 'javascript'> alert ('Gagal'); window.location='../add-user'</script> ";
		}
		}
}
?>