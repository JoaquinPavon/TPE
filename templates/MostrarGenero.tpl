
{*Muestra el genero seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden*}


{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">
<div>
<input type="hidden" name="ID_Genero" value="{$genero->ID_Genero}">
    <div>
        <h2>Genero:</h2><li class="list-group-item list-group-item-success">{$genero->Genero}</li>
    </div>
    <div>
        <h3>Edad permitida:</h3> <li class="list-group-item list-group-item-warning">{$genero->Edad}</li>
    </div>
<div>
<h3>Particularidad: </h3><li class="list-group-item list-group-item-dark"> {$genero->Particularidad}</li>
</div>
{if isset($smarty.session.USER_ID)}
    <a href='editGEN/{$genero->Genero_ID}' type='button' class='btn btn-warning ml-auto'>Editar</a>
{{/if}}

</div>

{include file='templates/footer.tpl'}