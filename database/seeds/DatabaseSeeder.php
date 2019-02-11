<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(productoseeder::class);
        // $this->call(UsersTableSeeder::class);
        //self::seedProductos();
  		//$this->command->info('Tabla productos inicializada con datos!');
    }
}
