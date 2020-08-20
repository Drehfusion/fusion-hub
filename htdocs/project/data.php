<?php
//db details
$dbhost='localhost';
$dbusername='root';
$dbpassword='';
$dbname='birth1';

//connecct and select the database
$db=new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

if($db->connect_error) {
	die("connection failed:". mysqli_connect_error());
}
?>