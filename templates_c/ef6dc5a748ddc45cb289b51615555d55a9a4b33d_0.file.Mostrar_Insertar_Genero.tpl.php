<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:59:41
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\Mostrar_Insertar_Genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dfe4d6d6133_60769554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef6dc5a748ddc45cb289b51615555d55a9a4b33d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\Mostrar_Insertar_Genero.tpl',
      1 => 1664849565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633dfe4d6d6133_60769554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="container">
<div class="libro">
<input type="hidden" name="ID_Genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->ID_Genero;?>
">
    <div class="title">
        <h3 class="mb-4">Nombre:<span><?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</span></h3>
    </div>
    <div class="autor">
        <h4>Edad <span><?php echo $_smarty_tpl->tpl_vars['genero']->value->Edad;?>
</span></h4>
    </div>

    <a href='editGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-primary ml-auto'>Editar</a>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
