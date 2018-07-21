<?php require_once ('global.php');?>

<?php
require_once ('funciones/auth.php');
require_once ('funciones/validaciones.php');
?>

<?php
$errores=[];

if ($_POST){

  $errores = validarRegistro($_POST);

  if(!$errores){

    $errores=registrar($_POST);

    if (!$errores){
      header ('location: index.php');
      exit;
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <?php
      if (isset($_SESSION) && empty($_SESSION)){
      $pageTitle='Registracion';
      include_once('navigation.php');
    ?>

    <div class="login-page">
      <?php
      if($errores){
      ?>
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
        <form action="" method="POST" enctype="multipart/form-data" class="register-form">
          <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo($_POST['nombre'] ?? '') ?>" placeholder="Ingresa tu Nombre" required/>

          <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo($_POST['apellido'] ?? '') ?>" placeholder="Ingresa tu Apellido" required/>

          <input type="text" class="form-control" id="username" name="username" value="<?php echo ($_POST['username'] ?? '') ?>" placeholder="Ingresa tu Nombre de Usuario" require/>

          <input type="email" class="form-control" id="email" name="email" value="<?php echo ($_POST['email'] ?? '') ?>"placeholder="Ingresa tu email" required/>

          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña" required/>

          <input type="password" class="form-control" id="contrasena-confirm" name="contrasena-confirm" placeholder="Confirma tu contraseña" required/>

          <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo ($_POST['telefono'] ?? '') ?>"placeholder="Numero de telefono (opcional)">

          <label for="file" class="message">Selecciona una foto de perfil</label>

          <input type="file" name="avatar" accept="image/*" />

          <p class="message"><input type="checkbox" name="terminos">Acepto los términos y condiciones</p>

          <input type="submit" class="button" value="Registrarse"/>

          <p class="message">Ya estás registrado? <a href="login.php">Ingresa acá</a></p>
        </form>
      </div>
    </div>
     <?php include_once('footer.php'); ?>
     <?php }else header('Location: index.php') ?>
  </body>
</html>
