<?php
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    
    $file=fopen("data.txt","r");
    $finduser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $array = explode("|",$line);
        if(trim($array[0]) == $_POST['user'])
        {
            $finduser=true;
            break;
        }
    }
    fclose($file);

    
    if( $finduser )
    {
        echo $_POST["user"];
        echo 'Este usuario ha sido registrado previamente... \r\n';
        include 'login.php';
    }
    else
    {
        $file = fopen("data.txt", "a");
        fputs($file,$_POST["user"].";".$_POST["pass"]."\r\n");
        fclose($file);
        echo $_POST["user"];
        echo "Usuario registrado correctamente... ";
    }
}
else
{
    include 'login.php';
}
?>