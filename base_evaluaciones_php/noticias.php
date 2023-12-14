<!DOCTYPE html >
<html lang="es">
<head>
<meta charset="utf-8" />
<title>NOTICIAS PHP</title>
<link href="noticias.php.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
  <header>
      <nav id="botonera_principal">
          <ul>
              <li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
    <h1>NOTICIAS</h1>
  <section id= section2>
  <?php 
              $noticias= array(
              array ('World Press Photo prohíbe el uso de Inteligencia Artificial en su concurso de fotografía', 'Gracias a los comentarios, hemos decidido cambiar las reglas de la categoría Formato abierto de nuestro concurso para excluir las imágenes generadas por IA.','galeria.jpg'), array ('Nuevas herramientas de Tinder para romper el hielo y tener más citas','Entre las novedades se encuentran preguntas de perfil para iniciar conversaciones o etiquetas informativas básicas como hábitos de bebida o mascotas.', 'TINDER.jpg'), array ('WhatsApp cambia y dejará vincular una cuenta con correo electrónico', 'En caso de no poder recibir mensajes de verificación, los usuarios podrán utilizar su email como método de autenticación de la identidad.', 'wap.jpg'), array ('Crea videos sorprendentes con la nueva aplicación de Stability AI', 'La herramienta puede crear contenido con base en fotos generadas por la misma plataforma de IA.','IA.jpg')

              );  
          for ($i=0; $i <count ($noticias); $i++) { 
            ?>

          <div class="contenidohtml">
          <h2><?php echo $noticias[$i] ['0']; ?></h2>
          <p> <?php echo $noticias[$i] ['1']; ?></p>
    <img src= "imagenes/<?php echo $noticias[$i] ['2']; ?>" alt="">
</div>

        </div>
        <?php }?>
        </header>   
        </section>

        </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>
