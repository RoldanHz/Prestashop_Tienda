<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:12:42
  from 'C:\xampp\htdocs\ElPinal\soloadministrar\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449d6a49cd11_04360354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '382a3e2ac43660f80cac4319745ee9514e76e046' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\soloadministrar\\themes\\default\\template\\content.tpl',
      1 => 1681848298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449d6a49cd11_04360354 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
