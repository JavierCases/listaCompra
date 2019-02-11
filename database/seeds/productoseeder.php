<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('productos')->truncate(); //Para vaciar la base de datos.

		DB::table('productos')->insert([
			'nombre' => 'manzana', 'categoria' => 'comida'
		]);
		DB::table('productos')->insert([
			'nombre' => 'anchoa', 'categoria' => 'comida'
		]);
    }
}