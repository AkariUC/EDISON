<?php
/* Smarty version 3.1.30, created on 2020-07-22 18:37:48
  from "/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/member_top.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1808eca067b1_41185256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a3aaba09fb177c79c9927c3869fb36c3403f548' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/php_libs/smarty/templates/member_top.tpl',
      1 => 1595410666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1808eca067b1_41185256 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/Applications/XAMPP/xamppfiles/php_libs/smarty/libs/plugins/modifier.date_format.php';
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

        <link rel="stylesheet" type="text/css" href="/css/member_top.css">

    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper" style="text-align:center;">
                <h1>Top page</h1>

                <div class="form-rooter">
                    <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
さんのとっぷ画面です<br>
                </div>
                <form <?php echo $_smarty_tpl->tpl_vars['form']->value['attributes'];?>
>
                    <br>
                    <?php if (($_smarty_tpl->tpl_vars['data']->value)) {?>
                    <table style="font-size: 0.5pt;">
                        <th>設置場所</th>
                        <th>電球の型</th>
                        <th>設置日</th>
                        <th></th>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                        <tr>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['light_place'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['light_type'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['light_date'],"%Y&#24180;%m&#26376;%d&#26085;");?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];
echo $_smarty_tpl->tpl_vars['add_pageID']->value;?>
">delete</a></td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>
                    <?php }?>
                </form>

                <br><br><br>

                <div class="form-add">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=addLight&action=form">Add light data</a>
                </div>

                <div class="form-footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=modify&action=form">会員登録情報の修正</a>
                    <br><br>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=delete&action=confirm">退会する</a>
                </div>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
            <pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre><?php }?>
        </div>
    </body>

</html><?php }
}
