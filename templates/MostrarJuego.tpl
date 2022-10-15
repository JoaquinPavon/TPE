
{*Muestra el juego seleccionado individualmente, con mas detalles. Se vuelve a tomar la ID con un input hidden*}

{include file='templates/header.tpl'}



<div class="border m-4 position absolute top-50">
  <div>
    <input type="hidden" value="{$game->ID_Juego}">
    <div>
        <h2>Nombre:</h2><li class="list-group-item list-group-item-success">{$game->Nombre}</li>
    </div>
    <div>

        <h3>Fecha:</h3> <li class="list-group-item list-group-item-primary">{$game->Fecha}</li>
    </div>

    <div>
      <h3>Genero: </h3><li class="list-group-item list-group-item-warning">{$game->Genero}</li>
    </div>

    <div>
      <h3>Precio:</h3> <li class="list-group-item list-group-item-danger">${$game->Precio}</li>
    </div>
    <div>
    <h3>Descripcion:</h3><li class="list-group-item list-group-item-dark"> {$game->Descripcion}</li>
    </div>
    {if isset($smarty.session.USER_ID)}

    <a href='edit/{$game->ID_Juego}' type='button' class='btn btn-warning ml-auto'>Editar</a>

  {{/if}}

</div>

{include file='templates/footer.tpl'}