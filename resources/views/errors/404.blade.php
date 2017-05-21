<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 not found</title>

    <style>
        html {
            display: table;
            height: 100%;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
        }

        .error {
            width: 582px;
            height: 363px;
            margin: 0 auto;
            text-align: center;
        }

        .keyboard {
            display: block;
            width: 582px;
        }

        .keyboard-button {
            width: 180px;
            margin-top: 16px;
        }

        @media (max-width: 582px) {
            .error {
                width: 80%;
            }
            .keyboard {
                width: 100%;
            }
            .keyboard-button {
                width: 30%;
            }
        }
    </style>
</head>
<body>
<div class="error">
    <img class="keyboard" src="/dist/404.png" alt="404"/>
    <a href="/home">
        <img class="keyboard-button" src="/dist/404-button.png" alt="home"/>
    </a>
</div>
</body>
</html>
