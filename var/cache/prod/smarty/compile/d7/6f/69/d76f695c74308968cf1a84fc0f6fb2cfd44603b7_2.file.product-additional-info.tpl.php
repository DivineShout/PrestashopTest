<?php
/* Smarty version 3.1.33, created on 2019-12-09 03:37:56
  from 'C:\xampp\htdocs\php\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded9764a16001_17929761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd76f695c74308968cf1a84fc0f6fb2cfd44603b7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded9764a16001_17929761 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
