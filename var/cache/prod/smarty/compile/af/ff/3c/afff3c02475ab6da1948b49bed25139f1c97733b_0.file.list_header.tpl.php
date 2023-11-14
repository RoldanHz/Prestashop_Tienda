<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:23:32
  from 'C:\xampp\htdocs\ElPinal\soloadministrar\themes\default\template\controllers\cart_rules\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449ff43a13d0_16077165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afff3c02475ab6da1948b49bed25139f1c97733b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\soloadministrar\\themes\\default\\template\\controllers\\cart_rules\\helpers\\list\\list_header.tpl',
      1 => 1681848298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449ff43a13d0_16077165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44809336865449ff43962d9_83571374', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_44809336865449ff43962d9_83571374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_44809336865449ff43962d9_83571374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->id ));?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
