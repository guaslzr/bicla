<?php
    include_once("loader.php");

    if ($auth->loginControl()) {
        //SI la instancia de Auth, haciendo uso de su metodo loginControl(), devuelve true, es porque el usuario ya inicio sesion y no necesitamos mostrarle esta pagina, asi que sistematicamente lo derivamos a su perfil.
        header("Location:perfil.php");
        exit;
	}

	$errores = [];
	if ($_POST) {
        //SI hay $_POST
        $errores = $validator->validarLogin($_POST, $db);
        //llenamos el array de errores, esta vez con nuestra instancia de Validator, haciendo uso de sus metodos.
		if (count($errores) == 0) {
            $email = $_POST["email"];
			// si no hay errores, LOGUEAR
            $auth->login($email);
            //nuestra instancia de Auth usa su metodo login() para loguear al usuario
      		header("Location:perfil.php");
			exit;
		}
	}


?>

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
            <?php if(count($errores) > 0) {?>

              <h3>Ops! Lo siento, tu Usuario o Contraseña son invalidos</h3>
              <a href="login.php">Volver</a>

            <?php } else {?>
            <form action="login.php" method="post">

                <h3>¡Hola! Ingresa tus datos</h3>
                <input type="text" class="form-control" type="text" name="email"placeholder="Email">

                <input type="password" class="form-control" type="password" name="password" placeholder="Contraseña">

        <p class="message"><input type="checkbox" name="recordarme">Recordarme en este equipo</p>

        <input type="submit" class="button" value="ENTRAR" />
        <p class="message">No estás registrado? <a href="registro.php">Registrarse</a></p>
        <?php } ?>
    </form>
</div>
<?php include_once ('footer.php'); ?>
<?php }else header('Location: index.php'); ?>
</body>
</html>
