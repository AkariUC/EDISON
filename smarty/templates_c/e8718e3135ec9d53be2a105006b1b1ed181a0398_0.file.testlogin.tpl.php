<?php
/* Smarty version 3.1.30, created on 2020-06-17 21:46:07
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/testlogin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eea108f490ee0_92245729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8718e3135ec9d53be2a105006b1b1ed181a0398' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/testlogin.tpl',
      1 => 1498222872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea108f490ee0_92245729 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['title']->value;?>

<form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
<?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
:<br>
<?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
:<br>
<?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>

<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
<?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>

</form><?php }
}
