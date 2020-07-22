<?php
/* Smarty version 3.1.30, created on 2020-07-14 18:19:38
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/message.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0d78aadd4929_93954466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb78cf9fa7a6faa1db5c13d3d04370177f38cafa' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/message.tpl',
      1 => 1594617707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0d78aadd4929_93954466 (Smarty_Internal_Template $_smarty_tpl) {
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

        <link rel="stylesheet" type="text/css" href="/css/message.css">

        <?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
    </head>

    <body>
        <table>
            <tr>
                <div id="wrap">
                    <div class="form-wrapper">
                        <?php if (($_smarty_tpl->tpl_vars['is_system']->value)) {?>
                        <br>
                        <br>
                        <div class="form-footer">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=list&action=form<?php echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">会員一覧</a> ]
                        </div>
                        <?php }?>
                        <br>
                        <br>
                        <div class="form-footer">
                            <?php echo $_smarty_tpl->tpl_vars['disp_login_state']->value;?>

                        </div>
                        </td>
                        <div class="form-footer">

                            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        </div>
                        <div class="form-footer">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">To Login Page</a>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        </div>
        <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
        <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
    </body>

</html><?php }
}
