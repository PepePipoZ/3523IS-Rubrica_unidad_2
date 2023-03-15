<?php

namespace App\Http\Controllers;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    public function agregar(){
        $grupo= new Grupo();
        $grupo->nombre="Grupo 1";
        $grupo->clave="123456";
        $grupo->save();

    }
}
