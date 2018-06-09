<?php
require_once('repositorios/usuarios.php');

function validarRegistro($datos){
    $errores = [];

    if (trim($datos['nombre']) == '') {
        $errores['nombre'] = 'Debe ingresar su Nombre';
    }

    if (trim($datos['apellido']) == '') {
        $errores['apellido'] = 'Debe ingresar su Apellido';
    }

    if (trim($datos['username']) == '') {
        $errores['username'] = 'Debe ingresar un Nombre de Usuario';
    } elseif (buscarUsuario(USERNAME_FIELD, $datos['username'])) {
        $errores['username'] = 'El Nombre de Usuario ingresado ya existe en nuestra base de datos';
    }

    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {

        $errores['email'] = 'Debes ingresar un Email válido';

    } elseif ($datos['email'] != $datos['email_confirm']) {

        $errores['email_confirm'] = 'El Email no coincide';

    } elseif (buscarUsuario(EMAIL_FIELD, $datos['email'])) {

        $errores['email'] = 'El Email ingresado ya existe';
    }

    if (strlen($datos['contrasena']) < 6) {
        $errores['contrasena'] = 'La contraseña debe tener al menos 6 caracteres';
    } elseif ($datos['contrasena'] != $datos['contrasena_confirm']) {
        $errores['contrasena_confirm'] = 'La Contraseña y su confirmación deben coincidir';
    }

    if ($_FILES['avatar']['error'] == UPLOAD_ERR_NO_FILE) {
        $errores['avatar'] = 'Debe cargar una imagen de perfil';
    }

    if (!isset($datos['terminos'])) {
        $errores['terminos'] = 'Debe aceptar los Términos y Condiciones';
    }

    return $errores;
}

function validarLogin($datos)
{
    $arrayDeErrores = [];

    if (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $arrayDeErrores[] = 'El email es invalido';
    }

    if (empty($datos['contrasena'])) {
        $arrayDeErrores[] = 'Ingrese un password';
    }

    return $arrayDeErrores;
}