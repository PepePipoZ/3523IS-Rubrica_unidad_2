<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    
    $animales= ['perro','gato','pajaro'];
    $personas= ['juan','pepe','toño','lola'];
    $plantas=['marijuanas','violeta','cactus'];
    $
    $elementos=[$animales,$personas,$plantas];

    return view('welcome',['cosas'=>$elementos]);
});
Route::get('/operacion/{op}/{n1}/{n2}', function ($op,$n1,$n2) {
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
    return view('calcu',['total'=>$total]);
});
Route::get('/siu', function () {
    $nombres=array('Jimena','Karely R.','Laura Bozo', 'la profa guapa de ingles', 'Alguna morra de negocios ', 'Karim','Maribel Guardia', 'Emma Wattson','Paquita La del Barrio','La Mona');
    $lugares=array('Tepito','Paris','Casa de tus suegros','Acapulco','Brazil','El basurero','Panteon','LA GRIETA DEL INVOCADOR','Marte','TableDance');
    $transporte=array('burro','corvette','avion','Bochido','Carreta','Camion de basura','A pie','Un ODT','Metro','Barco');
    $hijos=array('3','10','0','100','7','32','2','11','1','4');

    //$nombre = array_rand($nom);

    $num1=rand(0, count($nombres));
    $num2=rand(0,count($lugares));
    $num3=rand(0,count($transporte));
    $num4=rand(0,count($hijos));

    $nombres1= ($nombres [$num1]);
    $lugares1= ($lugares [$num2]);
    $transporte1= ($transporte [$num3]);
    $hijos1 = ($hijos [$num4]);
    return view ('juego',['nombres1'=>$nombres1,'lugares1'=>$lugares1,'transporte1'=>$transporte1,'hijos1'=>$hijos1]);
});
Route::get('/hola', function () {
    //return view('welcome');
    echo "Hola desde laravel";
});
Route::get('/nombres/{paps}', function ($paps) {
    return view('nombres',['paps'=>$paps]);
});
Route::get('/saludo/{op}/{n1}/{n2}',[SalonController::class,'saludandoAndo'])->name('saludandoAndo');
Route::get('/siu', function(){
    return view('formulario');
});
route::get('/hola',function(){
    return view ('prueba');
});

Route::get('/datos',[pruebacontroller::class,'fundatos'])->name('fundatos');

Route::get('/agregar',[GrupoController::class,'agregar'])->name('agregar.grupo');

Route::get('/inicio',[FormController::class,'index'])->name('sitio');
Route::post('/contacto',[FormController::class,'contacto'])->name('formulario.contacto');

Route::get('/login',[LoginController::class,'index'])->name('sitio2');
Route::post('/lala',[LoginController::class,'login'])->name('formulario.login');

Route::get('/bienvenido/{nombre}');
Route::post('/inicio',[EmpleadoController::class,'index'])->name('sitio3');
Route::post('/empresa',[EmpleadoController::class,'empleado'])->name('formulario.Empleado');
