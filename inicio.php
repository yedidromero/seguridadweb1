<script>
function error(){
	alert("no estas logueado");
	window.location = "login.php";
	}
	</script>

<?php
session_start();
if (isset($_SESSION["usuario"])){
	echo "Bienvenido ".$_SESSION["usuario"];}
	
	?>
<!doctype html>
<html>
<head>
<title>Yedid Romero Aguirre | Desarrollo web avanzado</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
body {
	background-color: #036;
}
body,td,th {
	color: #FFF;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
</style>
</head>
  <body link="#FFFFFF" vlink="#FFFFFF" alink="#FFFFFF">
    <h1>PÁGINA DE INICIO</h1>
    <h1>Trabajo: Desarrollo web avanzado</h1>
    <h2>ALUMNO: YEDID ROMERO AGUIRRE</h2>
    <p>&nbsp;</p>
    <h3>MATERIA: COMPUTACIÓN EN EL SERVIDOR WEB</h3>
  <p>&nbsp;</p>
  <h4><a href="login.php">REGRESAR AL LOGIN</a></h4>
  </body>
</html>