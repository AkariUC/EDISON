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

        <link rel="stylesheet" type="text/css" href="/css/member_top.css">

    </head>

    <body>
        <div id="wrap">
            <div class="form-wrapper" style="text-align:center;">
                <h1>Top page</h1>

                <div class="form-rooter">
                    {$name}さんのとっぷ画面です<br>
                </div>
                <form {$form.attributes}>
                    <br>
                    {if ($data) }
                    <table style="font-size: 0.5pt;">
                        <th>設置場所</th>
                        <th>電球の型</th>
                        <th>設置日</th>
                        <th></th>

                        {foreach item=item from=$data}
                        <tr>
                            <td>{$item.light_place|escape:"html"}</td>
                            <td>{$item.light_type|escape:"html"}</td>
                            <td>{$item.light_date|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}</td>
                            <td><a href="{$SCRIPT_NAME}?type=delete&action=confirm&id={$item.id}{$add_pageID}">delete</a></td>
                        </tr>
                        {/foreach}
                    </table>
                    {/if}
                </form>

                <br><br><br>

                <div class="form-add">
                    <a href="{$SCRIPT_NAME}?type=addLight&action=form">Add light data</a>
                </div>

                <div class="form-footer">
                    <a href="{$SCRIPT_NAME}?type=modify&action=form">会員登録情報の修正</a>
                    <br><br>
                    <a href="{$SCRIPT_NAME}?type=delete&action=confirm">退会する</a>
                </div>
            </div>
            {if ($debug_str)}
            <pre>{$debug_str}</pre>{/if}
        </div>
    </body>

</html>