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
    	$total = 600;
    	// TODO: This is a hack using the current year and month - but should come from the active data's month
	    $number = (cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')))/7;
		return view('totals', ['amount' => $total, 'jar_amount' => $total / $number]);
    }
}
