<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function analysis()
    {
        return view('distribution.analysis');
    }
    public function transaction()
    {
        return view('distribution.transaction');
    }
    public function mega_transaction()
    {
        return view('distribution.mega_transaction');
    }
    public function tree()
    {
        return view('distribution.tree');
    }
}
