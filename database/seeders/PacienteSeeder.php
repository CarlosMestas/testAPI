<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
        	[
	        	'names' => 'Alex Oscar',
	        	'lastnames' => 'Gamarra Solis'
        	],
        	[
	        	'names' => 'María Perla',
	        	'lastnames' => 'Saruc Main'
        	],
        	[
	        	'names' => 'Julio Ramón',
	        	'lastnames' => 'Quiroga Hasher'
        	],
        	[
        		'names' => 'Mario Idalgo',
				'lastnames' => 'Cuerbo Nieto'
        	],
        	[
        		'names' => 'María Rosa',
        		'lastnames' => 'Jara Uri'
        	],
        	[
        		'names' => 'Kevin Juan',
				'lastnames' => 'Rodriguez Ezquivel'
        	],
        	[
        		'names' => 'Cielo Celeste',
				'lastnames' => 'Lázaro Peterson'
        	]
        ]);
    }
}
