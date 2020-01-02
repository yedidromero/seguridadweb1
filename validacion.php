<?php  
session_start();
$user    = $_POST['user'];
$pass    = $_POST['pass'];

$abrir=fopen("data.txt","r") or die ("Error - No fue posible abrir el archivo");

while ($linea=fgets($abrir))
{
 $partes=explode('|',trim($linea));
 }
if (($user==$partes[0]) && ($pass==$partes[1]))
{
	//echo 'hola';
header('location:inicio.php');
}
else {
//	echo 'error';   
        echo "Nombre de usuario o contraseña inválidos";
		echo "Vuelve a intentarlo";
		include 'login.php';
}

fclose("data.txt");

?>
