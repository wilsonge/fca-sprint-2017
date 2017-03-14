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
	    return view('welcome', ['batched_transactions' => array('foo' => 'bar')]);
    }
}
