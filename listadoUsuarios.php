<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PROYECTO 5</title> 
</head>
<body>
    <a href="insertarUsuario.php">Insertar nuevo usuario</a>
    <?php
$conector=new mysqli ("localhost","root","","juegos");
if ($conector->connect_errno){
    echo "Fallo al conectar a Mysql: ".$conector->connect_errno;
}
else {
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $curso=$_POST['curso'];
    $puntuacion=$_POST['puntuacion'];

    $consulta="INSERT INTO usuarios (nombre, apellidos, edad, curso, puntuacion) values ('$nombre','$apellidos',$edad,$curso,$puntuacion)";
    $insert=$conector->query($consulta);
    $resultado=$conector->query($consulta ="SELECT * from usuarios");

    foreach ($resultado as $fila) {
        echo"<br>id: ".$fila["id"];
        echo"<br>Nombre: ".$fila["nombre"];
        echo"<br>Apellidos: ".$fila["apellidos"];
        echo"<br>Edad: ".$fila["edad"];
        echo"<br>Curso: ".$fila["curso"];
        echo"<br>Puntuacion: ".$fila["puntuacion"];
        echo"<br>";
    }
}
?>
</body>
</html>
