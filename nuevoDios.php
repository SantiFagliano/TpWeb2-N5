<?php require_once("header.php") ?>

    <main>
        <section class="text-center text-white p-3">
            <h3>Agregar un nuevo dios</h3>
        </section>
        <section class="ancho p-2">
            <form action="agregarDios.php" method="POST" enctype="multipart/form-data" name="form" id="form">
                <div class="form-group mb-4">
                    <input type="text" class="nuevoDios text-white" name="nombre" id="nombre"
                           aria-describedby="emailHelp"
                           placeholder="Ingrese el nombre del dios">
                </div>
                <div class="form-group mb-4">
                    <input type="number" class="nuevoDios" name="id" id="id" placeholder="Ingrese el ID del dios">
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
                <textarea class="form-control nuevoDios" name="descripcion" id="descripcion" rows="3"
                          placeholder="Ingrese una descripcion del dios" maxlength="1000"
                          onkeyup="contarCaracteres()"></textarea>
                    <p class="text-white"><span id="caracteres"></span>/1000</p>
                </div>
                <button type="submit" class="btn btn-nuevo">Subir nuevo Dios</button>
                <div id="mensaje" class="error">

                </div>
            </form>
        </section>
    </main>
<?php require_once("footer.php") ?>