<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/memberinfo_form.css">

        <script type="text/javascript" src="js/quickform.js" async></script>
    </head>

    <body>
        <div id="wrap" style="text-align:center;">
            <div class="form-wrapper">
                <h1>Input user information</h1>

                {$message}
                <form {$form.attributes}>
                    {$form.hidden}
                    <table>
                        <tr>
                            <div>{$form.username.label}</div>
                            {if isset($form.username.error)}
                            <div style="color:#ee3e52;">{$form.username.error}</div>
                            {/if}
                            <div class="input_form">
                                {$form.username.html}
                            </div>
                        </tr>
                        <tr>
                            <div>{$form.password.label}</div>
                            {if isset($form.password.error)}
                            <div style="color:#ee3e52;">{$form.password.error}</div>
                            {/if}
                            <div class="input_form">
                                {$form.password.html}
                            </div>
                        </tr>
                        <tr>
                            <div>{$form.last_name.label}</div>
                            {if isset($form.last_name.error)}
                            <div style="color:#ee3e52;">{$form.last_name.error}</div>
                            {/if}
                            <div class="input_form">
                                {$form.last_name.html}
                            </div>
                        </tr>
                        <tr>
                            <div>{$form.first_name.label}</div>
                            {if isset($form.first_name.error)}
                            <div style="color:#ee3e52;">{$form.first_name.error}</div>
                            {/if}
                            <div class="input_form">
                                {$form.first_name.html}
                            </div>
                        </tr>
                        <tr>
                            <div>{$form.birthday.label}</div>
                            {if isset($form.birthday.error)}
                            <div style="color:#ee3e52;">{$form.birthday.error}</div><br>
                            {/if}
                            {$form.birthday.Y.html}{$form.birthday.m.html}{$form.birthday.d.html}
                        </tr>
                        <tr>
                            <div>{$form.ken.label}</div>
                            {if isset($form.ken.error)}
                            <div style="color:#ee3e52;">{$form.ken.error}</div><br>
                            {/if}
                            {$form.ken.html}
                        </tr>

                        <br><br><br>


                        <td>&nbsp; </td>

                        <input type="hidden" name="type" value="{$type}">
                        <input type="hidden" name="action" value="{$action}">

                        {if ( $form.submit2.attribs.value != "" ) }
                        {$form.submit2.html}　
                        {else}
                        {$form.reset.html}　
                        {/if}
                        {$form.submit.html}

                    </table>
                </form>
                {$disp_login_state}
                <div class="form-footer">
                    <a href="{$SCRIPT_NAME}">Back page</a>
                </div>
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