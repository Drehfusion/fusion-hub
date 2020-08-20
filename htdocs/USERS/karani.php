<?php 
$con= mysqli_connect("localhost","root","","kimathi");
if(!$con)
{
    die('database connection failed' . mysql_errno());
}
?>