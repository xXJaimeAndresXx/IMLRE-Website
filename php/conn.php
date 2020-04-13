<?php 

$dbServername= 'localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName='imlre';

$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if($conn){
	//echo "Conexion Exitosa";
}
else{
	echo "Conexion no exitosa";
}

 ?>