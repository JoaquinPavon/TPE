<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:20:11
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\MostrarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634864eb973122_48331422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bd577f2d1c58ca4df77f00b0472d13bfd4b0668' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\MostrarGenero.tpl',
      1 => 1665688428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634864eb973122_48331422 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">
<div>
<input type="hidden" name="ID_Genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->ID_Genero;?>
">
    <div>
        <h2>Genero:</h2><li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</li>
    </div>
    <div>
        <h3>Edad permitida:</h3> <li class="list-group-item list-group-item-warning"><?php echo $_smarty_tpl->tpl_vars['genero']->value->Edad;?>
</li>
    </div>
<div>
<h3>Particularidad: </h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['genero']->value->Particularidad;?>
</li>
</div>
<?php if ((isset($_SESSION['USER_ID']))) {?>
    <a href='editGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
<?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
