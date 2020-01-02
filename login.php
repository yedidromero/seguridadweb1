<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea de Yedid</title>
</head>

<body>
<p>Ingresa con tu usuario y contraseña:</p>
<form id="form1" name="form1" method="post" action="validacion.php">
  <table width="200" border="1">
    <tr>
      <td>USUARIO</td>
      <td><label for="user"></label>
      <input type="text" name="user" id="user" /></td>
    </tr>
    <tr>
      <td>CONTRASEÑA</td>
      <td><label for="pass"></label>
      <input type="text" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
    </tr>
  </table>
</form>
<p>Regístrate, coloca un usuario y contraseña:</p>
<form action="registro.php" method="post">
  <table width="409" border="1">
    <tr>
      <td width="182">USUARIO NUEVO</td>
      <td width="211"><label for="user"></label>
      <input type="text" name="user" id="user" /></td>
    </tr>
    <tr>
      <td>CONTRASEÑA</td>
      <td><label for="pass"></label>
      <input type="text" name="pass" id="pass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="enviar" id="enviar" value="Registrar" /></td>
    </tr>
  </table>
</form>
</body>
</html>