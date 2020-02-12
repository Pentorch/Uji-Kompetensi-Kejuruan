<?php  

$host = "localhost";
$user = "root";
$pass = "";
$db   = "inventaris";

$dbconnect = new mysqli("$host","$user","$pass","$db");
if ($dbconnect->connect_error) 
{
	echo "koneksi gagal".$dbconnect->connect_error;
}
?>