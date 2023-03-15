<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class FormController extends Controller
{
    //
    function index(){
        return view(view:'inicio');
    }
    function contacto(Request $jsjs ){
    $nombre = $jsjs->nombre;
    $turno= $jsjs->turno;
    $puesto= $jsjs->puesto;

    try{
        $contacto= new Contacto();
        $contacto->nombre=$nombre;
        $contacto->turno=$turno;
        $contacto->puesto=$puesto;
        $contacto->save();
    }catch(\Trowable $th){
        echo "error, no se encuentran los";
    }

    }
    
}
