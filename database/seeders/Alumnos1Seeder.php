<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno1;

class Alumnos1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=0; $x<10; $x++){
            $alumno=new Alumno1();
            $alumno->nombre="YAEL";
            $alumno->apellido="SANTANA";
            $alumno->id_salon=$x+1;
            $alumno->save();
        }
    }
}
