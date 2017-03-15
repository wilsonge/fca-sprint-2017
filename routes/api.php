<?php

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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

Route::get('transactions', function () {
	// Here we cheat and load the file rather than calling the flask webserver originally envisaged. This data is
	// coming out of a jupyter book
	$client = new Client();
	$res = $client->request('GET', url('/') . '/monzo_json_transactions_by_type.json');
	return $res->getBody();
})->name('tranactions_date_api');
