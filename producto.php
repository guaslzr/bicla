<?php include_once('global.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="css/producto.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
    <title>Producto</title>
  </head>
  <body>
    <header>
      <?php include_once('navigation.php') ?>
      </header>

        <main class="contenedor">

          <!-- Imagenes del producto-->
          <div class="imagenes">
            <img data-image="black" class="active" src="img/producto/FX1_negro.jpg" alt="">
            <img data-image="blue" src="img/producto/FX1_azul.jpg" alt="">
          </div>


          <!-- Descripcion -->
          <div class="descripcion">

            <div class="descripcion-producto">
              <span>Bicicletas Híbridas</span>
              <h2>FX 1</h2>
              <p>La FX 1 es una bici híbrida con un cuadro de aluminio ligero y mejoras en las partes que hacen la mayor diferencia en rendimiento.
              Es perfecta para cualquier persona que busca salir más, pedalear en familia, hacer un poco de ejercicio o trasladarse desde y hacia el
              trabajo en una bici versátil respaldada por una garantía de por vida.</p>
            </div>

            <!-- Preferencias -->
            <div class="preferencias-producto">

              <!-- Color del Producto -->
              <div class="color-producto">
                <span>Color</span>

                <div class="color-eleccion">
                  <div>
                    <input data-image="black" type="radio" id="black" name="color" value="black">
                    <label for="black"><span></span></label>
                  </div>
                  <div>
                    <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                    <label for="blue"><span></span></label>
                  </div>
                </div>
              </div>

              <div class="talle">
                <span>Talle</span>

                <div class="talle-opcion">
                  <button>P</button>
                  <button>M</button>
                  <button>G</button>
                  <button>XG</button>
                </div>
                <label>Modelo 17446</label>
              </div>
            </div>

            <!-- Precio -->
            <div class="precio">
              <span>$ 18000</span>
              <a href="#" class="agregar-carrito">Agregar al carrito</a>
            </div>
          </div>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
        <script src="js/producto.js" charset="utf-8"></script>

   <?php include_once('footer.php'); ?>
  </body>
</html>
