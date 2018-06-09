<<<<<<< HEAD
<?php
session_start();

require_once ('funciones/auth.php');
require_once ('repositorios/usuarios.php');

if (!isLoggedIn()){
    if (isset($_COOKIE['user'])) {
        $usuario = buscarUsuario('id', $_COOKIE['user']);
        
        unset($usuario['contrasena']);
        $_SESSION['user'] = $usuario;
    }
=======
<?php
session_start();

require_once ('funciones/auth.php');
require_once ('repositorios/usuarios.php');

if (!isLoggedIn()){
    if (isset($_COOKIE['user'])) {
        $usuario = buscarUsuario('id', $_COOKIE['user']);
        
        unset($usuario['contrasena']);
        $_SESSION['user'] = $usuario;
    }
>>>>>>> 39a09182227abf10374ec1eeefead0dc6207daf7
}