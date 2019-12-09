<?php
/* Smarty version 3.1.33, created on 2019-12-09 00:11:41
  from 'C:\xampp\htdocs\php\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ded670dbecfa7_89985217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f64df74dc7b35a5563caa8982d946f7cdfba69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php\\themes\\classic\\templates\\index.tpl',
      1 => 1574684956,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ded670dbecfa7_89985217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15522844985ded670dbe85a3_56322377', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8313103215ded670dbe92e2_87395082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1368006015ded670dbeabc5_98608811 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_19466796795ded670dbea259_33952755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1368006015ded670dbeabc5_98608811', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15522844985ded670dbe85a3_56322377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15522844985ded670dbe85a3_56322377',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8313103215ded670dbe92e2_87395082',
  ),
  'page_content' => 
  array (
    0 => 'Block_19466796795ded670dbea259_33952755',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1368006015ded670dbeabc5_98608811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8313103215ded670dbe92e2_87395082', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19466796795ded670dbea259_33952755', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
