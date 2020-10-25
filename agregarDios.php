<?php
require_once("BaseDeDatos.php");
require_once("funciones.php");

$id = $_POST["id"];
$rol = $_POST["rol"];
$panteon = $_POST["pantheon"];
$descripcion = $_POST["descripcion"];
$direccionCarpetaImagenes = "Recursos/img/dioses/";

$nombreDeImagenDeseado = $_POST["nombre"];


if ($_FILES["imagen"]["error"] > 0) {

    header("Location: nuevoDios.php");
    exit();
} else {
    $nombreDeImagenSubida = $_FILES["imagen"]["name"];

    $nombreDeImagenCambiado = funcionCambiarNombreImagen($nombreDeImagenSubida, $nombreDeImagenDeseado);

    $destino = $direccionCarpetaImagenes . $nombreDeImagenCambiado;

    move_uploaded_file(
        $_FILES["imagen"]["tmp_name"],
        $destino
    );
    $sql = "INSERT INTO Dios(id, nombre, pantheon, rol, url_imagen, descripcion) 
            VALUES (".$id.",'".$nombreDeImagenDeseado."','".$panteon."','".$rol."','".$nombreDeImagenCambiado."','".$descripcion."')";

    $conexion->query($sql);
    header("Location: index.php");
    exit();
}
