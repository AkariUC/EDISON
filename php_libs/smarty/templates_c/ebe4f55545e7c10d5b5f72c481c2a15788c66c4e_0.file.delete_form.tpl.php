<?php
/* Smarty version 3.1.30, created on 2020-07-23 12:16:44
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f19011c53c2b1_43335503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebe4f55545e7c10d5b5f72c481c2a15788c66c4e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/delete_form.tpl',
      1 => 1595474201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f19011c53c2b1_43335503 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="/css/delete_form.css">

    </head>

    <body>
        <div style="text-align:center;">
            <div id="wrap">
                <div class="form-wrapper">
                    <h1>Delete</h1>

                    <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        <br><br>
                        <input type="submit" class="button" title="Delete" value="Delete" />
                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                    </form>
                    <br>
                    <div class="form-footer">
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">Back Page</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
        <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
    </body>

</html><?php }
}
