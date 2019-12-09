<?php
/* Smarty version 3.1.33, created on 2019-12-09 01:53:42
  from 'C:\xampp\htdocs\php\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded7ef651e1b1_86915074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d0b8989560559ee7ced356f423527512bdc2679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\admin\\themes\\default\\template\\content.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded7ef651e1b1_86915074 (Smarty_Internal_Template $_smarty_tpl) {
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
