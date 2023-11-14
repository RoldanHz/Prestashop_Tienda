<?php
/* Smarty version 4.3.1, created on 2023-11-03 10:56:14
  from 'C:\xampp\htdocs\ElPinal\themes\classic\templates\catalog\listing\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6545262eca0840_88311287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d2d8ced9ccda6463c140031eb3919b036e79f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\themes\\classic\\templates\\catalog\\listing\\search.tpl',
      1 => 1671916050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_6545262eca0840_88311287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15415839586545262eba7361_36974786', "error_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12691832896545262ebaef61_49998767', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block "error_content"} */
class Block_15415839586545262eba7361_36974786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_content' => 
  array (
    0 => 'Block_15415839586545262eba7361_36974786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4 id="product-search-no-matches"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No matches were found for your search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please try other keywords to describe what you are looking for.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php
}
}
/* {/block "error_content"} */
/* {block 'product_list'} */
class Block_12691832896545262ebaef61_49998767 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_12691832896545262ebaef61_49998767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-3"), 0, false);
}
}
/* {/block 'product_list'} */
}
