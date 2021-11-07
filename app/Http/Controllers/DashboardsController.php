<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardsController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }
    public function configuracion()
    {
        return view('dashboard.configuracion');
    }
}
