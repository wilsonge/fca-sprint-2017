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
                          @if (array_key_exists('logo', $transaction))
                            <img src="{{$transaction['logo']}}" />
                          @else
                            <img src="/monzo-png.png" />
                          @endif

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

            <p class="text-center">There are &pound;{{ number_format($committed) }} payments.<br>You can settle these immediately so you'll<br>know exactly how much is left to spend</p>
            <a style="margin-bottom: 20px;" href="{{ url('/month_total') }}" class="center-block btn btn-primary">Hide Recurring payments</a>
        </div>
        <script src=js/app.js></script>
    </body>
</html>
