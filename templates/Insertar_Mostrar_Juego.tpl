{* Seccion juegos que muestra el formulario para agregar y los botones para editar/borrar solo si estas logeado. Ademas lista todos los juegos utilizados sin detalle*}


{include file='templates/header.tpl'}
<div>
<h5 class="display-5" id="asd" style="text-align: right"> Info Juegos</h5>
</div>

<h6 class="display-5"> Seccion Juegos: </h6>
{if isset($smarty.session.USER_ID)}
{include file='templates/form_juego.tpl'}
{{/if}}

<ul id="showgamescss"class="list-group">
{foreach from=$games item=$game}
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>
             <b>Juego:</b><a href="juego/{$game->ID_Juego}"> {$game->Nombre}</a>
             <b>Fecha de Lanzamiento:</b> {$game->Fecha} -
             <b>Genero:</b>  {$game->Genero} -  
             <b>Precio:</b> ${$game->Precio}-
             <b>Descripcion</b> {$game->Descripcion|truncate:15}
             
             </span> 
            
             <div class="ml-auto">
             {if isset($smarty.session.USER_ID)}
             <a href='edit/{$game->ID_Juego}' type='button' class='btn btn-warning ml-auto'>Editar</a>
             <a href='delete/{$game->ID_Juego}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
            {{/if}}
             </div>
          
        </li>
    {/foreach}

</ul>

{include file='templates/form_buscador.tpl'}
