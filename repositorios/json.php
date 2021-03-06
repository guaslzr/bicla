<?php

function crearJson($key){
    $filename = "datos/$key.json";
    if (!file_exists($filename)) {
        $template = [];
        $template[$key] = [];
        $json = json_encode($template);
        file_put_contents($filename, $json);
    }
}

function obtenerContenido($key){
    crearJson($key);
    $filename = "datos/$key.json";

    $json = file_get_contents($filename);

    $datos = json_decode($json, true);

    return $datos[$key];
}

function guardarContenido($key, $arrayDatos){

    crearJson($key);

    $datos[$key] = $arrayDatos;

    $filename = "datos/$key.json";

    file_put_contents($filename, json_encode($datos));
}

