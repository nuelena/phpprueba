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
        </nav>
</ul>
        <div id="marca">
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php
        $Nombre= "Elena";
        $Apellido= "Ramos";
        $Fecha= 1989;
        "<h3> the Force be with you</h3>";
        ?>
    </div>
    <div id="uni4_2">
        <?php
        $cadena = "<<<FIN
               EVALUACIÓN
               INTEGRADORA
               PHP y MySQL
               FIN";
        ?>
    </div>
    <div id="uni4_3"></div>
    <?php
    $nombre= "Elena";
    $edad= 34;
    $boolean= false;
    echo "<h3> Bienvenido ". "$nombre </h3>";
    echo "<p>  Edad: ". "$edad </p>";
    ?>
    <div id="uni4_4">
        <?php
        $edad = 34;
        $curso = 2;
        $unidades = 10;
    echo "<p>curso: ".$curso." </p>";
    echo "<p>unidades: ".$unidades."</p>";
    echo "<p> unidades por cursar: ".($curso+$unidades)."</p>";
        ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>

</body>
</html>