<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="/css/message.css">

        <script type="text/javascript" src="js/quickform.js" async></script>
    </head>

    <body>
        <table>
            <tr>
                <div id="wrap">
                    <div class="form-wrapper">
                        {if ($is_system) }
                        <br>
                        <br>
                        <div class="form-footer">
                            <a href="{$SCRIPT_NAME}?type=list&action=form{$add_pageID}">会員一覧</a> ]
                        </div>
                        {/if}
                        <br>
                        <br>
                        <div class="form-footer">
                            {$disp_login_state}
                        </div>
                        </td>
                        <div class="form-footer">

                            {$message}
                        </div>
                        <div class="form-footer">
                            <a href="{$SCRIPT_NAME}">To Login Page</a>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        </div>
        {if ($debug_str)}
        <pre>{$debug_str}</pre>{/if}
    </body>

</html>