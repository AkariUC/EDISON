<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$title}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div style="text-align:center;">
        <hr>
            <strong>{$title}</strong>
        <hr>

        <table>
            <tr>
                <td>
                    <form {$form.attributes}>
                        <table>
                            <br><br><br>
                            <tr>
                                <td><div style="text-align: right">{$form.username.label}:</div></td>
                                <td> {$form.username.html}</td>
                            </tr>
                            <tr>
                                <td><div style="text-align: right">{$form.password.label}:</div></td>
                                <td> {$form.password.html}</td>
                            </tr>
                            <tr>
                                <td colspan="2" >
                                <input type="hidden" name="type" value="{$type}">
                                <div style="text-align:center;">{$form.submit.html}</div>
                            <br>
                                    <div style="color:red; font-size: smaller;"> {$auth_error_mess} </div></td>
                            </tr>
                        </table>
                    </form>	  
                    <p><a href="{$SCRIPT_NAME}?type=regist&action=form">NewAccout...</a></p>
                </td>
            </tr>
        </table>

    </div>
    {if ($debug_str)}
        <pre>{$debug_str}</pre>
    {/if}
</body>

</html>