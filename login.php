<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css?family=Sunflower:300" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <title>Login</title>
      </head>
  <body>
  <header>
    <?php include_once('navigation.php'); ?>
  </header>
        <div class="login-page">
          <div class="form">
            <form class="login-form">
              <img class="logo" src="bicla_black.png" width="100px;">
              <input type="text" placeholder="usuario"/>
              <input type="password" placeholder="password"/>
              <button>ENTRAR</button>
              <p class="message">No estás registrado? <a href="registro.php">Registrarse</a></p>
            </form>
          </div>
        </div>
          <?php include_once('footer.php'); ?>
      </div>
  </body>
</html>
