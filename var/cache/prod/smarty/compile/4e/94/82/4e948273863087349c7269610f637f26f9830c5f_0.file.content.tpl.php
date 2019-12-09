<?php
/* Smarty version 3.1.33, created on 2019-12-09 02:48:29
  from 'C:\xampp\htdocs\php\admin590ay5hhf\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded8bcd1aff96_15568145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e948273863087349c7269610f637f26f9830c5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\admin590ay5hhf\\themes\\default\\template\\content.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded8bcd1aff96_15568145 (Smarty_Internal_Template $_smarty_tpl) {
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
