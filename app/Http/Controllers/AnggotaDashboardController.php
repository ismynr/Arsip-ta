<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggotaDashboardController extends Controller
{
    public function index()
    {
        return view('user.anggota.dashboard');
    }
}
