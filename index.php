<?php
include("admin/bd.php");

$sentencia=$conexion->prepare("SELECT * FROM  `tbl_servicios` ");
$sentencia->execute();
$lista_servicios=$sentencia->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aromas de mi tierra</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/paginas/index.css" />
    <link rel="stylesheet" href="fuente/Montserrat-Regular.ttf" />
  </head>
  <body>
    <header>
      <nav id="menu-principal">
        <a href="index.php">Inicio</a>
        <a href="portafolio.php">Portafolio</a>
        <a href="#">Comprar</a>
        <a href="#">Equipo</a>
      </nav>

      <div class="contenedor-logo">
        <img
          class="contenedor-logo__img"
          src="./Imagenes/cafe-logo-crema.png"
          alt="Logo-Café-tipico"
        />
      </div>

      <div class="contenedor-icono-bolsa">
        <a href="">
          <i class="fa-solid fa-bag-shopping icono-bolsa"></i>
        </a>
      </div>
    </header>

    <section class="contenedor-img-cafe">
      <h1 class="texto-cafe">
        El mejor café <br />
        en tu hogar
      </h1>
      <img
        class="imagen-cafe"
        src="Imagenes/imagen-cafe.avif"
        alt="imagen-cafe"
      />
    </section>

    <main class="contenedor-padre-desktop">
      <div class="padre-desktop">
        <section class="section-video">
          <div class="contenedor-video">
            <iframe
              class="video"
              width="853"
              height="480"
              src="https://www.youtube.com/embed/df3JeXVWYWA"
              title="SPOT CAFÉ ☕️ | Video Producto | Broll"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
            >
            </iframe>
          </div>
        </section>
        <br/>

        <h2>SERVICIOS</h2>
        
        <section class="contenedor-moliendas">
        <?php foreach($lista_servicios as $registros){ ?>
          <article class="moliendas">
            <h2 class="titulo-moliendas"><?php echo $registros["titulo"];?></h2>
            <img
              class="imagenes-molienda"
              src="Imagenes/molienda-fina.jpg"
              alt="imagen-1" />
            <p class="text-moliendas"><?php echo $registros["descripcion"];?>
            </p>
          </article>
        <?php } ?>
        </section>
      </div>

      <section class="contenedor-img-desktop">
        <img
          class="imagen-cafe-desktop"
          src="Imagenes/imagen-cafe.avif"
          alt="imagen-cafe"
        />
      </section>
    </main>

    <section class="mapa-section">
      <div class="contenedor-mapa">
        <iframe
          class="mapa"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.093643918061!2d-75.61649412552087!3d6.251390926266697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e44284d7aad9321%3A0x782a573d6e0b24f8!2sCl%2038%20%2394-40%2C%20Campo%20Alegre%2C%20Medell%C3%ADn%2C%20La%20Am%C3%A9rica%2C%20Medell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses-419!2sco!4v1707939436670!5m2!1ses-419!2sco"
          width="100%"
          height="100%"
          frameborder="0"
        >
        </iframe>
      </div>
    </section>

    <footer>
      <a class="redes" href="https://www.facebook.com/">
        <i class="fa-brands fa-facebook icon-redes" style="color: #512615"></i>
        <span class="footer-facebook">Facebook</span>
      </a>

      <img
        class="cafe-corazon"
        src="Imagenes/cafe-corazon.png"
        alt="cafe-corazon"
      />

      <a class="redes" href="https://www.instagram.com/"
        ><i
          class="fa-brands fa-instagram icon-redes"
          style="color: #512615"
        ></i>
        <span class="footer-instagram">Instagram</span>
      </a>
    </footer>
  </body>
</html>
