<form action="nueva_reserva" method="POST" class="my-4">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Nombre completo</label>
                <input name="nombre_cliente" type="text" class="form-control" required>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Habitación</label>
                <select name="id_habitacion" class="form-control" required>
                    <option value="1">Habitación 1</option>
                    <option value="2">Habitación 2</option>
                    <option value="3">Habitación 3</option>
                    <option value="4">Habitación 4</option>
                    <option value="5">Habitación 5</option>
                </select>
            </div>
        </div> 
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label>Fecha de Check-in</label>
                <input name="check_in" type="date" class="form-control" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label>Fecha de Check-out</label>
                <input name="check_out" type="date" class="form-control" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Reservar</button>

    <a href="showReservas" class="btn btn-secondary mt-2">Ver Reservas</a>
</form>
