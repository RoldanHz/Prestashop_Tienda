<?php
/* Smarty version 4.3.1, created on 2023-11-03 11:03:46
  from 'C:\xampp\htdocs\ElPinal\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_654527f2114779_53109298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598f798c4a95da42d0b46c10767c420211f68ce2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1677775800,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_654527f2114779_53109298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
