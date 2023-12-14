<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos - Unidad VIII</h2>

        <div id="Contactenos">
            <h2>Datos de Contacto</h2>
        <form  method="POST" action="contacto.php">
            <input type="text" placeholder="Nombre" name= "nombre" required maxlength="30">
            <input type="text" placeholder="Apellido" name= "apellido" required maxlength="50">
            <input type="email" placeholder="Correo Electrónico" name= "correoelectrónico" required maxlength="100">
            <textarea type="text" placeholder="Consulta" name= "consulta" required min="0" max="300">
            <input type="submit" value="ENVIAR">
        </form>
</div>
<?php 
    if(isset($_GET ['enviar'])){
        echo "<p>la consulta fue enviada.</p>";   
    }
    ?>



    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>