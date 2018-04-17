<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Insertar Usuario</title>
</head>
<body>
<form class="input" action="listadoUsuarios.php" method="post"> 
 <hr />
 <h3>Insertar Usuario</h3>
 <!--Nombre Usuario-->
 <label for="nombre">Nombre:</label><br>
 <input type="text" name="nombre" maxlength="32" required>

<br/><br/>
 <label for="apellidos">Apellidos:</label><br>
 <input type="text" name="apellidos" maxlength="32" required>
 
 <br/><br/>
 <label for="edad">Edad:</label><br>
 <input type="text" name="edad" maxlength="32" required>

<br/><br/>
  <label for="curso">Curso:</label><br>
  <input type="text" name="curso" maxlength="32" required>

<br/><br/>
  <label for="puntuacion">Puntuacion:</label><br>
  <input type="text" name="puntuacion" maxlength="32" required>
 
  <br/><br/>
 <input type="submit" name="enviar" value="Insertar">
 <input type="reset" name="clear" value="Borrar">

</body>
</html>