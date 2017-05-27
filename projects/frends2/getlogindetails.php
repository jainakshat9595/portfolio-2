<?php
session_start();
require 'db_connect.php';

$email = $_POST['emaillog'];
$hash = md5($_POST['passwordlog']);

$res = $db -> query("SELECT * FROM new_reg WHERE email='".$email."' AND password='".$hash."' AND actstat='1'");

if( $res->num_rows > 0)
{
	$_SESSION['status'] = 1;
	$_SESSION['user']['email'] = $email;
	while( $row = $res -> fetch_assoc())
	 { $_SESSION['user']['name'] = ''.$row['fname'].' '.$row['lname']; }
	header('Location: index.php?userstat=logged');
}
else
{
	echo 'prob';
}
?>
