<?php
require_once("BaseDeDatos.php");
require_once("funciones.php");
$idViejo = $_GET["idViejo"];
if (!empty($_POST["nombre"])) {
    $sql = 'update Dios set nombre = "' . $_POST["nombre"] . '" where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
if (isset($_POST["rol"])) {
    $sql = 'update Dios set rol = "' . $_POST["rol"] . '" where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
if (isset($_POST["pantheon"])) {
    $sql = 'update Dios set pantheon = "' . $_POST["pantheon"] . '" where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
if (isset($_POST["descripcion"])) {
    $sql = 'update Dios set descripcion = "' . $_POST["descripcion"] . '" where Dios.id=' . $idViejo;
    $conexion->query($sql);
}

if ($_FILES["imagen"]["error"] <= 0) {

    $sql = "select * from Dios WHERE id ='$idViejo'";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $img = $row["url_imagen"];
    $nombre = $row["nombre"];
    unlink("Recursos/img/dioses/" . $img);


    $nombreDeImagenSubida = $_FILES["imagen"]["name"];
    $nombreDeImagenCambiado = funcionCambiarNombreImagen($nombreDeImagenSubida, $nombre);
    $destino = "Recursos/img/dioses/" . $nombreDeImagenCambiado;


    move_uploaded_file(
        $_FILES["imagen"]["tmp_name"],
        $destino
    );

    $sql = 'update Dios set url_imagen = "' . $nombreDeImagenCambiado . '" where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
if (!empty($_POST["id"])) {
    $sql = 'update Dios set id = ' . $_POST["id"] . ' where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
header("Location: index.php");