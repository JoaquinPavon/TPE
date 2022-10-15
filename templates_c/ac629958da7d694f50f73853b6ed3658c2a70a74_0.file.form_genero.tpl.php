<?php
/* Smarty version 4.2.1, created on 2022-10-13 23:59:13
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488a316a0288_16473639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac629958da7d694f50f73853b6ed3658c2a70a74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_genero.tpl',
      1 => 1665698351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63488a316a0288_16473639 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addgen" method="POST" class="my-3">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Genero</label>
                <input name="Generos" style="width: 250px" type="text" class="form-control" required>
            </div>
        </div>
    <div class="form-group">
        <label>Edad</label>
        <input name="Edad" class="form-control" style="width: 250px" rows="3" required ></input>
    </div>
    <div>Particularidad:</div>
    <textarea name="Particularidad" class="form-control" rows="3" required></textarea>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success" style="width: 100px; margin:8px;">Guardar</button><?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

</form><?php }
}
