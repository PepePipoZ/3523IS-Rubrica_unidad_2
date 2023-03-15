<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebacontroller extends Controller
{
    function fundatos(Request $request){
    echo $request->nombre;
    echo "<br>";
    echo $request->edad;
    echo "<br>";
    echo $request->correo;
    echo "<br>";
}
}
