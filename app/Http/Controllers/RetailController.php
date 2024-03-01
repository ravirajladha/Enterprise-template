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
    public function stock()
    {
        return view('retail.stock');
    }
    public function productecom()
    {
        return view('retail.productecom');
    }
    public function campaign()
    {
        return view('retail.campaign');
    }
    public function customer()
    {
        return view('retail.customer');
    }
    public function customerdetails()
    {
        return view('retail.customerdetails');
    }
    public function checkout()
    {
        return view('retail.checkout');
    }
}
