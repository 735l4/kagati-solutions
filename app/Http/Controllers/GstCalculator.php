<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GstCalculator extends Controller
{
    public function index() {
        $gst_amt = round(5 - (5*100/(100+6)),2);
        return view('gst.index')->with('output',$gst_amt);
    }

    public function calculate(Request $request) {
        $original_cost = $request->amount;
        $gst = $request->gst;
        $output = round($original_cost - ($original_cost * (100/(100+$gst))), 2);

        return view('gst.calc')->with(['output' => $output, 'amt'=> $original_cost, 'gst'=> $gst]);
    }
}
