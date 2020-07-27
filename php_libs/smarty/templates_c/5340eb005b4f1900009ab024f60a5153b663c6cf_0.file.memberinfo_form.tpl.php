<?php
/* Smarty version 3.1.30, created on 2020-07-23 13:15:09
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/memberinfo_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f190ecd399bb5_15124953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5340eb005b4f1900009ab024f60a5153b663c6cf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/memberinfo_form.tpl',
      1 => 1595477708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f190ecd399bb5_15124953 (Smarty_Internal_Template $_smarty_tpl) {
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

        <link rel="stylesheet" type="text/css" href="/css/memberinfo_form.css">

        <?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
    </head>

    <body>
        <div id="wrap" style="text-align:center;">
            <div class="form-wrapper">
                <h1>Input user information</h1>

                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

                    <table>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['username']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['username']['error'];?>
</div>
                            <?php }?>
                            <div class="form-item">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['username']['html'];?>

                            </div>
                        </tr>
                        <br><br>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['password']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['password']['error'];?>
</div>
                            <?php }?>
                            <div class="form-item">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['password']['html'];?>

                            </div>
                        </tr>
                        <br><br>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['name']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['name']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['name']['error'];?>
</div>
                            <?php }?>
                            <div class="form-item">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['name']['html'];?>

                            </div>
                        </tr>

                        <br><br><br>


                        <td>&nbsp; </td>

                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                        <?php if (($_smarty_tpl->tpl_vars['form']->value['submit2']['attribs']['value'] != '')) {?>
                        <?php echo $_smarty_tpl->tpl_vars['form']->value['submit2']['html'];?>
　
                        <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
                        <?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['form']->value['submit']['html'];?>


                    </table>
                </form>
                
                <div class="form-footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
">Back page</a>
                </div>
            </div>
        </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['form']->value['javascript']) {?>
        <?php echo $_smarty_tpl->tpl_vars['form']->value['javascript'];?>

        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
        <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
    </body>

</html><?php }
}
