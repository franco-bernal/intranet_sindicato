<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisosDetailsController extends Controller
{
    public function crearPermiso(Request $request)
    {
        $resp = DB::table('permisos_descripcions')->insert([
            'nombre' => $request->nombre,
            'estado' => $request->estado,
        ]);
        if ($resp == 1) {
            return redirect()->back()->with('msg_crearpermiso', "Permiso " . $request->nombre . " creado.");
        }
        return redirect()->back()->with('msg_crearpermiso', "Permiso no agregado.");
    }
}
