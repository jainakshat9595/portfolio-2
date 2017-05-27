<?php
$msg = ''; // To store any error message produced by php
//Host Name : LocalHost
//Username : root
//Password : < blank >
//Database name : frends_db
//$db = new MySQLi('localhost','root','','frends_db');
$db = new MySQLi('mysql.hostinger.in','u767360523_admin','jain1995','u767360523_db');
if($db -> connect_error)
{
	$msg = $db -> connect_error;
}
if($msg) { echo "<h>$msg</h>"; }
?>