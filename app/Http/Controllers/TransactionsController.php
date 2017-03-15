<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class TransactionsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function show()
    {
		// Call it
		$client = new Client();

		// json parse $response
		// put it in $batched_transactions!
		$res = $client->request('GET', route('tranactions_date_api'));
		$batched_transactions = json_decode($res->getBody(), true);
		return view('welcome', ['batched_transactions' => $batched_transactions]);
    }
}
