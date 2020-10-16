<?php
include "../../koneksi.php";
require "../vendor/autoload.php";

	if (isset($_POST['reset_pass'])) {
		$email			= htmlspecialchars($_POST['email']);
		$code			= uniqid(true);
		//mengecek validasi email yg belum terdaftar
			$cek_email	= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email='$email'"));
			if ($cek_email == ($_POST['email'])) {
				echo "<script language = 'javascript'> alert ('Ups.. Email Anda Belum Terdaftar di Database Kami, Harap Hubungi Administrator'); window.location='#'</script>";
			} else {
				$cek_reset	= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM reset_password email='$email'"));
				if ($cek_reset > 0) {
					echo "<script language = 'javascript'> alert ('System Sudah Mengirimkan Halaman Reset. Mohon Cek Ulang Email'); window.location='#'</script>";
				} else {
					$query 		= mysqli_query($koneksi, "INSERT INTO reset_password VALUES ('','$email','$code')");
					
					if ($query) {
						$mail = new PHPMailer\PHPMailer\PHPMailer();
						
						 //Server settings
						$mail->isSMTP();                                      				// Set mailer to use SMTP
						$mail->Host 		= 'tls://smtp.gmail.com';						// Specify main and backup SMTP servers
						$mail->SMTPAuth 	= true;                               			// Enable SMTP authentication
						$mail->Username 	= "xxx@gmail.com";     							// SMTP username
						$mail->Password 	= 'xxxxx';	                         			// SMTP password
						$mail->SMTPSecure 	= 'tls';                            			// Enable TLS encryption, `ssl` also accepted
						$mail->Port 		= 587;                                    		// TCP port to connect to
						
						//Recipients
						$mail->setFrom("xxx@gmail.com", "System Info");			 			//email pengirim
						$mail->addAddress($email); 											// Email penerima
						$mail->addReplyTo("no-reply@gmail.com");
						
						 //Content
						$url = "http://" . $_SERVER["HTTP_HOST"] .dirname($_SERVER["PHP_SELF"]). "/reset.php?reset_pass=$code";
						$mail->isHTML(true);                                  				// Set email format to HTML
						$mail->Subject = "Link reset password";
						$mail->Body    = "<h1>Permintaan reset password</h1><p> Klik <a href='$url'>link ini</a> untuk mereset password</p>" ;
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
						if (!$mail->Send())
						{
							echo "<script language = 'javascript'> alert ('Server Email Bermasalah Silahkan Hubungi Developer Program'); window.location='#'</script>";
						} else {
							echo "<script language = 'javascript'> alert ('Succes Silahkan Cek Email Anda'); window.location='#'</script>";
						}
					} else {
						echo "<script language = 'javascript'> alert ('Ups.. Ada Kesalahan...'); window.location='#'</script>";
					}
				}
			}
	}
?>