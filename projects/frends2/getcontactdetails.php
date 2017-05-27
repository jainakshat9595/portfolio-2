<?php

require 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$db -> query("INSERT INTO contact_us (name,email,phone,message) VALUES ('$name','$email','$phone','$message')");
//send mail script to bee added
header('Location: index.php?contact=send');

?>
