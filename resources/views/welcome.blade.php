<!DOCTYPE html>
<html>
    <head>

        <title>Mondo</title>
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
                <div class="col-xs-6">
                    <div class="header-tab">
                        <h4>Your Card</h4>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="header-tab">
                        <h4>Daily Budget</h4>
                    </div>
                </div>
            </div>

            <!-- transactions -->
            <div class="row">
                @foreach ($batched_transactions as $batch)
                <div class="list-group">
                    <a href="#" class="list-group-item disabled">
                        <span>{{ batch.date }}</span>
                        <span class="pull-right">Total: &pound;{{ batch.total_spent }}</span>
                    </a>
                    @foreach($batch.transactions as $transaction)
                    @if (transaction.merchant.address)
                        <a href="#" class="list-group-item">
                    @else
                        <a href="#" class="list-group-item">
                    @endif

                        <!-- logo -->
                        @if (transaction.merchant.logo)
                        <img src="{{ transaction.merchant.logo }}" />
                        @else
                        @if (transaction.description == 'Top up')
                        <img src="static/mondopurchase.png" />
                        @else
                        <img src="static/nomerchant.png" />
                        @endif
                        @endif

                        <!-- amount -->
                        @if (transaction.decline_reason != 'INSUFFICIENT_FUNDS')
                        @if (strpos(transaction.amount, '-'))
                        <span class="pull-right text-success">
                            <h4>&#43;&pound;{{ transaction.amount.replace('-','') }}</h4>
                        </span>
                        @else
                        <span class="pull-right">
                            <h4>&pound;{{ transaction.amount.split(".")[0] }}<small>&#46;{{ transaction.amount.split(".")[1] }}</small></h4>
                        </span>
                        @endif
                        @endif

                        <!-- merchant -->
                        @if (transaction.merchant.name)
                        <span>{{ transaction.merchant.name }}</span>
                        @else
                        <span>{{ transaction.description }}</span>
                        @endif

                        <!-- decline_reason -->
                        @if (transaction.decline_reason == 'INSUFFICIENT_FUNDS')
                        <br />
                        <small class="text-danger">Declined, you didn't have &pound;{{ transaction.amount }}</small>
                        @endif
                        </a>
                    @endforeach
                </div>
                @endforeach
            </div>
            <br />
            <p class="text-center">¯\_(ツ)_/¯</p>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=51.518958004956936,-0.07732272148132324&zoom=18&size=600x400&maptype=roadmap&markers=51.518958004956936,-0.07732272148132324&key=AIzaSyCUyBouO49GjpyX_gDI8FyZma6qA33f7qU" alt="" />
                        </div>
                        <div class="modal-body text-center">
                            <img src="http://avatars.io/twitter/chilango_uk/?size=large" />
                            <h3>&pound;1.50</h3>
                            <h1>Chilango</h1>
                            <p>32 Brushfield St, London E1 6AT</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src=app/app.js></script>
    </body>
</html>
