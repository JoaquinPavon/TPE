<?php
/* Smarty version 4.2.1, created on 2022-10-14 01:55:14
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\Insertar_Mostrar_Genero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348a5626fa185_76264093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9f4695bd0632748409111ed4d4a93b3cc7d33aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\Insertar_Mostrar_Genero.tpl',
      1 => 1665705313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/form_genero.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6348a5626fa185_76264093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\trabajo-practico-especial\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>



<h6 class="display-5"> Seccion Generos: </h6>

<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender('file:templates/form_genero.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span><b>  Genero : </b> <a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</a> - <b>  Edad permitida: </b> +<?php echo $_smarty_tpl->tpl_vars['genero']->value->Edad;?>
 - <b> Particularidad: </b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['genero']->value->Particularidad,45);?>
 </span> 
           <div class="ml-auto"> 
           <?php if ((isset($_SESSION['USER_ID']))) {?>
           <a href='editGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
           <a href='deleteGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-dark ml-auto'>Borrar</a>
        <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
