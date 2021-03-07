<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpdarDashboardController extends Controller
{
    public function index()
    {
        return view('user.opdar.dashboard');
    }
}
