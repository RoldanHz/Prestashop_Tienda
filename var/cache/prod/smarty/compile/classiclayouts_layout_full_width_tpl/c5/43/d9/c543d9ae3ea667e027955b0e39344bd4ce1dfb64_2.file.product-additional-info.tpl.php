<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:29:02
  from 'C:\xampp\htdocs\ElPinal\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6544a13ea7db58_44516710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c543d9ae3ea667e027955b0e39344bd4ce1dfb64' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1671916050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6544a13ea7db58_44516710 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
