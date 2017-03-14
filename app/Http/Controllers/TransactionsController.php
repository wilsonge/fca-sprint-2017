<?php

namespace App\Http\Controllers;

class TransactionsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function show()
    {

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

	    return view('welcome', ['batched_transactions' => $batched_transactions]);
    }
}
