<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermisosController extends Controller
{
    public function modificarPermiso(Request $request)
    {
        $user_data = null;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $resp = DB::table('permisos')->insert([
            'id_user' => 'ID USUARIO',
            'id_permiso' => 'PERMISO A ACTUALIZAR',
            'active' => 0,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()


        ]);
        return $resp;
    }

    
}
