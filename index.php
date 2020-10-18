<?php require_once("header.php") ?>
    <main>
        <section class="text-center container-buscador borde">
            <form class="m-auto buscador">
                <input class="mr-sm-2 p-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="text-white mt-2">
                <p>¿Desea agregar un nuevo Dios a la lista? <a href="nuevoDios.php" class="text-danger">Presione
                        aqu&iacute;</a></p>
            </div>
        </section>
        <section class="p-1 container">
            <article class="row">
                <div class="col-12 col-md-4 m-auto">
                    <div class="card mb-3 fondo">
                        <img class="card-img-top" src="Recursos/img/dioses/Neith.jpg" alt="Card image cap">
                        <div class="card-body border-top">
                            <h2 class="card-title text-black">1 | Neith</h2>
                            <hr>
                            <p class="card-text font-x-large"><img src="Recursos/img/pantheon/egipcio.png" alt=""
                                                                   class="pantheon">Egipcian
                            </p>
                            <p class="card-text font-x-large"><img src="Recursos/img/tipo/cazador.png" alt="" class="pantheon">Hunter
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                    data-target="#staticBackdrop">
                                Editar Dios
                            </button>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                    data-target="#exampleModal">
                                Eliminar Dios
                            </button>

                            <!-- Modal Eliminar dios-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Estas a punto de eliminar un
                                                dios</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estas seguro de que deseas hacerlo?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancelar
                                            </button>
                                            <button type="button" class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Editar dios-->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                                 tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Editar Dios</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>que pasa padreeee</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar
                                            </button>
                                            <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </article>
        </section>
    </main>
<?php require_once("footer.php")?>