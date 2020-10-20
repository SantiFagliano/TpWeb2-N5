<?php

function funcionCambiarNombreImagen($nombreDeImagenSubida, $nombreDeImagenDeseado)
{
    $imagenTipoArchivo = strtolower(pathinfo($nombreDeImagenSubida, PATHINFO_EXTENSION));
    switch ($imagenTipoArchivo) {
        case "jpg":
            return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".jpg";
            break;
        case "png":
            return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".png";
            break;
        case "jpeg":
            return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".jpeg";
            break;
        case "gif":
            return $nombreDeseadoDeLaImagen = $nombreDeImagenDeseado . ".gif";
            break;
        default:
            echo("Error al subir imagen");

            exit();
    }
}
