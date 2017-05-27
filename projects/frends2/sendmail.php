	<?php

	//mysql_connect("localhost", "root", "") or die("mysql connection is failure.");
	//mysql_select_db("frends") or die("Database does not exists.");
	mysql_connect("mysql5.000webhost.com", "a5354068_users", "jain1995") or die("mysql connection is failure.");
	mysql_select_db("a5354068_frends") or die("Database does not exists.");
	
	$email = $_GET['email'];
	$result = mysql_query("SELECT * FROM `users` WHERE `email` = '$email'");
	$row = mysql_fetch_array($result);
	$mobile = $row['mobile'];
	$username = $row['username'];
	$password = $row['password'];
	
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug = 1;
	$mail->SMTPSecure = 'ssl';	
	$mail->isSMTP();                                    
	$mail->SMTPAuth = true;                             
	
	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'info.gangfrends@gmail.com';      
	$mail->Password = 'jainranjan';                     
	                          
	$mail->Port = 587;                                  
	
	$mail->From = 'info.gangfrends@gmail.com';
	$mail->FromName = 'Frendz - Reset Password';
	$mail->addAddress($email);              
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	
	//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Frendz - Reset Password';
	$mail->Body    = 'Hello,
		<br><br>
		You recently requested for your password recovery.
		<br><br><br>
		Here are your account details:
		<br><br>
		e-mail : '.$email.'
		<br>
		Mobile : '.$mobile.'
		<br>
		Username : '.$username.'
		<br>
		Password : '.$password.'
		<br><br>
		You can use these details to continue your login.
		<br><br>
		Glad to have you in our record.
		<br><br>
		Regards,<br>
		Frendz00.comuf.com';
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.location.href='reset_pass.php?email=$email&status=sent'
						</SCRIPT>");
	}
?>
