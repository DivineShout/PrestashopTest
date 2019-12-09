<?php
/* Smarty version 3.1.33, created on 2019-12-09 02:24:07
  from 'C:\xampp\htdocs\php\admin121zrvkyz\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded86176afc62_51094757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6bb57c1b1932bffabd16cc73cc47a26bf3c9e80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\admin121zrvkyz\\themes\\default\\template\\content.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded86176afc62_51094757 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
