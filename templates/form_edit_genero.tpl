{include file='templates/header.tpl'}

{* Formulario que se utiliza para editar un Genero, con un Input en modo Hidden para tomar la ID de dicho genero *}
<form class="form-alta border m-4 position absolute top-50" action="editadogen" method="post">

<input type="hidden" name="Genero_ID" value="{$genero->Genero_ID}">

<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Genero" value="{$genero->Genero}"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Edad:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Edad" value="{$genero->Edad}" required>
  </div>
</div>
<div><b>Particularidad:</b></div>
{*Los <texarea> no adminten values*}
<textarea name="Particularidad" class="form-control" placeholder="Ingrese particularidad"rows="3"required></textarea>
<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-primary"  id="submit-create-libro">Editar Genero</button>
  </div>
</div>
</form>

</div>


{include file='templates/footer.tpl'}