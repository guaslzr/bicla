<?php require_once('global.php'); ?>

<?php
 require_once('funciones/validaciones.php');
 require_once('funciones/auth.php');
?>

<?php
 $errores=[];
 //var_dump($_POST);

 if ($_POST) {
  $errores = validarLogin($_POST);
  if (!$errores) { 
      $errores = loguear($_POST);

      if (!$errores) {
          header('location: index.php');
          exit;
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>
  <body>
    <?php
      include_once ('navigation.php');
    ?>
    
    <div class="row">
      <?php
        if($errores){?>
          <div class="alert alert-danger">
          <div><strong>Error!</strong></div>
              <ul>
                <?php
                  foreach($errores as $error) {
                ?>
                  <li><?php echo $error ?></li>
                <?php } ?>
              </ul>
          </div>
      <?php } ?>

      <div class="form">
          <form action="" method="POST">
            <img class="logo" src="img/bicla_black.png" width="100px;">

            <input type="text" class="form-control" id="email" name "email" value="<?php echo ($_POST['email'] ?? '') ?>" placeholder="Email"/>

            <input type="password" class="form-control" id="contrasena" name "contrasena" placeholder="Contraseña"/>

            <div class="checkbox">
              <label>
                  <input type="checkbox" id="chk-recordarme" name="recordarme"> Recordarme en este equipo
              </label>
            </div>

            <input type="submit" class="button" value="ENTRAR" /> 

            <p class="message">No estás registrado? <a href="registro.php">Registrarse</a></p>
          </form>      
      </div>
    </div>
    
    <?php include_once ('footer.php'); ?>
  </body>
</html>
