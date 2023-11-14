<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:09:19
  from 'C:\xampp\htdocs\ElPinal\soloadministrar\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449c9fd35720_97483468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f18951488295e546e3bcaf7e8e72e88acae2296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\soloadministrar\\themes\\new-theme\\template\\content.tpl',
      1 => 1681848298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449c9fd35720_97483468 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
