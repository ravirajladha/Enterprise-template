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
    public function item_variants()
    {
        return view('manufacturing.item_variants');
    }
    public function item_balance()
    {
        return view('manufacturing.item_balance');
    }
    public function batched_inventory()
    {
        return view('manufacturing.batched_inventory');
    }
    public function add_batched_inventory()
    {
        return view('manufacturing.add_batched_inventory');
    }
    public function serialized_inventory()
    {
        return view('manufacturing.serialized_inventory');
    }
    public function capacity_planning()
    {
        return view('manufacturing.capacity_planning');
    }
    public function product_variants()
    {
        return view('manufacturing.product_variants');
    }
    public function product_balance()
    {
        return view('manufacturing.product_balance');
    }
    public function subadmin()
    {
        return view('manufacturing.subadmin');
    }
}
