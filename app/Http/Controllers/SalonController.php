<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalonController extends Controller
{
    function saludandoAndo($op, $n1,$n2){
        $total=0;

        switch ($op){
            case "suma":
                $total=$n1+$n2;
                break;
            case "resta":
                $total=$n1-$n2;
                break;
            case "multiplicacion":
                $total=$n1*$n2;
                break;
            case "division":
                $total=$n1/$n2;
                break;
            
        }
        echo $total;
    }
}
