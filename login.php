<?php require_once('global.php'); ?>

<?php

require_once('funciones/validaciones.php');
require_once('funciones/auth.php');

$errores = [];

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
    if (isset($_SESSION) && empty($_SESSION)){
    include_once ('navigation.php');
?>
<div class="row">
    <div class="form">
    <form action="" method="post">
        <?php
            if ($errores) {?>
                <div class="error2">
                    <div ><strong>Error!</strong></div>
                    <ul>
                        <?php

                        foreach($errores as $error) {
                        ?>
                            <li><?php echo $error ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
                <h3>¡Hola! Ingresa tus datos</h3>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo ($_POST['email'] ?? '') ?>" placeholder="Email">

                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">

        <p class="message"><input type="checkbox" name="recordarme">Recordarme en este equipo</p>

        <input type="submit" class="button" value="ENTRAR" />
        <p class="message">No estás registrado? <a href="registro.php">Registrarse</a></p>
    </form>
</div>
<?php include_once ('footer.php'); ?>
<?php }else header('Location: index.php') ?>
</body>
</html>
