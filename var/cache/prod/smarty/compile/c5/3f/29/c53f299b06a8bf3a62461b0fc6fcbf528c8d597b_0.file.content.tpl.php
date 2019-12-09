<?php
/* Smarty version 3.1.33, created on 2019-12-09 01:54:45
  from 'C:\xampp\htdocs\php\admin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded7f35d3c556_20907414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c53f299b06a8bf3a62461b0fc6fcbf528c8d597b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\admin\\themes\\new-theme\\template\\content.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded7f35d3c556_20907414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
