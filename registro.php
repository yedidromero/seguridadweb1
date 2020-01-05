<title>Yedid Romero Aguirre | Desarrollo web avanzado</title>
	<script>
    function registrado(){
		alert("Se ha registrado correctamente el usuario, ahora inicia sesión");
		window.location="login.php";}
		</script>
<?php
$user    = SHA1($_POST['user']);
$pass    = SHA1($_POST['pass']);

function yaRegistro(){
		echo $user;
        echo 'Este usuario ha sido registrado previamente...';
        include 'login.php';
}

if(isset($user) && isset($pass))
{
    
    $file=fopen("data.txt","r");
    $finduser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $array = explode("|",$line);
        if(trim($array[0]) == $user)
        {
            $finduser=true;
            break;
        }
    }
    fclose($file);

    
    if( $finduser )
    {
		yaRegistro();

    }
    else
    {
		$file = fopen("data.txt", "a+");
		$leer = fread($file, filesize("data.txt"));
		$verificar = explode(chr(13).chr(10), $leer);
		for ($i=0; $i< count($verificar); $i++){
			
			}
		
        fputs($file,$user."|".$pass.chr(13).chr(10));
        fclose($file);
        echo $user;
		echo "\r\n";
        echo "\r\n Usuario registrado correctamente... ";
		echo "<script>registrado()</script>";
		
	
 }
}
else
{
    include 'login.php';
}
?>