<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:07:24
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_edit_juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af6dc5b08e5_07150552',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '137f61f196f950f76b7b4a87a6aa2b6b9c0f064e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_edit_juego.tpl',
      1 => 1665709245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634af6dc5b08e5_07150552 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form-alta border m-4 position absolute top-50" action="editado" method="post">
<input type="hidden" name="ID_Juego" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
">

<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Nombre:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
"required>
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="autor" class="col-sm-2 col-form-label"><b>Fecha:</b></label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="Fecha" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->Fecha;?>
" required >
  </div>
</div>
<div class="form-group row margin-15px">
  <label for="id_categoria" class="col-sm-2 col-form-label"><b>Genero:</b></label>
  <div class="col-sm-10">
    <select class="form-select" name="Genero_ID">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'gen');
$_smarty_tpl->tpl_vars['gen']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gen']->value) {
$_smarty_tpl->tpl_vars['gen']->do_else = false;
?>
      <option value=<?php echo $_smarty_tpl->tpl_vars['gen']->value->Genero_ID;?>
> <?php echo $_smarty_tpl->tpl_vars['gen']->value->Genero;?>
 </option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div>

<div class="form-group row margin-15px">
  <label for="Precio" class="col-sm-2 col-form-label"><b>Precio:</b></label>
  <div class="col-sm-10">
    <input type="number" class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['game']->value->Precio;?>
" name="Precio" required>
  </div>
</div>
<div><b> Descripcion </b></div>
    <textarea name="Descripcion" class="form-control" placeholder="Ingrese Descripcion" rows="3" required></textarea>
<div class="form-group row margin-15px">
  <div class="col-sm-10  btn-sub-center">
    <button type="submit" class="btn btn-success">Editar Juego</button>
  </div>
</div>
</form>

</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
