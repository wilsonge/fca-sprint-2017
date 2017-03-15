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
              @php
              dd($batched_transactions);
              @endphp
                @foreach ($batched_transactions as $batch)
                <div class="list-group">
                    @foreach($batch['transactions'] as $transaction)
                        <a href="#" class="list-group-item">

                          <!-- LOGO -->
                          @if ($transaction['merchant']['logo'])
                          <img src="{{ $transaction['merchant']['logo'] }}" />
                          @endif

                          <!-- amount -->
                          @if ($transaction['decline_reason'] != 'INSUFFICIENT_FUNDS')
                          @if (strpos($transaction['amount'], '-'))
                          <span class="pull-right text-success">
                              <h4>&#43;&pound;{{ $transaction['amount'].replace('-','') }}</h4>
                          </span>
                          @else
                          <span class="pull-right">
                              <h4>&pound;{{ $transaction['amount'] }} Date</h4>
                          </span>
                          @endif
                          @endif

                          <!-- merchant -->
                          @if ($transaction['merchant']['name'])
                          <span>{{ $transaction['merchant']['name'] }}</span>
                          @else
                          <span>{{ $transaction['description'] }}</span>
                          @endif

                        </a>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
        <script src=js/app.js></script>
    </body>
</html>
