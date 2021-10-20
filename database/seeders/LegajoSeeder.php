<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class LegajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('legajos')->insert([
            'parent_legajo_id'=>NULL,
            'cuil_real'=>NULL,
            'credencial'=>NULL,
            'parentesco'=>NULL,
            'fecha_nac'=>NULL,
            'edad'=>NULL,
            'obra_social'=>NULL,
            'fecha_alta'=>NULL,
            'baja_scj'=>NULL,
            'baja_obra_social'=>NULL,
            'cuit'=>NULL,
            'plan_id'=>NULL,
            'contacts'=>NULL,
            'name'=>'Antonia Encarnacion',
            'lastname'=>'Vallejos',
            'dni'=>'36689449',
            'legajo'=>'20000',
            'email'=>'antoeval@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('legajos')->insert([
            'parent_legajo_id'=>1,
            'cuil_real'=>NULL,
            'credencial'=>NULL,
            'parentesco'=>NULL,
            'fecha_nac'=>NULL,
            'edad'=>NULL,
            'obra_social'=>NULL,
            'fecha_alta'=>NULL,
            'baja_scj'=>NULL,
            'baja_obra_social'=>NULL,
            'cuit'=>NULL,
            'plan_id'=>NULL,
            'contacts'=>NULL,
            'name'=>'Ema Lucille',
            'lastname'=>'Vallejos',
            'dni'=>'55114494',
            'legajo'=>'20001',
            'email'=>'antoeval@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
