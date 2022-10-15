
{* Formulario que se utiliza para Insertar un jUEGO a la BD *}

<form action='add' form method="POST" class="border m-4 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombres</label>
                <input name="Titulo" type="text" class="form-control"required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Elegí genero</label>
                <select name="Genero_ID" class="form-control">
             {foreach from=$generos item=$gen}
                <option value={$gen->Genero_ID}> {$gen->Genero} </option>
             {/foreach}
                    
                  

                </select>
                
            </div>
        </div>
    </div>

    <div class="form-group">
        <label>Fecha de lanzamiento</label>
        <input name="Fecha" class="form-control" rows="3"required></textarea>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input name="Precio" class="form-control" rows="3"required></textarea>
    </div>
    <div>Descripcion</div>
    <textarea name="Descripcion" class="form-control" rows="3"required></textarea>
    {if isset($smarty.session.USER_ID)}
    <button type="submit" class="btn btn-success">Guardar</button>
{{/if}}
</form>