<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Role Redirect
        if(Auth::check()){
            switch(Auth::user()->role->role_name){
                case "Admin":
                    return redirect()->route('admin.dashboard');

                case "OperatorWilayah":
                    return redirect()->route('opwil.dashboard');

                case "OperatorDaerah":
                    return redirect()->route('opdar.dashboard');
                    
                case "Anggota":
                    return redirect()->route('anggota.dashboard');
            }
        }

        return view('auth.login');
    }
}
