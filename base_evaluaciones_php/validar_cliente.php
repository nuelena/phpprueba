<?php session_start(); ?>
<?php
$correoelectronico_clientes= $_POST ['correoelectronico'];
$contrasena_clientes= $_POST ['contrasena'];
if ($correoelectronico_clientes == 'cliente@gmail.com' && $contrasena_clientes == 'phpintermedio'){
    $_SESSION['clientes']= $contrasena_clientes;
header ("Location: ../clientes.php");
} else {
    header ("Location: ../clientes.php?error");
}
?>