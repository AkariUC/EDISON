<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{$title}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript" src="/js/sample.js"></script>
        <script type="text/javascript" src="/js/login.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/delete_form.css">

    </head>

    <body>
        <div style="text-align:center;">
            <div id="wrap">
                <div class="form-wrapper">
                    <h1>Delete</h1>

                    <form {$form.attributes}>
                        {$message}
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div class="button-panel">
                            <input type="submit" class="button" title="Delete" value="Delete" />
                        </div>
                        <input type="hidden" name="type" value="{$type}">
                        <input type="hidden" name="action" value="{$action}">

                    </form>

                    {if ($is_system) }
                    <br>
                    <br>
                    [ <a href="{$SCRIPT_NAME}?type=list&action=form{$add_pageID}">会員一覧</a> ]
                    {/if}

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="form-footer">
                        {$disp_login_state}
                        <br>
                        <br>
                        <p><a href="{$SCRIPT_NAME}">Back Page</a></p>
                    </div>
                </div>
            </div>
        </div>
        {if ($debug_str)}
        <pre>{$debug_str}</pre>{/if}
    </body>

</html>