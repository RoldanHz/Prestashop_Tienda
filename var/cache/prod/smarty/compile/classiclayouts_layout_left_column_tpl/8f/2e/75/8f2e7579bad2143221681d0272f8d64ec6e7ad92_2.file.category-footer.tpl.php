<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:10:04
  from 'C:\xampp\htdocs\ElPinal\themes\classic\templates\catalog\_partials\category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449cccb07d11_14085103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2e7579bad2143221681d0272f8d64ec6e7ad92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\themes\\classic\\templates\\catalog\\_partials\\category-footer.tpl',
      1 => 1671916050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449cccb07d11_14085103 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
