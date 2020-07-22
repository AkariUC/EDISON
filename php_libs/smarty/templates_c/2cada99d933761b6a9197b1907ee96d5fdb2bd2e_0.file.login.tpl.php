<?php
/* Smarty version 3.1.30, created on 2020-07-14 12:44:04
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0d2a04c143f3_07457623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cada99d933761b6a9197b1907ee96d5fdb2bd2e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/login.tpl',
      1 => 1594457721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d2a04c143f3_07457623 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="/js/fadein.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/login.js"><?php echo '</script'; ?>
>
        <link rel="stylesheet" type="text/css" href="/css/login.css">

    </head>

    <body>


        <div id="loader-bg">
            <div id="loader">
                <img src="light_backcolor.png" width="100%" />
                <!--<p>Now Loading...</p>-->
            </div>
        </div>
        <div id="wrap">
            <div class="form-wrapper">
                <h1>Login</h1>
                <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
 action="" class="form-signin">
                    <div class="form-item">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
                    </div>
                    <div class="form-item">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                    </div>
                    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                    <div class="button-panel">
                        <input type="submit" class="button" title="Sign In" value="Sign In" />
                    </div>
                </form>
                <div class="form-footer">
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=regist&action=form">Create an account</a></p>
                    <div style="color: #ee3e52; font-size: smaller;"> <?php echo $_smarty_tpl->tpl_vars['auth_error_mess']->value;?>
 </div>
                </div>
            </div>
        </div>

        <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
        <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre>
        <?php }?>
    </body>

</html><?php }
}
