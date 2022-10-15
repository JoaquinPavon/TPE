<?php
/* Smarty version 4.2.1, created on 2022-10-06 00:39:07
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\InsertarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633e078b13e0e3_27144602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c80f89b51cfe857b33497ea36bcb2ba610f289bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\InsertarJuego.tpl',
      1 => 1665009545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_juego.tpl' => 1,
  ),
),false)) {
function content_633e078b13e0e3_27144602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 class="display-5"> Seccion Juegos: </h2>

<?php $_smarty_tpl->_subTemplateRender('file:templates/form_juego.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<ul id="showgamescss"class="list-group" style="background-color:#FAC9FF" >
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
    
   <li style="background-color:#FAC9FF" class='list-group-item d-flex justify-content-between align-items-center'>
            <span>


             <b>Juego:</b><a href="juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
"> <?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
</a>
             <b>Fecha de Lanzamiento:</b> <?php echo $_smarty_tpl->tpl_vars['game']->value->Fecha;?>
 -
             <b>Genero:</b>  <?php echo $_smarty_tpl->tpl_vars['game']->value->Genero;?>
 - 
             <b>Edad:</b> <?php echo $_smarty_tpl->tpl_vars['game']->value->Edad;?>
- 
             <b>Precio:</b> $<?php echo $_smarty_tpl->tpl_vars['game']->value->Precio;?>

             
             </span> 
            
             <div class="ml-auto">
             <a href='edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
' type='button' class='btn btn-primary ml-auto'>Editar</a>
             <a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
             </div>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul><?php }
}
