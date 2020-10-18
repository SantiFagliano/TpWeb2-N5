<?php require_once("header.php") ?>

    <main>
        <section class="text-center text-white p-3">
            <h3>Agregar un nuevo dios</h3>
        </section>
        <section class="ancho p-2">
            <form>
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
                <textarea class="form-control nuevoDios" name="descripcion" id="descripcion" rows="3"
                          placeholder="Ingrese una descripcion del dios" maxlength="1000"
                          onkeyup="contarCaracteres()"></textarea>
                    <p class="text-white"><span id="caracteres"></span>/1000</p>
                </div>
                <button type="submit" class="btn btn-nuevo">Subir nuevo Dios</button>
            </form>
        </section>
    </main>
<?php require_once("footer.php") ?>