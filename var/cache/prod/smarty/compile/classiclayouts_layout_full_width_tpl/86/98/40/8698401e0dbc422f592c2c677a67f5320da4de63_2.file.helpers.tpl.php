<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:10:25
  from 'C:\xampp\htdocs\ElPinal\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449ce16fa6c5_21272731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8698401e0dbc422f592c2c677a67f5320da4de63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671916050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449ce16fa6c5_21272731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\ElPinal\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\86\\98\\40\\8698401e0dbc422f592c2c677a67f5320da4de63_2.file.helpers.tpl.php',
    'uid' => '8698401e0dbc422f592c2c677a67f5320da4de63',
    'call_name' => 'smarty_template_function_renderLogo_107901641865449ce16f4f89_61486613',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_107901641865449ce16f4f89_61486613 */
if (!function_exists('smarty_template_function_renderLogo_107901641865449ce16f4f89_61486613')) {
function smarty_template_function_renderLogo_107901641865449ce16f4f89_61486613(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_107901641865449ce16f4f89_61486613 */
}
