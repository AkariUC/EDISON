<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/login.css">

        <script type="text/javascript" src="js/quickform.js" async></script>
    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper">
                <h1>Create User</h1>
                <table>
                    <tr>
                        <td>
                            {$message}
                            <form {$form.attributes}>
                                {$form.hidden}
                                <table>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.username.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.username.error)}
                                            <div style="color:#ee3e52;">{$form.username.error}</div>
                                            {/if}
                                            {$form.username.html}</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.password.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.password.error)}
                                            <div style="color:#ee3e52;">{$form.password.error}</div>
                                            {/if}
                                            {$form.password.html}</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.last_name.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.last_name.error)}
                                            <div style="color:#ee3e52;">{$form.last_name.error}</div>
                                            {/if}
                                            {$form.last_name.html}</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.first_name.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.first_name.error)}
                                            <div style="color:#ee3e52;">{$form.first_name.error}</div>
                                            {/if}
                                            {$form.first_name.html}</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.birthday.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.birthday.error)}
                                            <div style="color:#ee3e52;">{$form.birthday.error}</div><br>
                                            {/if}
                                            {$form.birthday.Y.html}{$form.birthday.m.html}{$form.birthday.d.html}</td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align:top; text-align:right;">{$form.ken.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.ken.error)}
                                            <div style="color:#ee3e52;">{$form.ken.error}</div><br>
                                            {/if}
                                            {$form.ken.html}</td>
                                    </tr>

                                    <br><br><br>

                                    <tr>
                                        <td>&nbsp; </td>
                                        <td>
                                            <input type="hidden" name="type" value="{$type}">
                                            <input type="hidden" name="action" value="{$action}">

                                            {if ( $form.submit2.attribs.value != "" ) }
                                            {$form.submit2.html}　
                                            {else}
                                            {$form.reset.html}　
                                            {/if}
                                            {$form.submit.html}
                                        </td>
                                    </tr>
                                </table>
                                <br><br><br><br>
                            </form>
                        </td>
                    </tr>
                </table>
                {$disp_login_state}
                <div class="form-footer">
                    <a href="{$SCRIPT_NAME}">To Login Page</a>
                </div>
                <br><br><br><br>
            </div>
        </div>
        </div>
        {if $form.javascript}
        {$form.javascript}
        {/if}
        {if ($debug_str)}
        <pre>{$debug_str}</pre>{/if}
    </body>

</html>