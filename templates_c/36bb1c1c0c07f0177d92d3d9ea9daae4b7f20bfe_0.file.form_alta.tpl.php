<?php
/* Smarty version 4.2.1, created on 2022-10-04 01:51:19
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633b75776d4908_12620191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36bb1c1c0c07f0177d92d3d9ea9daae4b7f20bfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\form_alta.tpl',
      1 => 1664841077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633b75776d4908_12620191 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action='add' form method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <label>Nombres</label>
                <input name="Titulo" type="text" class="form-control">
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
        <input name="Fecha" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input name="Precio" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form><?php }
}
