<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/transactions', function () {
    $batched_transactions = array(
      'batch 1' => array(
        'date' => 'March 3rd 2017',
        'total_spent' => '100',
        'transactions' => array(
          array(
            'merchant' => array(
              'name' => 'Starbucks',
              'logo' => 'merchant/logo/url.png',
              'address' => '123 Oxford St. WC1',
            ),
            'amount' => '2.35',
            'description' => 'Starbucks',
            'decline_reason' => 'something'
          ),
          array(
            'merchant' => array(
              'name' => 'Pret',
              'logo' => 'merchant/logo/url.png',
              'address' => '1234 Oxford St. WC1',
            ),
            'amount' => '2.50',
            'description' => 'Pret',
            'decline_reason' => 'sfasfdsdf'
          )
        ),
      ),
    );
    return json_encode($batched_transactions);
});
