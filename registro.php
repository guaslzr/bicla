<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<title>Registro</title>
</head>
  <body>
    <header>
        <?php include_once('navigation.php'); ?>
    </header>
    <div class="login-page">
      <div class="form">
        <form class="register-form">
          <input type="text" name="nombre" placeholder="Nombre" class="mitad" required>
          <input type="text" name="apellidos" placeholder="Apellido" class="mitad" required>
          <input type="text" name="user" placeholder="Usuario" class="mitad" required>
          <input type="password" placeholder="Contraseña" required/>
          <input type="password" name="contrasena" placeholder="Confirma tu contraseña" class="mitad" required>
          <input type="email" name="name" placeholder="Ingresa tu email" required/>
          <input type="text" name="telefono" placeholder="Numero de telefono (opcional)" class="linea_completa">
          <button type="submit" name="submit">Registrarse</button>
          <p class="message">Ya estás registrado? <a href="login.php">Ingresa acá</a></p>
        </form>
      </div>
    </div>
    <?php include_once('footer.php'); ?>
  </body>
</html>
