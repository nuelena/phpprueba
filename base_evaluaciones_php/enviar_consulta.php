<?php
$nombre= $_POST ['nombre'];
$apellido= $_POST ['apellido'];
$correo= $_POST ['correoelectronico'];
$consulta= $_POST ['consulta'];

include ("conexion.php");

mysqli_query($conexionBD, "INSERT INTO consultas VALUES(DEFAULT, '$nombre', '$apellido', '$correo', '$consulta')");

header("location:../contacto.php?enviar");
?>