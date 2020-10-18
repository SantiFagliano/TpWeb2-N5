<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/functions.js"></script>


    <title>SmiteDex | Nuevo Dios</title>
</head>

<body>
    <header class="">
        <nav class="d-flex flex-row b-3 p-2 justify-content-between">
            <div class="centrar">
                <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <div class="mt-4">
                <form class="formulario d-flex flex-row justify-content-end" action="#">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control mr-1 mb-1">
                    <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" class="form-control mr-1 mb-2">

                    <button type="button" class="btn btn-outline-warning mb-1">Ingresar</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section class="text-center text-white p-3">
            <h3>Agregar un nuevo dios</h3>
        </section>
        <section class="ancho p-2">
            <form>
                <div class="form-group mb-4">
                    <input type="text" class="nuevoDios text-white" name="nombre" id="nombre" aria-describedby="emailHelp" placeholder="Ingrese el nombre del dios">
                </div>
                <div class="form-group mb-4">
                    <input type="number" class="nuevoDios" name="id" id="id" placeholder="Ingrese el ID del dios">
                </div>

                <div class="custom-file mb-4">
                    <input type="file" class="nuevoDiosArchivo" name="imagen" id="imagen" aria-describedby="inputGroupFileAddon01">
                </div>

                <div class="input-group mb-4">
                    <select name="rol" class="custom-select nuevoDios" id="rol">
                        <option selected disabled>Eliga un rol:</option>
                        <option value="support">Guardian</option>
                        <option value="guerrero">Guerrero</option>
                        <option value="cazador">Cazador</option>
                        <option value="mago">Mago</option>
                        <option value="asesino">Asesino</option>
                    </select>
                </div>

                <div class="input-group mb-4">
                    <select name="pantheon" class="custom-select nuevoDios" id="rol">
                        <option selected disabled>Eliga un Panteon:</option>
                        <option value="arturiano">Arturiano</option>
                        <option value="celta">Celta</option>
                        <option value="chino">Chino</option>
                        <option value="egipcio">Egipcio</option>
                        <option value="eslavo">Eslavo</option>
                        <option value="grandesAntiguos">Grandes Antiguos</option>
                        <option value="griego">Griego</option>
                        <option value="hindu">Hindu</option>
                        <option value="japones">Japones</option>
                        <option value="maya">Maya</option>
                        <option value="nordico">Nordico</option>
                        <option value="polinesio">Polinesio</option>
                        <option value="romano">Romano</option>
                        <option value="vudu">Vudu</option>
                        <option value="yoruba">Yoruba</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <textarea class="form-control nuevoDios" name="descripcion" id="descripcion" rows="3" placeholder="Ingrese una descripcion del dios" maxlength="1000" onkeyup="contarCaracteres()"></textarea>
                    <p class="text-white"><span id="caracteres"></span>/1000</p>
                </div>
                <button type="submit" class="btn btn-nuevo">Subir nuevo Dios</button>
            </form>
        </section>
    </main>
    <footer>
        <div class="bg-footer">
            <p>Santiago Fagliano - 43103929 - <a href="mailto:santifagliano@live.com.ar">santifagliano@live.com.ar</a>
            </p>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>




</body>

</html>