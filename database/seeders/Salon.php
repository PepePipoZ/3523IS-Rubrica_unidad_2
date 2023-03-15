<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salones;
class Salon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($x=0; $x<10; $x++){
            $salon=new Salones();
            $salon->numero="Salon 24";
            $salon->save();
        }
    }
}
