<?php 
include "../../koneksi.php";
require '../vendor/autoload.php';
if(isset($_POST["reset_pass"])){
    $email 		= $_POST["email"]; 										//email kamu atau email penerima link reset
    $code 		= uniqid(true); 										//Untuk kode atau parameter acak
	//untuk mengecek validasi email yang belum terdaftar
	$cek		= mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM superadmin WHERE email='$email'"));
	if($cek == ($_POST['email'])){
		echo "<script language = 'javascript'> alert ('Ups.. Email Anda Belum Terdaftar di Database Kami, Harap Hubungi Administrator'); window.location='../login'</script>";
	}else{
    $query 		= mysqli_query($koneksi, "INSERT INTO reset_password VALUES ('$email','$code')");
    if($query){
		$mail = new PHPMailer\PHPMailer\PHPMailer();                            // Passing `true` enables exceptions

        //Server settings
        $mail->isSMTP();                                      				// Set mailer to use SMTP
        $mail->Host 		= 'tls://smtp.gmail.com';								// Specify main and backup SMTP servers
        $mail->SMTPAuth 	= true;                               			// Enable SMTP authentication
        $mail->Username 	= "globalnine.ind@gmail.com";     				// SMTP username
        $mail->Password 	= 'global95a';                         			// SMTP password
        $mail->SMTPSecure 	= 'ssl';                            			// Enable TLS encryption, `ssl` also accepted
        $mail->Port 		= 587;                                    		// TCP port to connect to
		
        //Recipients
        $mail->setFrom("globalnine.ind@gmail.com", "System Info"); 		//email pengirim
        $mail->addAddress($email); // Email penerima
        $mail->addReplyTo("no-reply@gmail.com");
        //Content
        $url = "http://" . $_SERVER["HTTP_HOST"] .dirname($_SERVER["PHP_SELF"]). "/reset.php?reset_pass=$code";
        $mail->isHTML(true);                                  			// Set email format to HTML
        $mail->Subject = "Link Reset Password";
        $mail->Body    = "<div style='	border: 2px #0022ff solid;
										width:50%;
										padding: 5px; 
										background-color: #94dbff; 
										text-align: left;'>
								<font face='century gothic'> 
									<h1>Permintaan Reset Password</h1><br>
									Halo, ".$email." Permintaan reset password anda telah kami terima.<br>
									Klik <a href='$url'>DISINI</a> untuk mereset password anda.<br>
									Jika anda mengalami masalah, silahkan hubungi Administrator atau Developer Program.<br>
								</font>
								<font face='Tahoma'>
									<b><i>Pesan Ini Dikirim Menggunakan System, Mohon untuk tidak membalas</i></b><br><br>
									<br><br>
									Best Regards<br><br>
									<b><i>System Info</i></b><br>
									____________________
								</font>
							</div>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->Send()) 
	     {
			echo "<script language = 'javascript'> alert ('Server Email Bermasalah Silahkan Hubungi Developer Program'); window.location='../../index'</script>";
	     } else {
	        echo "<script language = 'javascript'> alert ('Succes Silahkan Cek Email Anda'); window.location='../../index'</script> ";
				}
			} else {
		echo "<script language = 'javascript'> alert ('Ups.. Ada Kesalahan...'); window.location='../../index'</script> ";
					}
		}
	}
?>