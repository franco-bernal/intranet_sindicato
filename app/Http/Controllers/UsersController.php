<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function all()
    {
        return User::all();
    }
    public function create()
    {
        DB::table('users')->insert([
            'name' => 'admincito',
            'email' => 'admincito@gmail.com',
            'password' => Hash::make('123456789'),
            'tipo_usuario' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'juanito',
            'email' => 'juanito@gmail.com',
            'password' => Hash::make('123456789'),
            'tipo_usuario' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'pedrito',
            'email' => 'pedrito@gmail.com',
            'password' => Hash::make('123456789'),
            'tipo_usuario' => 1
        ]);


        return User::all();
    }
}
