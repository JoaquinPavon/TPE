{* Formulario que se utiliza para Insertar un genero a la BD *}
<form action="addgen" method="POST" class="my-3">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Genero</label>
                <input name="Generos" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>
    <div class="form-group">
        <label>Edad</label>
        <input name="Edad" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div>Particularidad:</div>
    <textarea name="Particularidad" class="form-control" rows="3" required></textarea>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button>{{/if}}
</form>