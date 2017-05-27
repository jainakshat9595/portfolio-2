<?php

require 'db_connect.php';

$fname = $_POST['fname'];
$lname = isset($_POST['lname']) ? $_POST['lname'] : "";
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = md5($_POST['password']);
$randcode = rand(10001,99999); // to be checked

$db -> query("INSERT INTO new_reg (fname,lname,phone,email,password,rand) VALUES ('$fname','$lname','$mobile','$email','$password','$randcode')");

// Call to send mail script
require 'PHPMailer/PHPMailerAutoload.php';
	
$mail = new PHPMailer;

$mail->SMTPDebug = 1;
$mail->SMTPSecure = 'ssl';	
$mail->isSMTP();                                    
$mail->SMTPAuth = true;                             

$mail->Host = 'mail.frends.zz.mu';
$mail->Username = 'support@frends.zz.mu';      
$mail->Password = 'jain1995';                     
                          
$mail->Port = 2525;                                  

$mail->From = 'support@frends.zz.mu';
$mail->FromName = 'Frends - Confirm Identity';
$mail->addAddress($email);              
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome, '.$fname.' '.$lname.' Confirmation Mail from Frends';
$mail->Body    = 'Hello '.$fname.' '.$lname.',
		<br><br>
		Thank you very much for registering with us.
		<br><br>
		We welcome you to our Frends community warmly.
		<br><br>
		You need to confirm your identity to complete the registration process. Your Security code is " '.$randcode.'. "
		<br>
		Please use this code to activate your account and confirm your identity.
		<br><br><br>
		Here are your account details:
		<br><br>
		E-mail : '.$email.'
		<br>
		Mobile : '.$mobile.'
		<br>
		First Name : '.$fname.'
		<br>
		Last Name : '.$lname.'
		<br><br>
		You can use these details to continue your login.
		<br><br>
		Glad to have you in our record.
		<br><br>
		Regards,<br>
		Webmaster, Frendz Team';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
	echo 'Message could not be sent.';
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	header('Location: newuseradd.php?email='.$email.'&name='.$fname.'&hash='.$password);
}
?>
