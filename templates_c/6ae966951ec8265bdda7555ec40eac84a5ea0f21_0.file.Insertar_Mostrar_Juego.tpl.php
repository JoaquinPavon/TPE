<?php
/* Smarty version 4.2.1, created on 2022-10-15 20:10:52
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\Insertar_Mostrar_Juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634af7ac4beda2_75966023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ae966951ec8265bdda7555ec40eac84a5ea0f21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\Insertar_Mostrar_Juego.tpl',
      1 => 1665857436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form_juego.tpl' => 1,
    'file:templates/form_buscador.tpl' => 1,
  ),
),false)) {
function content_634af7ac4beda2_75966023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\trabajo-practico-especial\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
<h5 class="display-5" id="asd" style="text-align: right"> Info Juegos</h5>
</div>

<h6 class="display-5"> Seccion Juegos: </h6>
<?php if ((isset($_SESSION['USER_ID']))) {
$_smarty_tpl->_subTemplateRender('file:templates/form_juego.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<ul id="showgamescss"class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, 'game');
$_smarty_tpl->tpl_vars['game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
$_smarty_tpl->tpl_vars['game']->do_else = false;
?>
    
   <li class='list-group-item d-flex justify-content-between align-items-center'>
            <span>
             <b>Juego:</b><a href="juego/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
"> <?php echo $_smarty_tpl->tpl_vars['game']->value->Nombre;?>
</a>
             <b>Fecha de Lanzamiento:</b> <?php echo $_smarty_tpl->tpl_vars['game']->value->Fecha;?>
 -
             <b>Genero:</b>  <?php echo $_smarty_tpl->tpl_vars['game']->value->Genero;?>
 -  
             <b>Precio:</b> $<?php echo $_smarty_tpl->tpl_vars['game']->value->Precio;?>
-
             <b>Descripcion</b> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['game']->value->Descripcion,15);?>

             
             </span> 
            
             <div class="ml-auto">
             <?php if ((isset($_SESSION['USER_ID']))) {?>
             <a href='edit/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
' type='button' class='btn btn-warning ml-auto'>Editar</a>
             <a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->ID_Juego;?>
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

<?php $_smarty_tpl->_subTemplateRender('file:templates/form_buscador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
