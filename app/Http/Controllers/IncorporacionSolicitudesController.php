<?php

namespace App\Http\Controllers;

use App\Models\IncorporacionSolicitudes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncorporacionSolicitudesController extends Controller
{
    public function index()
    {
        $solicitudes = IncorporacionSolicitudes::all();
        return view('dashboard.incorporacion', compact('solicitudes'));
    }
    public function enviar_solicitud(Request $request)
    {
        // dd($request->input('fec_ingreso'));
        $solicitudes = IncorporacionSolicitudes::where('rut', '=', $request->input('rut'))->first();
        $permiso = 0;
        $mensaje = "";
        // cambiar meses que debe cumplir
        $tiempoParaPoderEntrar = 3.04;
        $tiempoParaReintentar = 1.04;


        $tiempoTrabajando = Carbon::parse($request->input('fec_ingreso'))->floatDiffInMonths(Carbon::now());

        if ($tiempoTrabajando < $tiempoParaPoderEntrar) {
            $permiso = 0;
            $mensaje = "Aún no cumple $tiempoParaPoderEntrar meses para poder solicitar su ingreso.";
        } else {
            //Si no se encuentra en la bd
            if ($solicitudes == null) {
                $permiso = 1;
                $mensaje = "Solicitud enviada.";
            } else {
                // si ya está en la bd no puede enviar
                if ($solicitudes->status == "aprobado") {
                    $permiso = 0;
                    $mensaje = "Ya pertenece al sindicato";
                } else {
                    // si han pasado más de n meses que envió su solicitud
                    $tiempoUltimoEnvio = Carbon::parse($solicitudes->created_at)->floatDiffInMonths(Carbon::now());
                    if (round($tiempoUltimoEnvio, 1) < $tiempoParaReintentar) {
                        $mensaje = "Usted ya envió un formulario";
                        $permiso = 0;
                    } else {
                        $mensaje = "Su solicitud ha sido enviada a revisión";
                        $permiso = 2;
                    }
                }
            }
        }



        if ($permiso == 1) {
            $respuesta =   DB::table('incorporacion_solicitudes')->insert([
                "nombre" => $request->input('nombre'),
                "apellido" => $request->input('apellido'),
                "rut" => $request->input('rut'),
                // "fec_ingreso" => Carbon::createFromFormat($request->input('fec_ingreso'))->format('Y-m-d'),
                "fec_ingreso" => Carbon::parse($request->input('fec_ingreso'))->format('Y/m/d'),
                "area" => $request->input('area'),
                "tel" => $request->input('tel'),
                "status" => "pendiente",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
            if ($respuesta == 0) {
                return redirect()->back()->with(['solicitud' => "No se pudo enviar. Por favor intentelo más tarde."]);
            }
            return redirect()->back()->with(['solicitud' => $mensaje]);
        } else {
            if ($permiso == 2) {
                $respuesta = DB::table('incorporacion_solicitudes')
                    ->where('id', '=', $solicitudes->id)
                    ->update([
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                        "status" => "reintento",
                    ]);
                if ($respuesta == 0) {
                    return redirect()->back()->with(['solicitud' => "No se pudo enviar. Por favor intentelo más tarde."]);
                }
            }
            return redirect()->back()->with(['solicitud' => $mensaje]);
        }
    }

    // public function getStadistics()
    // {
    //     return Stadistics::all();
    // }
    // public function getProduct(Request $request)
    // {
    //     $id = $request->input('id');
    //     return Stadistics::where('id', '=', $id)->get();
    // }



    // public function deleteStadistics(Request $request)
    // {
    //     $idDelete = $request->input('idDelete');
    //     $resp = DB::table('stadistics')
    //         ->select('stadistics.*')
    //         ->Where('stadistics.id', '=', $idDelete)->delete();

    //     if ($resp == 1) {
    //         $resp == "borrado";
    //     } else {
    //         $resp == "error al borrar";
    //     }


    //     return redirect()->back();
    //     // return view('vendedor', compact('resp'));
    // }

    public function editStatus(Request $request)
    {
        $id = $request->id;
        $status_section = "";
        if ($request->status == 0) {
            $status = "rechazado";
            $status_section = "section-rechazados";
        }
        if ($request->status == 1) {
            $status = "aprobado";
            $status_section = "section-aprobados";
        }
        if ($request->status == 2) {
            $status = "revision";
            $status_section = "section-revision";
        }



        $respuesta = DB::table('incorporacion_solicitudes')
            ->where('id', '=', $request->id)
            ->update([
                "updated_at" => Carbon::now(),
                "status" => $status,
            ]);

        if ($respuesta == 1) {
            return $status_section;
        } else {
            return null;
        }
    }
    // public function editStadistics(Request $request)
    // {
    //     $actual = Stadistics::select('numbers')->where('id', '=', 1)->first();
    //     dd($actual);
    //     $j_numbers = "{";

    //     foreach ($request->input() as $input => $value) {
    //         $j_numbers = $j_numbers . '"' . $input . '"' . ":" . '"' . $value . '",';
    //     }

    //     $j_numbers = substr($j_numbers, 0, -1) . "}";

    //     $id = $request->input('idinput');
    //     DB::table('stadistics')
    //         ->where('id', '=', $id)
    //         ->update([
    //             'numbers' => $j_numbers,
    //         ]);
    //     return redirect()->back();
    // }

    // public function sumStadistic(Request $request)
    // {
    //     // $request->type
    //     $actual = Stadistics::select('numbers')->where('id', '=', 1)->first();
    //     $type = json_decode($actual->numbers, true);
    //     $type[$request->type]++;

    //     $exec = DB::table('stadistics')
    //         ->where('id', '=', 1)
    //         ->update([
    //             'numbers' => $type,
    //         ]);
    //     dd($exec);
    //     return redirect()->back();
    // }
}
