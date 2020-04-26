<div class="container mt-4 mb-4 p-4 animated fadeIn fast" id="dasboard1">
    <div class="areadetrabajo" id="areaTask1">
    <form>
        <div class="form-group">
            <label for="task">Nombre de tarea:</label>
            <input type="text" class="form-control" id="task" name="task" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="desripcion">Descripción</label><br>
            <textarea name="descripcion" id="descripcion" cols="50" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">
            <span class="icon-vcard-1"></span>&nbsp ¡Enviar Tarea!</button>
    </form>
    </div>
    <div class="areadetrabajo" id="areaTask2">
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Descripción</td>
            </tr>
            </thead>
        </table>
    </div>
    <div class="areadetrabajo" id="areaTask3"></div>
    <div class="areadetrabajo" id="areaTask4"></div>
</div>