<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:54:37
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_generos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dfd1dd40dd7_04621698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53d0db8c95b3257998e0efb0a0524ec7715d3181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_generos.tpl',
      1 => 1664843102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633dfd1dd40dd7_04621698 (Smarty_Internal_Template $_smarty_tpl) {
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
