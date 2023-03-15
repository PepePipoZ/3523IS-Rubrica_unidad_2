<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        {
            $nombres=array('Jimena','Karely','Laura', 'Maria', 'Cecilia', 'Karim','Jose', 'Joshua','Pedro','Roberto');
            for($x=0; $x<40; $x++){
                $persona=$nombres [rand(0,count($nombres)-1)];
                $empleado=new Empleado();
                $empleado->nombre=$persona;
                $empleado->turno="Completo";
                $empleado->puesto="Empleado";
                $empleado->save();
            }
        }
    }
}
