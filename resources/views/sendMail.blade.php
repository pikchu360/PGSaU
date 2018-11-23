<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="flex­center position­ref full­height">
        <div class="row">
            <div class="col­lg­12 margin­tb">
                <div class="pull­left">
                    <h2>Mail Sender on Laravel</h2>
                </div>
                <div class="pull­right">
                    <a class="btn btn­success" href="{{ action('MailController@sendBasicMail') }}"> Sending basic mails!</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>