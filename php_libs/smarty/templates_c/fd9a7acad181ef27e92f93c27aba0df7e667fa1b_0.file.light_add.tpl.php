<?php
/* Smarty version 3.1.30, created on 2020-07-27 14:46:28
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/light_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1e6a34872df5_37443714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd9a7acad181ef27e92f93c27aba0df7e667fa1b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/light_add.tpl',
      1 => 1595828788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1e6a34872df5_37443714 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1>Add Light data</h1>

                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    <?php echo $_smarty_tpl->tpl_vars['form']->value['hidden'];?>

                    <table>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_place']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['error'];?>
</div>
                            <?php }?>
                            <div class="form-item">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_place']['html'];?>

                            </div>
                        </tr>
                        <br><br>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['label'];?>
</div>
                            <div class="form-item">
                                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_type']['error'])) {?>
                                <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['error'];?>
</div><br>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_type']['html'];?>

                                
                            </div>
                        </tr>
                        <br><br>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['label'];?>
</div>
                            <div class="form-item">
                                <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_date']['error'])) {?>
                                <div style="color:red; font-size: smaller;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['error'];?>
</div><br>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_date']['Y']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['light_date']['M']['html'];
echo $_smarty_tpl->tpl_vars['form']->value['light_date']['d']['html'];?>

                                
                            </div>
                        </tr>
                        <br><br>
                        <tr>
                            <div class="text-form"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['label'];?>
</div>
                            <?php if (isset($_smarty_tpl->tpl_vars['form']->value['light_use']['error'])) {?>
                            <div style="color:#ee3e52;"><?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['error'];?>
</div>
                            <?php }?>
                            <div class="form-item">
                                <?php echo $_smarty_tpl->tpl_vars['form']->value['light_use']['html'];?>

                                
                            </div>
                        </tr>

                        <br><br><br>

                        

                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                        
                        <?php echo $_smarty_tpl->tpl_vars['form']->value['reset']['html'];?>
　
                        
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
