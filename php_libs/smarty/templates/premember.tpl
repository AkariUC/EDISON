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
        <link rel="stylesheet" type="text/css" href="/css/login.css">
    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper">
                <h1>{$title}</h1>
                <div class="form-footer">
                    {$message}
                </div>
            </div>

            {if ($debug_str)}
            <pre>{$debug_str}</pre>{/if}

    </body>

</html>