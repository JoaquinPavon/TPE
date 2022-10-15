<?php
/* Smarty version 4.2.1, created on 2022-10-01 00:22:55
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\resultadosgeneros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63376c3f9004d3_25087485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac590a3a0389c6e6e551937d8cf30cdbe2a5ae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\resultadosgeneros.tpl',
      1 => 1664576573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63376c3f9004d3_25087485 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 id="asd"class="display-4" style="margin: 0px;" > El resultado de tu busqueda es: </h2>

<ul class="list-group" style="background-color:#FF7A33; text-align: center;">
       
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultados']->value, 'rf');
$_smarty_tpl->tpl_vars['rf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rf']->value) {
$_smarty_tpl->tpl_vars['rf']->do_else = false;
?>
    
<li> <b>Juego:  </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->Nombre;?>
 - <b> Fecha de Lanzamiento: </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->Fecha;?>
 <b> - Genero : </b>  <?php echo $_smarty_tpl->tpl_vars['rf']->value->Genero;?>
 - <b>  Edad: </b> +<?php echo $_smarty_tpl->tpl_vars['rf']->value->Edad;?>
 - <b> Precio: </b> $<?php echo $_smarty_tpl->tpl_vars['rf']->value->Precio;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
