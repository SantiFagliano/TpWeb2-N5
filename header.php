<?php
require_once ("BaseDeDatos.php");
require_once ("Consultas.php");
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="Recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="Recursos/css/estilos.css">
    <script src="Recursos/js/functions.js"></script>


    <title>SmiteDex</title>
</head>

<body>
<header class="">
    <nav class="d-flex flex-row b-3 p-2 justify-content-between">
        <div class="centrar">
            <a href="index.php"><img src="Recursos/img/logo.png" alt="Logo"></a>
        </div>
        <div class="mt-4">
            <form class="formulario d-flex flex-row justify-content-end" action="#">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control mr-1 mb-1">
                <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña"
                       class="form-control mr-1 mb-2">

                <button type="button" class="btn btn-outline-warning mb-1">Ingresar</button>
            </form>
        </div>
    </nav>
</header>