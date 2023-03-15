<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller 
{
     //
     function index(){
        return view(view:'login');
    }
    function login(Request $jsjs ){
    

    try{
        $correo = $jsjs->correo;
        $contrasena= $jsjs->contrasena;
        $contacto=new Login;
        $ok= $contacto::Where('correo',$correo)->where('contrasena',$contrasena)->first();
        if($ok==null){
            echo "Usuario no encontrado o contraseña incorrecta";
        }else{
            var_dump($ok);
        }
    }catch(\Trowable $th){
        echo "Otro error";
    }

    }
    
}
