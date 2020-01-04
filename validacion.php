<title>Yedid Romero Aguirre | Desarrollo web avanzado</title>
<script>
function index(){
	window.location="inicio.php";}
	</script>
    <script>
	function error(){
		alert("usuario o contraseña invalidos");
		window.location="login.php";}
		</script>
<?php  

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
			if($validador ==0){
			echo "<script>error()</script>";
			}
				
				
fclose("data.txt");
?>