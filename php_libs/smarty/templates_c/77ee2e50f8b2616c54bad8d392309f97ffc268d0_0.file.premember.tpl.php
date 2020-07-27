<?php
/* Smarty version 3.1.30, created on 2020-07-23 12:20:26
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/premember.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1901fa130915_73490229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77ee2e50f8b2616c54bad8d392309f97ffc268d0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/premember.tpl',
      1 => 1595474424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1901fa130915_73490229 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="/js/sample.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/login.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="/css/login.css">
    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
                <div class="form-footer">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            </div>

            <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
            <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>

    </body>

</html><?php }
}
