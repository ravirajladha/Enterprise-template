<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function analysis()
    {
        return view('distribution.analysis');
    }
}
