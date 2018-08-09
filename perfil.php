<?php
  include("loader.php");
  if (!$auth->loginControl())
  {
     header("Location: registro.php");
     exit;
  }

  $usuarioLogueado = $auth->usuarioLogueado($db);
  $username = $usuarioLogueado->getEmail();
  $photopath = "img/" . $usuarioLogueado->getEmail() . ".jpeg";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
			<?php include_once('navigation.php'); ?>
    <main class="flex-container">
      <!-- Este bloque de codigo va a aparecer si Y SOLO SI el usuario esta logueado
        haciendo uso de nuestro controlador de login -->
      <?php if ($auth->logincontrol()) { ?>

      <h3> Bienvenido <?=$username ?> </h3>
      <img style="max-width: 250px;" src="<?=$photopath;?>">


      <a href="logout.php">Logout</a>

      <?php } else { ?>
      <!-- Si el usuario no esta logueado, va a aparecer un aviso de esto -->
      <h1>No estás logueado.</h1>

      <?php } ?>
      <!-- De esta manera controlamos que si alguien quiere acceder a perfil.php y no es
        usuario registrado en nuestro sistema, no puede ver el contenido de ningun perfil -->
    </main>
  <?php include_once('footer.php'); ?>
</body>
</html>
