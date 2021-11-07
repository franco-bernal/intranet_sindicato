<?php

namespace App\Http\Controllers;


use App\Models\Registro_socios;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registro_sociosController extends Controller
{
    function enviarsolicitud(Request $request)
    {
        return view('registro_socios');
    }
}
