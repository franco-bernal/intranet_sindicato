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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'typeuser' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('123456789'),
            'typeuser' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'password' => Hash::make('123456789'),
            'typeuser' => 1
        ]);

        return User::all();
    }
}
