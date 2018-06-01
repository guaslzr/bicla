<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <header>
        <?php include_once('navigation.php'); ?>
    </header>
    <div class="logo" >
    <img align="center" src="img/logo.png" alt="" width="250vw" >
    </div>
    <form class="form_registro" action="registro.php" method="post">
      <h2 class="titulo">COMPLETA LOS DATOS PARA REGISTRARTE</h2>
      <div class="container">
        <input type="text" name="nombre" placeholder="Nombres" class="mitad" required>
        <input type="text" name="apellidos" placeholder="Apellidos" class="mitad" required>
        <input type="email" name="mail" placeholder="E-mail" class="linea_completa" required>
        <input type="number" name="telefono" placeholder="Telefono" class="linea_completa" required>
        <input type="text" name="user" placeholder="Usuario" class="mitad" required>
        <input type="password" name="contrasena" placeholder="Contraseña" class="mitad" required>
        <input type="submit" value="Registrarse" class="btn">
        <p class="link_sign">Ya tenes una cuenta? <a href="login.html">Ingresa aca</p>
      </div>
    </form>
    <?php include_once('footer.php'); ?>
  </body>
</html>
