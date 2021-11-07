<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PreguntasController extends Controller
{
    function enviarpreguntas(Request $request)
    {
        //dd($request);
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $rut = $request->input('rut');
        $area = $request->input('area');
        $telefono = $request->input('telefono');
        $descripcion = $request->input('descripcion');
        $estaok = 1;

        if ($nombre == '') {
            $estaok = 'no';
        }
        if ($apellido == '') {
            $estaok = 'no';
        }
        if ($rut == '') {
            $estaok = 'no';
        }
        if ($area == '') {
            $estaok = 'no';
        }
        if ($telefono == '') {
            $estaok = 'no';
        }
        if ($descripcion == '') {
            $estaok = 'no';
        }

        if ($estaok == 1) {
            DB::table('preguntas')->insert([
                "nombre" => $nombre,
                "apellido" => $request->input('apellido'),
                "rut" => $request->input('rut'),
                "area" => $request->input('area'),
                "telefono" => $request->input('telefono'),
                "descripcion" => $request->input('descripcion'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),

            ]);
            return 'hay q poner una vista o algo';
        }
        return 'ejecucion terminada';
    }
    function listarpreguntas()
    {
        $resultadoPreguntas = Preguntas::all();

        return   view('lista', compact('resultadoPreguntas'));
    }
}
