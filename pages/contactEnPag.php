<div class="col-12 p-5 pb-0 form">
    <hr>
    <div>
        <h4 class="text-center">Reservá tu turno <br> Escribinos sin compromiso!</h4>
        <h6 class="text-center">(Formulario ilustativo)</h6>
    </div>
    <form action="datosform.php" method="POST">
        <div class="form-group">
            <label for="campoNombre"><p class="asterisco-rojo">*</p> Nombre</label>
            <input type="text" class="form-control" id="campoNombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="campoEmail"><p class="asterisco-rojo">*</p> Email</label>
            <input type="email" class="form-control" id="campoEmail" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="campoTelefono"><p class="asterisco-rojo">*</p> Tel. / Celular</label>
            <input type="tel" class="form-control" id="campoTel" name="tel" placeholder="Teléfono o celular" required>
        </div>
        <div class="form-group">
            <label for="campoTratamiento"><p class="asterisco-rojo">*</p> Tratamiento</label>
            <select id="campoTratamiento" class="form-control" name="tratamiento" required>
                <option selected value="">Elija su tratamiento</option>
                <option value="1">Facial 1</option>
                <option value="2">Facial 2</option>
                <option value="3">Corporal 1</option>
                <option value="4">No sé cuál elegir.</option>
            </select>
        </div>
        <div class="form group">
            <label for="campoConsulta"><p class="asterisco-rojo m-0 p-0">*</p> Turno</label>
            <textarea name="consulta" id="campoConsulta" cols="3" rows="3" class="form-control" placeholder="Indicá el día y horario para tu turno" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary boton">Enviar</button>
    </form>
</div