

{* Muestra los resultados de lo buscado por el usuario en los Input. En este caso el usuario ingresa el genero o una aproximacion al genero ej: "Depor" y lista todos los items que pertenecen a dicho genero*}
{include file='templates/header.tpl'}

<div class="border m-4 position absolute top-50">
<h1 class="display-4"> El resultado de tu busqueda es: </h1>


       
{foreach from=$resultados item=$rf}
    <div class="border m-4 position absolute top-50">

<li> <b> Juego:  </b>{$rf->Nombre} </li>
<li> <b> Fecha de Lanzamiento: </b>{$rf->Fecha} </li>
<li> <b> Genero : </b>  {$rf->Genero } </li>
<li> <b> Edad: </b> +{$rf->Edad}  </li>
<li> <b> Precio: </b> ${$rf->Precio} </li>
<li> <b> Descripcion: </b> {$rf->Descripcion}</li>
    </div>
{/foreach}



</div>
{include file='templates/footer.tpl'}