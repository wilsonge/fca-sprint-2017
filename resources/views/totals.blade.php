<!DOCTYPE html>
<html>
    <head>

        <title>FCA Tech Sprint Demo</title>
        <meta charset="utf-8">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" sizes="196x196" href="static/favicon.png">

        <!-- css -->
        <link rel="stylesheet" href="css/app.css">

    </head>
    <body>
        <div class="container">

            <!-- header -->
            <div class="row header">
                <div class="col-xs-12">
                    <div class="header-tab">
                        <h3>Plan this month</h3>
                        <p>You will have:</p>
                        <h2>&pound;{{$amount}}</h2>
                        <p>left of disposable income</p>
                    </div>
                    <div class="text-center">
                        <p>Do you want to create money <br> jars to budget &pound;{{$jar_amount}} per week?</p>
                    </div>
                    <button class="btn btn-primary center-block">
                        Set budget
                    </button>
                </div>
            </div>
        </div>
        <script src=js/app.js></script>
    </body>
</html>
