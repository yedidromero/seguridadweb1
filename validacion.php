<script>
function index(){
	window.location="inicio.php";}
	</script>
<?php  
/*session_start();
$user    = $_POST['user'];
$pass    = $_POST['pass'];

$abrir=fopen("data.txt","r") or die ("Error - No fue posible abrir el archivo");

while ($linea=fgets($abrir))
{
 $partes=explode('|',trim($linea));
 }
if (($user==$partes[0]) && ($pass==$partes[1]))
{
	echo 'hola';
//header('location:inicio.php');
}
else {
	echo 'error';   
      /*  echo "Nombre de usuario o contraseña inválidos";
		echo "Vuelve a intentarlo";
		include 'login.php';
}

fclose("data.txt");*/

session_start();
$user    = $_POST['user'];
$pass    = SHA1($_POST['pass']);

$abrir=fopen("data.txt","r") or die ("Error - No fue posible abrir el archivo");
$validador = 0;
		$leer = fread($abrir, filesize("data.txt"));
		$verificar = explode(chr(13).chr(10), $leer);
		for ($i=0; $i< count($verificar)-1; $i++){
			$datos = explode("|", $verificar[$i]);
			$_SESSION["usuario"] = $user;
			if ($user == $datos[0] && $pass == $datos[1]){
				$validador = 1;
				echo "EXCELLENT!!";
				echo "<script>index()</script>";
				break;
			}else{
				$validador =0;
				}
			}	
			if($validador == 0){
				echo "Nombre de usuario o contraseña inválidos";
		echo "Vuelve a intentarlo";
		include 'login.php';
			}
				
				

fclose("data.txt");

?>
