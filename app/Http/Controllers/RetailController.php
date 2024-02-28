<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetailController extends Controller
{
    public function analysis()
    {
        return view('retail.analysis');
    }
    public function warehousetree()
    {
        return view('retail.warehousetree');
    }
    public function stocksummary()
    {
        return view('retail.stocksummary');
    }
}
