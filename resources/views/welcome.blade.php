<html>
    <head>
        <title>documentO</title>

        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        {!! Html::style('assets/css/bootstrap.css') !!}

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
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
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        
        <div class="container">            
            <div class="content">
                <div class="title">documentO</div>                
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Log In</a>
            </div>
        </div>
    </body>
</html>
