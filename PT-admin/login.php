<?php

$dbhost = "bnazaqudbafe8yuyljcr-mysql.services.clever-cloud.com:3306";
$dbuser = "u7cq07dkrxfcbyrq";
$dbpass = "lCtSCj3tuSdxbGBQWQuM";
$dbname = "bnazaqudbafe8yuyljcr";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	//header("Location: pagina.html")
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: login.html");
	//echo "No ingreso"; 
}
	


?>