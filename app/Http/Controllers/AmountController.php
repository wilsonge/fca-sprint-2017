<?php

namespace App\Http\Controllers;

class AmountController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
		return view('totals', ['amount' => 600, 'jar_amount' => 142]);
    }
}
