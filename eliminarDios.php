<?php
require_once("BaseDeDatos.php");

$iddios = $_GET["id"];
$sql = "DELETE FROM Dios WHERE id ='$iddios'";
$conexion->query($sql);
header("Location: index.php");
