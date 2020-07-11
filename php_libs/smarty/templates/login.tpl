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

        <script type="text/javascript" src="/js/fadein.js"></script>
        <script type="text/javascript" src="/js/login.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/login.css">

    </head>

    <body>


        <div id="loader-bg">
            <div id="loader">
                <img src="light_backcolor.png" width="100%" />
                <!--<p>Now Loading...</p>-->
            </div>
        </div>
        <div id="wrap">
            <div class="form-wrapper">
                <h1>Login</h1>
                <form {$form.attributes} action="" class="form-signin">
                    <div class="form-item">
                        <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
                    </div>
                    <div class="form-item">
                        <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                    </div>
                    <input type="hidden" name="type" value="{$type}">
                    <div class="button-panel">
                        <input type="submit" class="button" title="Sign In" value="Sign In" />
                    </div>
                </form>
                <div class="form-footer">
                    <p><a href="{$SCRIPT_NAME}?type=regist&action=form">Create an account</a></p>
                    <div style="color: #ee3e52; font-size: smaller;"> {$auth_error_mess} </div>
                </div>
            </div>
        </div>

        {if ($debug_str)}
        <pre>{$debug_str}</pre>
        {/if}
    </body>

</html>