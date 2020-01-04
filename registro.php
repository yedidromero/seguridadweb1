<?php
$user    = $_POST['user'];
$pass    = SHA1($_POST['pass']);

function yaRegistro(){
        echo $user;
        echo 'Este usuario ha sido registrado previamente...'.'\r\n';
        include 'login.php';
}

function noRegistro(){
           $file = fopen("data.txt", "a+");
        $leer = fread($file, filesize("data.txt"));
        $verificar = explode(chr(13).chr(10), $leer);
        for ($i=0; $i< count($verificar); $i++){
            echo $verificar[$i]."<br>";
            }
        
        fputs($file,$user."|".$pass.chr(13).chr(10));
        fclose($file);
        echo $user;
        echo "\r\n";
        echo "\r\n Usuario registrado correctamente... ";
        
    
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
        noRegistro();
    
 }
}
else
{
    include 'login.php';
}
?>