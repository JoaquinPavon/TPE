{include file='templates/header.tpl'}
{* Formulario que se utiliza para editar un Juego, con un Input en modo Hidden para tomar la ID de dicho Juego *}

<form class="form-alta border m-4 position absolute top-50" action="editado" method="post">
<input type="hidden" name="ID_Juego" value="{$game->ID_Juego}">

<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Nombre:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Nombre" value="{$game->Nombre}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Fecha:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Fecha" value="{$game->Fecha}" required >
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="id_categoria" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <select class="form-select" name="Genero_ID">
    {foreach from=$generos item=$gen}
      <option value={$gen->Genero_ID}> {$gen->Genero} </option>
    {/foreach}
    </select>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="Precio" class="col-sm-2 col-form-label"><b>Precio:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="{$game->Precio}" name="Precio" required>
  </div>
</div>
<div><b> Descripcion </b></div>
{*Los <texarea> no adminten values*}
    <textarea name="Descripcion" class="form-control" placeholder="Ingrese Descripcion" rows="3" required></textarea>
<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Juego</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}
