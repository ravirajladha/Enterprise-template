<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManufacturingController extends Controller
{
    public function analysis()
    {
        return view('manufacturing.analysis');
    }
    public function operations()
    {
        return view('manufacturing.shop_floor_management');
    }
    public function bill_of_material()
    {
        return view('manufacturing.bill_of_material');
    }
}
