<?php
/* Smarty version 4.2.1, created on 2022-10-14 00:01:34
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488abe9d04c2_82140853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61d5f9a1d6ef8849d17b02e50a9203575aafbfe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_juego.tpl',
      1 => 1665698488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63488abe9d04c2_82140853 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action='add' form method="POST" class="border m-4 position absolute top-50">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombres</label>
                <input name="Titulo" type="text" class="form-control"required>
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Elegí genero</label>
                <select name="Genero_ID" class="form-control">
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
    </div>

    <div class="form-group">
        <label>Fecha de lanzamiento</label>
        <input name="Fecha" class="form-control" rows="3"required></textarea>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input name="Precio" class="form-control" rows="3"required></textarea>
    </div>
    <div>Descripcion</div>
    <textarea name="Descripcion" class="form-control" rows="3"required></textarea>
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <button type="submit" class="btn btn-success">Guardar</button>
<?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

</form><?php }
}
