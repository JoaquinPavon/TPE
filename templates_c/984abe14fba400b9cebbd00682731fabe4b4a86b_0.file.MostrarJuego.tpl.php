<?php
/* Smarty version 4.2.1, created on 2022-10-13 21:17:25
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\MostrarJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63486445f14734_24804077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '984abe14fba400b9cebbd00682731fabe4b4a86b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\MostrarJuego.tpl',
      1 => 1665688437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_63486445f14734_24804077 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="border m-4 position absolute top-50">
  <div>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
">
    <div>
        <h2>Nombre:</h2><li class="list-group-item list-group-item-success"><?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
</li>
    </div>
    <div>

        <h3>Fecha:</h3> <li class="list-group-item list-group-item-primary"><?php echo $_smarty_tpl->tpl_vars['game']->value->Fecha;?>
</li>
    </div>

    <div>
      <h3>Genero: </h3><li class="list-group-item list-group-item-warning"><?php echo $_smarty_tpl->tpl_vars['game']->value->Genero;?>
</li>
    </div>

    <div>
      <h3>Precio:</h3> <li class="list-group-item list-group-item-danger">$<?php echo $_smarty_tpl->tpl_vars['game']->value->Precio;?>
</li>
    </div>
    <div>
    <h3>Descripcion:</h3><li class="list-group-item list-group-item-dark"> <?php echo $_smarty_tpl->tpl_vars['game']->value->Descripcion;?>
</li>
    </div>
    <?php if ((isset($_SESSION['USER_ID']))) {?>

    <a href='edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>

  <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
