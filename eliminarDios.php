<?php
require_once("BaseDeDatos.php");

$iddios = $_GET["id"];
/*
$sql = "DELETE FROM Dios WHERE id ='$iddios'";
$conexion->query($sql);
header("Location: index.php");
*/
$sql = "select * from Dios WHERE id ='$iddios'";

$resultado = $conexion->query($sql);

$row = $resultado->fetch_assoc();
$img = $row["url_imagen"];
unlink("Recursos/img/dioses/".$img);

$sql = "DELETE FROM Dios WHERE id ='$iddios'";
$conexion->query($sql);
header("Location: indexLogeado.php");

