<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:04:34
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_buscador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486142465b84_27834787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c452706e8e963dec761a08c90708344c7d05b195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_buscador.tpl',
      1 => 1665687823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63486142465b84_27834787 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="mostrargeneros" method="POST">
<label>Filtrar item por genero: <input type="text" name="busqueda" required></label>      
<button type="submit" class="btn btn-success">Buscar</button>
</form><?php }
}
