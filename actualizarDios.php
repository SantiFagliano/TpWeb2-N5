<?php
require_once("BaseDeDatos.php");

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
if (!empty($_POST["id"])) {
    $sql = 'update Dios set id = ' . $_POST["id"] . ' where Dios.id=' . $idViejo;
    $conexion->query($sql);
}
header("Location: index.php");