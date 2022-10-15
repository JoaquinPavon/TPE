<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:03:12
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_edit_genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af5e078f185_32947353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f72d2a56cdac474d7cff82a365c2ab69ad5f1833' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_edit_genero.tpl',
      1 => 1665709266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634af5e078f185_32947353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-alta border m-4 position absolute top-50" action="editadogen" method="post">

<input type="hidden" name="Genero_ID" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
">

<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Edad:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Edad" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->Edad;?>
" required>
  </div>
</div>
<div><b>Particularidad:</b></div>
<textarea name="Particularidad" class="form-control" placeholder="Ingrese particularidad"rows="3"required></textarea>
<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-primary"  id="submit-create-libro">Editar Genero</button>
  </div>
</div>
</form>

</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
