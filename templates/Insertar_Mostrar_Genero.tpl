
{* Seccion juegos que muestra el formulario para agregar y los botones para editar/borrar solo si estas logeado.. Ademas lista todos los generos utilizados sin detalle*}


<h6 class="display-5"> Seccion Generos: </h6>

{if isset($smarty.session.USER_ID)}
{include file='templates/form_genero.tpl'}
{{/if}}
<ul class="list-group">
{foreach from=$generos item=$genero}
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span><b>  Genero : </b> <a href="genero/{$genero->Genero_ID}"> {$genero->Genero}</a> - <b>  Edad permitida: </b> +{$genero->Edad} - <b> Particularidad: </b> {$genero->Particularidad|truncate:45} </span> 
           <div class="ml-auto"> 
           {if isset($smarty.session.USER_ID)}
           <a href='editGEN/{$genero->Genero_ID}' type='button' class='btn btn-warning ml-auto'>Editar</a>
           <a href='deleteGEN/{$genero->Genero_ID}' type='button' class='btn btn-dark ml-auto'>Borrar</a>
        {{/if}}
            </div>
        </li>
    {/foreach}
</ul>


{include file='templates/footer.tpl'}