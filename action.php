<?php
 include('class.phpmailer.php');
 include('class.smtp.php');


$nama_penerima=$_POST['nama'];
$email_penerima=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];

$mail = new PHPMailer();

$mail->Host     = "ssl://smtp.gmail.com"; 
$mail->Mailer   = "smtp";
$mail->SMTPAuth = true; 
 
 $mail->Username = "carnosaurus45@gmail.com";
 $mail->Password = "Coockedmeat123";
 $webmaster_email = "carnosaurus45@gmail.com";
 $email = $email_penerima;
 $name = $nama_penerima;
 $mail->From= $webmaster_email;
 $mail->FromName="Kemal Pahlevi";
 $mail->AddAddress($email, $name);
 
 $mail->AddReplyTo($webmaster_email, "Nama Pengirim");
 $mail->WordWrap = 50;
 
 $mail->IsHTML(true);
 $mail->Subject = $subjek;
 $mail->Body = $pesan;
 
 $mail->AltBody = "YOOO E-Mail Gw UDAH SIAP BRO";
 if(!$mail->Send()) {
  echo "mail error" . $mail->ErrorInfo;
 } else {
  echo "email berhasil di kirim";
 }
 
 
?>