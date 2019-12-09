<?php
/* Smarty version 3.1.33, created on 2019-12-09 00:23:08
  from 'C:\xampp\htdocs\php\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded69bcd92814_05867088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7d5d96cf03c673f7b70c187cfa1b011a4b19e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded69bcd92814_05867088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10845747625ded69bcd8c311_24325047', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_10845747625ded69bcd8c311_24325047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10845747625ded69bcd8c311_24325047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
