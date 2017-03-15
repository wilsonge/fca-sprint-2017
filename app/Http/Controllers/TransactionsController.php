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
		$client = new Client;
		$res = $client->request('GET', route('tranactions_date_api'));
		$transactionsGroups = json_decode($res->getBody(), true);
		$count = 0;

		foreach ($transactionsGroups['essential'] as $transaction)
		{
			$count += $transaction['amount'];
		}

		return view('welcome', ['batched_transactions' => $transactionsGroups, 'committed' => $count]);
    }
}
