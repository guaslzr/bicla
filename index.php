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
    <link rel="stylesheet" href="css/home-style.css">

    <title>BICLA</title>
  </head>
  <body>
    <header>
      <?php include_once('navigation.php') ?>
      </header>
        <div class="banner1" style="display: grid;">
        <img src="img/bg.png">
        </div>
          <section class="options">
              <div class="container">
                  <img src="img/arma_bici-img.png" href="#" class="image">
                  <div class="overlay">
                     <div class="text">ARMA TU BICI</div>
                  </div>
              </div>
              <div class="container">
                  <img src="img/compra_bici-img.png" href="#" class="image">
                  <div class="overlay">
                    <div class="text">COMPRA UNA BICI</div>
                  </div>
              </div>
              <div class="container">
                  <img src="img/accesorios_bici-img.png" href="#"  class="image">
                  <div class="overlay">
                    <div class="text">VER ACCESORIOS</div>
                  </div>
              </div>
          </section>
   <?php include_once('footer.php'); ?>
  </body>
</html>
