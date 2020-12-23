<?php require_once("header.php") ?>

    <main>
        <section class="text-center container-buscador borde">
            <form class="m-auto buscador" action="buscarDios.php" method="get">
                <input class="mr-sm-2 p-2" type="search" name="buscar" placeholder="Buscar dios por id, nombre, rol o pantheon"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" name="button" type="submit">Buscar</button>
            </form>
            <div class="text-white mt-2">
                <p>¿Desea agregar un nuevo Dios a la lista? <a href="nuevoDios.php" class="text-danger">Presione
                        aqu&iacute;</a></p>
            </div>
        </section>

        <section class="p-1 container">
            <article class="row">
                <?php
                mostrarDiosesDeLaBaseDeDatos($conexion);
                ?>
            </article>
        </section>
    </main>
<?php require_once("footer.php") ?>