<?php

namespace App\Http\Controllers;

use App\Models\permisos_descripcion;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $all_users = User::all();
        $all_permisos = permisos_descripcion::all();
        return view('dashboard.users', compact('all_users', 'all_permisos'));
    }
    public function createUser(Request $request)
    {
        $user_data = null;
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $resp = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo_usuario' => $request->tipo_usuario,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ]);
        if ($resp == 1) {
            $user_data = User::select('id', 'name', 'email', 'tipo_usuario', 'updated_at')
                ->where('name', '=', $request->name)
                ->where('created_at', '=', $created_at)->first();

            $mensaje_permisos = $this->permisosPorUsuario($user_data->id);
            array_push($user_data, array('permisos' => $mensaje_permisos));
            
            return $user_data;
        } else {
            return 0;
        }
    }
    public function deleteUser(Request $request)
    {
        $resp = DB::table('users')
            ->select('users.*')
            ->Where('users.id', '=', $request->id_delete)->delete();
        return $resp;
    }


    public function permisosTecnicos($id_usuario)
    {
        $created_at = Carbon::now();
        $updated_at = Carbon::now();
        $permisos = permisos_descripcion::all();
        $total_permisos = count($permisos);
        $contador = 0;
        foreach ($permisos as $permiso) {
            $resp = DB::table('permisos')->insert([
                'id_user' => $id_usuario,
                'id_permiso' => $permiso->id,
                'active' => 1,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
            $contador = $contador + $resp;
        }

        return "Permisos agregados: " . $contador . "/" . $total_permisos;
    }
}
