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
                        <p>We've found these regular payments coming up this month:</p>
                    </div>
                </div>
            </div>

            <!-- transactions -->
            <div class="row">
                @foreach ($batched_transactions['essential'] as $transaction)
                <div class="list-group">

                        <a href="#" class="list-group-item">

                          <!-- logo -->
                          <img src="https://pbs.twimg.com/profile_images/808367469639278592/SE68XiDa.jpg" />

                          <!-- amount -->
                          <span class="pull-right">
                              <h4>&pound;{{ $transaction['amount'] }} <br />{{ $transaction['created'] }}</h4>
                          </span>

                          <!-- name -->
                          <span><strong>{{ $transaction['name'] }}</strong> <br /> {{ $transaction['category'] }}</span>
                        </a>
                </div>
                @endforeach
            </div>
        </div>
        <script src=js/app.js></script>
    </body>
</html>
