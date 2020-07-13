<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/.css">

        <script type="text/javascript" src="js/quickform.js" async></script>
    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper">
                <h1>Input user information</h1>
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
                                        <td style="vertical-align:top; text-align:right;">{$form.name.label}：</td>
                                        <td style="text-align:left;">
                                            {if isset($form.name.error)}
                                            <div style="color:#ee3e52;">{$form.name.error}</div>
                                            {/if}
                                            {$form.name.html}</td>
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
                    <a href="{$SCRIPT_NAME}">Back page</a>
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