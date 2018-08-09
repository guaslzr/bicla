<?php

	include_once("loader.php");
	require_once("classes/Usuario.php");

	//como solamente registro con email, creo variable vacia para llamarla en el Value del campo email del form
	$emailDefault = "";

	$errores = [];

	if ($_POST) {
		//Lleno el array de errores como antes, pero usando la instancia del objeto Validator
		$errores = $validator->validarInformacion($_POST, $db);


		if (!isset($errores["email"])) {
			//si no hay errores en el mail, lo guardo para el caso que la pass este mal, asi lo mantengo en el form y el usuario no tiene que ponerlo de nuevo
			$emailDefault = $_POST["email"];
		}

		if (count($errores) == 0) {
			//Si count() de $errores = 0, creo mi nueva instancia de usuario
			$usuario = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["username"], $_POST["email"], $_POST["password"]);
			//Como en ESTE caso mi clase usuario tiene tambien la responsabilidad de guardar su imagen, la guardamos
			$usuario->guardarImagen($usuario->getEmail());
			//Aca guardamos el user en nuestra base de datos
			$usuario = $db->guardarUsuario($usuario);
			//Lo pasamos por auth para derivarlo al perfil
			$auth->login($_POST["email"]);
			header("Location: index.php");
			exit;

		}
	}

	//Aca, si hay sesion iniciada, no tiene por que ver el registro, asi que se deriva al perfil directamente en caso de que quiera ingresar a registro.php
	if ($auth->loginControl()) {
		header("Location:perfil.php");
		exit;
	}

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
      <div class="form">
        <form  class="register-form" action="registro.php" method="post" enctype="multipart/form-data">
          <input type="text" class="form-control" "nombre" name="nombre" type="name" value="" placeholder="Ingresa tu Nombre" required/>

          <input type="text" class="form-control"  name="apellido" type="apellido" value="" placeholder="Ingresa tu Apellido" required/>

          <input type="text" class="form-control"  name="username" type="username" value="" placeholder="Ingresa tu Nombre de Usuario" require/>

          <input type="email" class="form-control" name="email" value="<?=$emailDefault?>" placeholder="Ingresa tu email" required/>

          <input type="password" class="form-control" type="password" name="password" placeholder="Ingrese Contraseña" required/>

          <input type="password" class="form-control" type="password" name="cpassword" placeholder="Confirma tu contraseña" required/>

          <label for="file" class="message">Selecciona una foto de perfil</label>

          <input type="file" name="avatar" />

          <p class="message"><input type="checkbox" name="terminos" value="">Acepto los términos y condiciones</p>

          <input type="submit" class="button" value="Registrarme"/>

          <p class="message">Ya estás registrado? <a href="login.php">Ingresa acá</a></p>
        </form>
      </div>
    </div>
     <?php include_once('footer.php'); ?>
  </body>
</html>
