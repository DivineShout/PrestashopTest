<?php
/* Smarty version 3.1.33, created on 2019-12-09 00:23:07
  from 'C:\xampp\htdocs\php\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded69bb66e961_34850355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6824b666a9774b18c1a100a1afb71a5cd737bc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded69bb66e961_34850355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_410249235ded69bb66cde0_20379948', 'step');
?>

<?php }
/* {block 'step'} */
class Block_410249235ded69bb66cde0_20379948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_410249235ded69bb66cde0_20379948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
