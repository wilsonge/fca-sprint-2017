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
      // call it
      $client = new Client();
      // json parse $response
      // put it in $batched_transactions!


      $res = $client->request('GET', url('/') . '/api/transactions');
      
      $batched_transactions = json_decode($res->getBody());

	    return view('welcome', ['batched_transactions' => $batched_transactions]);
    }
}
