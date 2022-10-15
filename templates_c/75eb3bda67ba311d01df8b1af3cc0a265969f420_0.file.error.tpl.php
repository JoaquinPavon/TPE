<?php
/* Smarty version 4.2.1, created on 2022-10-14 02:21:08
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348ab74a483c0_57559580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75eb3bda67ba311d01df8b1af3cc0a265969f420' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\error.tpl',
      1 => 1665706778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6348ab74a483c0_57559580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="position absolute top-50">
    <h1 class="list-group-item list-group-item-danger" >El genero seleccionado no se puede eliminar por que esta siendo utilizado en la otra tabla, primero elimine los item que les correponden a dicho Genero y vuelva a Intentarlo.</h1>
    <a href="home">Volver al inicio</a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
