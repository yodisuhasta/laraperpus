<!DOCTYPE html>
<html>
    <head>
        <title>404 Not Found</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
            p{
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Opps :(</div>
                <p>Maaf, Halaman yang anda maksud tidak ada.</p>
                <p><a href="{{ url( '/' ) }}"> Kembali ke halaman awal </a></p>
            </div>
        </div>
    </body>
</html>
