<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:47:21
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\Resultados_Generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486b49558481_83063458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47496579461756a98a7d8216c4abccef964e12b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\Resultados_Generos.tpl',
      1 => 1665688702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63486b49558481_83063458 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="border m-4 position absolute top-50">
<h1 class="display-4"> El resultado de tu busqueda es: </h1>


       
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resultados']->value, 'rf');
$_smarty_tpl->tpl_vars['rf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rf']->value) {
$_smarty_tpl->tpl_vars['rf']->do_else = false;
?>
    <div class="border m-4 position absolute top-50">

<li> <b> Juego:  </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->Nombre;?>
 </li>
<li> <b> Fecha de Lanzamiento: </b><?php echo $_smarty_tpl->tpl_vars['rf']->value->Fecha;?>
 </li>
<li> <b> Genero : </b>  <?php echo $_smarty_tpl->tpl_vars['rf']->value->Genero;?>
 </li>
<li> <b> Edad: </b> +<?php echo $_smarty_tpl->tpl_vars['rf']->value->Edad;?>
  </li>
<li> <b> Precio: </b> $<?php echo $_smarty_tpl->tpl_vars['rf']->value->Precio;?>
 </li>
<li> <b> Descripcion: </b> <?php echo $_smarty_tpl->tpl_vars['rf']->value->Descripcion;?>
</li>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



</div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
