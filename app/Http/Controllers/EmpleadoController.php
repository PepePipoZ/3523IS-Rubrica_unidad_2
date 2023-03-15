<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    function index(){
        return view(view:'inicio');
    }
    function empleado(Request $jsjs ){
    $nombre = $jsjs->nombre;
    $turno= $jsjs->turno;
    $puesto= $jsjs->puesto;

    try{
        $empleado= new Empleado();
        $empleado->nombre=$nombre;
        $empleado->turno=$turno;
        $empleado->puesto=$puesto;
        $empleado->save();
        return response()->json([
            "mensaje"=>"Emeplqado creado",
            "nombre"=>$empleado->nombre,
            "turno"=>$empleado->turno,
            "puesto"=>$empleado->puesto
        ],200);
    }catch(\Exception $th){
        return response()->json([
            "mensaje"=>"Usuario no encontrado"
        ],500);
    }

    }
}
