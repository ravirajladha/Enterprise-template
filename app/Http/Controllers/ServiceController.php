<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


class ServiceController extends Controller
{
    public function show()
    {
        return view('services.index');
    }
    public function empty()
    {
        return view('services.empty');
    }
    public function project_management()
    {
        return view('services.project_management');
    }
    public function issue()
    {
        return view('services.issue');
    }
    public function warranty_claim()
    {
        return view('services.warranty_claim');
    }
    public function invoice()
    {
        return view('services.invoice');
    }
    public function maintenance_visit()
    {
        return view('services.maintenance_visit');
    }
}