<?php
/* Smarty version 3.1.30, created on 2020-07-22 22:49:01
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/light_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1843cd1b4a24_80854252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9a7acad181ef27e92f93c27aba0df7e667fa1b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/light_add.tpl',
      1 => 1595425716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1843cd1b4a24_80854252 (Smarty_Internal_Template $_smarty_tpl) {
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

        <link rel="stylesheet" type="text/css" href="/css/light_add.css">

        <?php echo '<script'; ?>
 type="text/javascript" src="js/quickform.js" async><?php echo '</script'; ?>
>
    </head>

    <body>
        <div id="wrap" style="text-align:center;">
            <div class="form-wrapper">
                <h1>Add Light data</h1>

                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

                    <table>
                        <tr>
                            <div><?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_place']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['error'];?>
</div>
                            <?php }?>
                            <div class="input_form">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['html'];?>

                            </div>
                        </tr>
                        <tr>
                            <div><?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_type']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['error'];?>
</div>
                            <?php }?>
                            <div class="input_form">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['html'];?>

                            </div>
                        </tr>
                        <tr>
                            <div><?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_date']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['error'];?>
</div>
                            <?php }?>
                            <div class="input_form">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['html'];?>

                            </div>
                        </tr>
                        <tr>
                            <div><?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_use']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['error'];?>
</div>
                            <?php }?>
                            <div class="input_form">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['html'];?>

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
