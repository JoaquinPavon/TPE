<?php
/* Smarty version 4.2.1, created on 2022-10-05 23:59:41
  from 'C:\xampp\htdocs\trabajo-practico-especial\templates\Mostrar_Insertar_Juego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633dfe4d65e805_57555963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44853d23651bce0b8fa05248636ae787f7978d6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trabajo-practico-especial\\templates\\Mostrar_Insertar_Juego.tpl',
      1 => 1665007130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/form_genero.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_633dfe4d65e805_57555963 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="display-5" > Seccion Generos: </h2>
<form action="mostrargeneros" method="POST">
<label>Buscar por genero: <input type="text" name="busqueda" required></label>      

<button type="submit" class="btn btn-success">Buscar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:templates/form_genero.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    
   <li style="background-color:#FAC9FF" class='list-group-item d-flex justify-content-between align-items-center'>
            <span><b>  Genero : </b> <a href="genero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero;?>
</a> - <b>  Edad: </b> +<?php echo $_smarty_tpl->tpl_vars['genero']->value->Edad;?>
 </span> 
           <div class="ml-auto"> 
           <a href='editGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-primary ml-auto'>Editar</a>
           <a href='deleteGEN/<?php echo $_smarty_tpl->tpl_vars['genero']->value->Genero_ID;?>
' type='button' class='btn btn-danger ml-auto'>Borrar</a>
        
            </div>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
