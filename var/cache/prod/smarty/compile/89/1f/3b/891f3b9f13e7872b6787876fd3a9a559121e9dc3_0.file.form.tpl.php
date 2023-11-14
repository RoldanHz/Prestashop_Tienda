<?php
/* Smarty version 4.3.1, created on 2023-11-03 10:17:24
  from 'C:\xampp\htdocs\ElPinal\soloadministrar\themes\default\template\controllers\feature_value\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65451d1492e0b9_81553361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '891f3b9f13e7872b6787876fd3a9a559121e9dc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\soloadministrar\\themes\\default\\template\\controllers\\feature_value\\helpers\\form\\form.tpl',
      1 => 1681848298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65451d1492e0b9_81553361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199339031565451d1490e229_20956513', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_199339031565451d1490e229_20956513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_199339031565451d1490e229_20956513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'value') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureValueForm",'id_feature_value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature_value']->value->id ))),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
