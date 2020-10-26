<?php
function mostrarDiosesDeLaBaseDeDatos($conexion)
{
    $sql = "select * from Dios";

    $resultado = $conexion->query($sql);

    while ($row = $resultado->fetch_assoc()) {
        $nombre = $row["nombre"];
        $panteon = $row["pantheon"];
        $idDios = $row["id"];
        $rol = $row["rol"];
        $img = $row["url_imagen"];
        echo '
        <div class="col-12 col-md-6 col-lg-4 m-auto">
            <div class="card mb-3 fondo">
                <a href="diosMostrado.php?id=' . $idDios . '"><img class="card-img-top" src="Recursos/img/dioses/' . $img . '" alt="' . $nombre . '"></a>
                <div class="card-body border-top">
                    <h2 class="card-title text-black">' . $idDios . ' | ' . $nombre . '</h2>
                    <hr>
                    <p class="card-text font-x-large"><img src="Recursos/img/pantheon/' . $panteon . '.png"
                            alt="' . $panteon . '" class="pantheon">' . $panteon . '
                    </p>
                    <p class="card-text font-x-large"><img src="Recursos/img/tipo/' . $rol . '.png" alt="' . $rol . '"
                            class="pantheon">' . $rol . '
                    </p>
                    <!-- Contenedor de botones -->
                    <div>
                        <!-- Boton editar modal -->
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                            data-target="#staticBackdrop' . $idDios . '">
                            Editar Dios
                        </button>
                        <!-- Boton eliminar modal -->
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                            data-target="#exampleModal' . $idDios . '">
                            Eliminar Dios
                        </button>
        
                        <!-- Modal Eliminar dios-->
                        <div class="modal fade" id="exampleModal' . $idDios . '" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-editar">
                                        <h5 class="modal-title text-white" id="exampleModalLabel">Estas a punto de eliminar un dios
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-editar text-white">
                                        ¿Estas seguro de que deseas hacerlo?
                                    </div>
                                    <div class="modal-footer bg-editar text-white">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">
                                            Cancelar
                                        </button>
                                        
                                        <a href="eliminarDios.php?id=' . $idDios . '" type="button" class="btn btn-outline-primary">
                                            Confirmar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Editar dios-->
                        <div class="modal fade" id="staticBackdrop' . $idDios . '" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-editar">
                                        <h5 class="modal-title text-white" id="staticBackdropLabel">Editar Dios</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body bg-editar">
                                        <form action="#" method="POST" enctype="multipart/form-data" name="form"
                                            id="form">
                                            <div class="form-group mb-4">
                                                <input type="text" class="nuevoDios text-white" name="nombre" id="nombre"
                                                    aria-describedby="emailHelp" placeholder="Ingrese el nombre del dios">
                                            </div>
                                            <div class="form-group mb-4">
                                                <input type="number" class="nuevoDios" name="id" id="id"
                                                    placeholder="Ingrese el ID del dios">
                                            </div>
        
                                            <div class="custom-file mb-4">
                                                <input type="file" class="nuevoDiosArchivo" name="imagen" id="imagen"
                                                    aria-describedby="inputGroupFileAddon01">
                                            </div>
        
                                            <div class="input-group mb-4">
                                                <select name="rol" class="custom-select nuevoDios" id="rol">
                                                    <option selected disabled>Eliga un rol:</option>
                                                    <option value="Guardian">Guardian</option>
                                                    <option value="Guerrero">Guerrero</option>
                                                    <option value="Cazador">Cazador</option>
                                                    <option value="Mago">Mago</option>
                                                    <option value="Asesino">Asesino</option>
                                                </select>
                                            </div>
        
                                            <div class="input-group mb-4">
                                                <select name="pantheon" class="custom-select nuevoDios" id="pantheon">
                                                    <option selected disabled>Eliga un Panteon:</option>
                                                    <option value="Arturiano">Arturiano</option>
                                                    <option value="Celta">Celta</option>
                                                    <option value="Chino">Chino</option>
                                                    <option value="Egipcio">Egipcio</option>
                                                    <option value="Eslavo">Eslavo</option>
                                                    <option value="GrandesAntiguos">Grandes Antiguos</option>
                                                    <option value="Griego">Griego</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Japones">Japones</option>
                                                    <option value="Maya">Maya</option>
                                                    <option value="Nordico">Nordico</option>
                                                    <option value="Polinesio">Polinesio</option>
                                                    <option value="Romano">Romano</option>
                                                    <option value="Vudu">Vudu</option>
                                                    <option value="Yoruba">Yoruba</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-4">
                                                <textarea class="form-control nuevoDios" name="descripcion" id="descripcion"
                                                    rows="3" placeholder="Ingrese una descripcion del dios" maxlength="1000"
                                                    onkeyup="contarCaracteres()"></textarea>
                                                <p class="text-white"><span id="caracteres"></span>/1000</p>
                                            </div>
                                            <div class="text-center">
                                            <button type="submit" class="btn btn-nuevo">Actualizar datos del Dios</button>
                                            </div>
                                            <div id="mensaje" class="error">
        
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        ';
    }
}

function mostrarDiosEspecifico($id, $conexion)
{
    $sql = "select * from Dios WHERE id ='$id'";

    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();
    $nombre = $row["nombre"];
    $panteon = $row["pantheon"];
    $idDios = $row["id"];
    $rol = $row["rol"];
    $img = $row["url_imagen"];
    $descripcion = $row["descripcion"];
    echo '
            <section class="row justify-content-center">
            <article class="col-12 col-md-6 text-center">
                <img src="Recursos/img/dioses/' . $img . '" alt="' . $nombre . '" class="mostrarDios">
            </article>
            <article class="col-12 col-md-6 pt-2 ">
                <h2 class="text-white border-bottom p-2 informacion">' . $nombre . '</h2>
                <p class="card-text text-white"><strong>*ID:</strong> ' . $idDios . '</p>
                <p class="card-text text-white"><strong>*Pantehon: </strong><img src="Recursos/img/pantheon/' . $panteon . '.png" alt="' . $panteon . '"
                                                                                 class="pantheon1">' . $panteon . '</p>
                <p class="card-text text-white"><strong>*Rol:</strong> <img src="Recursos/img/tipo/' . $rol . '.png" alt="' . $rol . '"
                                                                            class="pantheon1">' . $rol . '</p>
                <p class="card-text text-white"><strong>*Descripcion:</strong>' . $descripcion . '
                </p>
            </article>
        </section>
        ';
}
