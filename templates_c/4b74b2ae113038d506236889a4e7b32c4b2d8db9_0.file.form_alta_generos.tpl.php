<?php
/* Smarty version 4.2.1, created on 2022-10-04 02:25:04
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_alta_generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b7d6024d590_38483834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b74b2ae113038d506236889a4e7b32c4b2d8db9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_alta_generos.tpl',
      1 => 1664843102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633b7d6024d590_38483834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="addgen" method="POST" class="my-3">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Genero</label>
                <input name="Generos" style="width: 250px" type="text" class="form-control">
            </div>
        </div>
    <div class="form-group">
        <label>Edad</label>
        <input name="Edad" class="form-control" style="width: 250px" rows="3" ></input>
    </div>
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button>
</form><?php }
}
