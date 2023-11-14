<?php
/* Smarty version 4.3.1, created on 2023-11-03 01:10:25
  from 'C:\xampp\htdocs\ElPinal\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65449ce117bea1_41708745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cdd2edb129c7ae4956d35b07d45529bb62c5b0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ElPinal\\themes\\classic\\templates\\page.tpl',
      1 => 1671916050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65449ce117bea1_41708745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208364955765449ce1176f01_45230513', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17707046865449ce1177711_05270303 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_206269787665449ce11772d7_12378185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17707046865449ce1177711_05270303', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_209862357165449ce117a611_64048804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_34529714765449ce117aaf7_74934602 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_144466764765449ce117a2a0_95655901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209862357165449ce117a611_64048804', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34529714765449ce117aaf7_74934602', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_174593083065449ce117b566_59967013 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8320044365449ce117b242_39485088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174593083065449ce117b566_59967013', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_208364955765449ce1176f01_45230513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_208364955765449ce1176f01_45230513',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_206269787665449ce11772d7_12378185',
  ),
  'page_title' => 
  array (
    0 => 'Block_17707046865449ce1177711_05270303',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_144466764765449ce117a2a0_95655901',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_209862357165449ce117a611_64048804',
  ),
  'page_content' => 
  array (
    0 => 'Block_34529714765449ce117aaf7_74934602',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8320044365449ce117b242_39485088',
  ),
  'page_footer' => 
  array (
    0 => 'Block_174593083065449ce117b566_59967013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206269787665449ce11772d7_12378185', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144466764765449ce117a2a0_95655901', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8320044365449ce117b242_39485088', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
